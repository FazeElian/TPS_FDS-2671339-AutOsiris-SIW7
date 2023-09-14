<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Role;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Class FactureController
 * @package App\Http\Controllers
 */
class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::paginate();

        return view('facture.index', compact('factures'))
            ->with('i', (request()->input('page', 1) - 1) * $factures->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facture = new Facture();
        $roles = Role::pluck("name", "id");

        // Crear una factura
        // $facture = Facture::create([
        //     "id" => 1,
        //     'date' => now(),
        //     'role_id' => 2,
        // ]);

        // Obtener productos que deseas agregar a la factura (tabla de productos)
        $products = Product::whereIn('id', [10, 12, 13])->get(); // Agrega los productos necesarios

        // Adjuntar productos a la factura con cantidades y precios totales
        $uploadedProducts = [];

        foreach ($products as $product) {
            $facture->amountProduct; // Cantidad de productos
            $totalProduct = $product->price * $facture->amountProduct; // Precio total por producto

            $uploadedProducts[$product->id] = [
                'amountProduct' => $facture->amountProduct,
                'totalProduct' => $totalProduct,
            ];
        }

        $facture->product()->attach($uploadedProducts);

        return view('facture.create', compact('facture', "roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Facture::$rules);

        $facture = Facture::create($request->all());

        return redirect()->route('factures.index')
            ->with('success', 'Facture created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facture = Facture::find($id);

        return view('facture.show', compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facture = Facture::find($id);
        $roles = Role::pluck("name", "id");

        return view('facture.edit', compact('facture', "roles"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Facture $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        request()->validate(Facture::$rules);

        $facture->update($request->all());

        return redirect()->route('factures.index')
            ->with('success', 'Facture updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facture = Facture::find($id)->delete();

        return redirect()->route('factures.index')
            ->with('success', 'Facture deleted successfully');
    }
}
