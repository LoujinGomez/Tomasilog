<?php

namespace App\Http\Controllers;

use App\Models\FoodMenu;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    /**
     * Show the form to create a new food menu item.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created food menu item in the database.
     */
    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('food_menu_images', 'public');
            $validated['image'] = $imagePath;
        }

        // Create the food menu item
        FoodMenu::create($validated);

        return redirect()->route('dashboard')->with('success', 'Food menu item added successfully.');
    }

    /**
     * Display a listing of the food menu items.
     */
    public function index()
    {
        $menuItems = FoodMenu::all(); // Fetch all menu items
        return view('dashboard', compact('menuItems')); // Pass to the view
    }



    public function update(Request $request, $id)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the menu item
        $menuItem = FoodMenu::findOrFail($id);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('storage/' . $menuItem->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Delete the file using unlink
            }

            // Save the new image
            $newImagePath = $request->file('image')->store('food_menu_images', 'public');
            $menuItem->image = $newImagePath;
        }

        // Update other fields
        $menuItem->name = $validated['name'];
        $menuItem->description = $validated['description'];
        $menuItem->price = $validated['price'];

        // Save the changes
        $menuItem->save();

        // Redirect back with success message
        return redirect()->route('dashboard')->with('success', 'Menu item updated successfully.');
    }


    public function destroy($id)
    {
        // Find the menu item
        $menuItem = FoodMenu::findOrFail($id);

        // Soft delete the menu item
        $menuItem->delete();

        return redirect()->route('dashboard')->with('success', 'Menu item moved to trash successfully.');
    }


    public function trashed()
    {
        // Retrieve only soft-deleted items
        $trashedItems = FoodMenu::onlyTrashed()->get();

        return view('trashedFoodMenu', compact('trashedItems'));
    }


    public function restore($id)
    {
        // Find the trashed item by ID and restore it
        $menuItem = FoodMenu::withTrashed()->findOrFail($id);
        $menuItem->restore();

        return redirect()->route('food_menu.trashed')->with('success', 'Menu item restored successfully.');
    }


    public function forceDelete($id)
    {
        // Find the trashed item by ID and permanently delete it
        $menuItem = FoodMenu::withTrashed()->findOrFail($id);

        // Delete the associated image if it exists
        if ($menuItem->image) {
            $imagePath = public_path('storage/' . $menuItem->image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image using unlink
            }
        }

        $menuItem->forceDelete();

        return redirect()->route('food_menu.trashed')->with('success', 'Menu item permanently deleted.');
    }


    public function showMenu()
    {
        // Fetch all active (not trashed) food menu items
        $menuItems = FoodMenu::all();

        // Return the view and pass the menu items
        return view('menu', compact('menuItems'));
    }

    public function showMenuInWelcomePage()
    {
        // Fetch all active (not trashed) food menu items
        $menuItems = FoodMenu::all();

        // Return the view and pass the menu items
        return view('welcome', compact('menuItems'));
    }

    

}

