<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Role;
use App\Models\Product;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::paginate();

        return view('Admin.facture.index', compact('factures'))
            ->with('i', (request()->input('page', 1) - 1) * $factures->perPage());
    }

    public function create()
    {
        $facture = new Facture();
        $roles = Role::pluck("name", "id");
        $products = Product::pluck("name" ,"id");

        return view('Admin.facture.create', compact('facture', "roles", "products"));
    }

    public function store(Request $request)
    {
        request()->validate(Facture::$rules);

        $facture = Facture::create($request->all());

        // Después de crear la factura, calcula el total
        // $facture->calcularTotal();

        return redirect()->route('factures.index');
    }

    public function show($id)
    {
        $facture = Facture::find($id);

        return view('Admin.facture.show', compact('facture'));
    }

    public function edit($id)
    {
        $facture = Facture::find($id);
        $roles = Role::pluck("name", "id");
        $products = Product::pluck("name" ,"id");

        return view('Admin.facture.edit', compact('facture', "roles", "products"));
    }

    public function update(Request $request, Facture $facture)
    {
        request()->validate(Facture::$rules);

        $facture->update($request->all());

        // Después de actualizar la factura, calcula el total
        // $facture->calcularTotal();

        return redirect()->route('factures.index');
    }

    public function destroy($id)
    {
        $facture = Facture::find($id)->delete();

        return redirect()->route('factures.index');
    }
}
