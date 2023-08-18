<?php

namespace App\Http\Controllers;

use App\Models\UnitSale;
use Illuminate\Http\Request;

/**
 * Class UnitSaleController
 * @package App\Http\Controllers
 */
class UnitSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unitSales = UnitSale::paginate();

        return view('Admin.sales.unit-sale.index', compact('unitSales'))
            ->with('i', (request()->input('page', 1) - 1) * $unitSales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unitSale = new UnitSale();
        return view('Admin.sales.unit-sale.index', compact('unitSale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UnitSale::$rules);

        $unitSale = UnitSale::create($request->all());

        return redirect()->route("unit_sales.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unitSale = UnitSale::find($id);

        return view('Admin.sales.unit-sale.show', compact('unitSale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unitSale = UnitSale::find($id);

        return view('Admin.sales.unit-sale.edit', compact('unitSale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UnitSale $unitSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnitSale $unitSale)
    {
        request()->validate(UnitSale::$rules);

        $unitSale->update($request->all());

        return redirect()->route("unit_sales.index");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unitSale = UnitSale::find($id)->delete();

        return redirect()->route("unit_sales.index");
    }
}
