<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Facture;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF; // Importamos librería para exportación de PDF de factura

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::paginate(8);

        return view('Admin.facture.index', compact('factures'))
            ->with('i', (request()->input('page', 1) - 1) * $factures->perPage());
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::pluck('name', 'id');
        $facture = new Facture();

        return view('Admin.facture.create', compact('facture', 'customers', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'customer_id' => 'required',
            'product_id.*' => 'required|distinct',
            'quantity.*' => 'required|numeric',
            'price.*' => 'required|numeric',
        ]);

        $facture = Facture::create([
            'date' => $request->input('date'),
            'customer_id' => $request->input('customer_id'),
        ]);

        $productData = [];
        $productIds = $request->input('product_id');
        $quantities = $request->input('quantity');
        $prices = $request->input('price');

        $total = 0;

        foreach ($productIds as $key => $productId) {
            $quantity = $quantities[$key];
            $price = $prices[$key];

            $subtotal = $quantity * $price;
            $total += $subtotal;

            $productData[$productId] = [
                'quantity' => $quantity,
                'price' => $price,
            ];
        }

        $facture->total = $total;
        $facture->save();

        $facture->products()->sync($productData);

        return redirect()->route('factures.index')->with('created', 'Factura creada con éxito');
    }

    public function show($id)
    {
        $facture = Facture::find($id);
        $products = $facture->products;

        return view('Admin.facture.show', compact('facture', 'products'));
    }

    public function edit($id)
    {
        $facture = Facture::find($id);
        $customers = Customer::pluck('name', 'id');
        $products = $facture->products;
        $allProducts = Product::all();
        $selectedProducts = $facture->products;

        return view('Admin.facture.edit', compact('facture', 'products', 'customers', 'allProducts', 'selectedProducts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
            'customer_id' => 'required',
        ]);

        $facture = Facture::find($id);

        $productData = [];
        $productIds = $request->input('product_id');
        $quantities = $request->input('quantity');
        $prices = $request->input('price');

        $total = 0;

        foreach ($productIds as $key => $productId) {
            $productData[$productId] = [
                'quantity' => $quantities[$key],
                'price' => $prices[$key],
            ];

            $subtotal = $quantities[$key] * $prices[$key];
            $total += $subtotal;
        }

        $facture->products()->sync($productData);
        $facture->total = $total;
        $facture->save();

        return redirect()->route('factures.index')->with('updated', 'Factura actualizada con éxito');
    }

    public function destroy($id)
    {
        $facture = Facture::find($id)->delete();

        return redirect()->route('factures.index')->with('deleted', 'Factura eliminada con éxito');
    }

    // Función para generar factura
    public function showPDF($id)
    {
        $facture = Facture::find($id); // Busca la factura por su ID

        if ($facture) {
            $pdf = PDF::loadView("Admin.facture.pdf", ["facture" => $facture]);
            return $pdf->stream();
        } else {
            // Manejar el caso en el que no se encuentra la factura
            return redirect()->route('factures.index')->with('error', 'Factura no encontrada');
        }
    }
}
