<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Class InventoryController
 * @package App\Http\Controllers
 */
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::paginate();

        return view('Admin.inventory.index', compact('inventories'))
            ->with('i', (request()->input('page', 1) - 1) * $inventories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventory = new Inventory();
        $products = Product::pluck("name", "id");

        return view('Admin.inventory.create', compact('inventory', "products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inventory::$rules);

        $inventory = Inventory::create($request->all());

        // Resta para volver a hallar stock si cambia algún número de entrada o salida
        $result = $inventory->initial_stock - $inventory->output;
        $inventory->stock = $result;

        // Actualizar el resultado
        $inventory->save();

        return redirect()->route('inventories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::find($id);

        return view('inventory.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        $products = Product::pluck("name", "id");

        return view('Admin.inventory.edit', compact('inventory', "products"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inventory $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        request()->validate(Inventory::$rules);
        $inventory->update($request->all());

        // Resta para volver a hallar stock si cambia algún número de entrada o salida
        $result = $inventory->initial_stock - $inventory->output;

        // Actualizar el resultado en la venta
        $inventory->stock = $result;
        $inventory->save();

        return redirect()->route('inventories.index');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventory = Inventory::find($id)->delete();

        return redirect()->route('inventories.index');
    }
}
