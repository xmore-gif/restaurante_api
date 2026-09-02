<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();

        return response()->json($menuItems);
    }

    public function show($id)
    {
        $menuItem = MenuItem::findOrFail($id);

        return response()->json($menuItem);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:100',
            'available' => 'boolean',
        ]);

        $menuItem = MenuItem::create($datos);

        return response()->json($menuItem, 201);
    }

    public function update(Request $request, $id)
    {
        $menuItem = MenuItem::findOrFail($id);

        $datos = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'price' => 'sometimes|required|numeric|min:0',
            'category' => 'sometimes|required|string|max:100',
            'available' => 'sometimes|boolean',
        ]);

        $menuItem->update($datos);

        return response()->json($menuItem);
    }

    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);

        $menuItem->delete();

        return response()->json([
            'message' => 'Elemento del menú eliminado correctamente.'
        ]);
    }
}