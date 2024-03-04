<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Para consultas desde tablas para buscador

/**
 * Class InventoryController
 * @package App\Http\Controllers
 */
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Obtenemos el valor de búsqueda del formulario
        $inputSearchValue = trim($request->get("search"));

        // Contador autoincrementable para la columna "No" en la vista
        $a = 0;
        $i = $a++;

        // Realizamos consultas a las tablas junto con la tabla de productos
        $inventories = Inventory::with(['product' => function ($query) use ($inputSearchValue) {
            // Aplicamos una condición de búsqueda en la relación 'product' por el nombre
            $query->where('name', 'LIKE', "%{$inputSearchValue}%");
        }])
            ->select("inventories.id", "inventories.product_id", "inventories.initial_stock", "inventories.output", "inventories.stock")
            ->whereHas('product', function ($query) use ($inputSearchValue) {
                // Aplicamos una condición de búsqueda en la relación 'product' por el nombre
                $query->where('name', 'LIKE', "%{$inputSearchValue}%");
            })
            ->orWhere("inventories.id", "LIKE", "%" . $inputSearchValue . "%")
            ->orderBy("inventories.product_id", "asc")
            ->paginate(8);

        return view('Admin.inventory.index', compact("inventories", "i", "inputSearchValue"));
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

        return redirect()->route('inventories.index')->with("created", "El inventario de producto fue registrado");
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

        return redirect()->route('inventories.index')->with("updated", "Los cambios de inventario de producto han sido actualizados");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventory = Inventory::find($id)->delete();

        return redirect()->route('inventories.index')->with("deleted", "El inventario de producto ha sido eliminado");
    }
}
