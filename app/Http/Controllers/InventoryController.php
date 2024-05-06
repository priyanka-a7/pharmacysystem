<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Validation\Rule;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();
        return view('inventory.index', compact('inventory'));
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'quantity' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'numeric', 'min:0'],
            'expiry_date' => ['nullable', 'date'],
            'manufacturer' => ['nullable', 'string', 'max:255'],
        ]);

        Inventory::create($validatedData);
        return redirect()->route('inventory.index')->with('success', 'Inventory item created successfully.');
    }

    public function edit($inventoryId)
    {
        $inventory = Inventory::findOrFail($inventoryId);
        return view('inventory.edit', compact('inventory'));
    }

    public function update(Request $request, $inventoryId)
    {
        $inventory = Inventory::findOrFail($inventoryId);

        $validatedData = $request->validate([
            'item_name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'quantity' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'numeric', 'min:0'],
            'expiry_date' => ['nullable', 'date'],
            'manufacturer' => ['nullable', 'string', 'max:255'],
        ]);

        $inventory->update($validatedData);
        return redirect()->route('inventory.index')->with('success', 'Inventory item updated successfully.');
    }

    public function destroy($inventoryId)
    {
        $inventory = Inventory::findOrFail($inventoryId);
        $inventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Inventory item deleted successfully.');
    }
}
