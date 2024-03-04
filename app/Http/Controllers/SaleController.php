<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF; // Importamos librería para exportación de PDF de Venta

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::paginate(8);

        return view('Admin.sale.index', compact('sales'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }

    public function create()
    {
        $products = Product::all();
        $sale = new Sale();

        return view('Admin.sale.create', compact('sale', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'product_id.*' => 'required|distinct',
            'quantity.*' => 'required|numeric',
            'price.*' => 'required|numeric',
        ]);

        $sale = Sale::create([
            'date' => $request->input('date'),
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

        $sale->total = $total;
        $sale->save();

        $sale->products()->sync($productData);

        return redirect()->route('sales.index')->with('created', 'Venta creada con éxito');
    }

    public function show($id)
    {
        $sale = Sale::find($id);
        $products = $sale->products;

        return view('Admin.sale.show', compact('sale', 'products'));
    }

    public function edit($id)
    {
        $sale = Sale::find($id);
        $products = $sale->products;
        $allProducts = Product::all();
        $selectedProducts = $sale->products;

        return view('Admin.sale.edit', compact('sale', 'products', 'allProducts', 'selectedProducts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
        ]);

        $sale = Sale::find($id);

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

        $sale->products()->sync($productData);
        $sale->total = $total;
        $sale->save();

        return redirect()->route('sales.index')->with('updated', 'Venta actualizada con éxito');
    }

    public function destroy($id)
    {
        $sale = Sale::find($id)->delete();

        return redirect()->route('sales.index')->with('deleted', 'Venta eliminada con éxito');
    }
}
