<?php

namespace App\Http\Controllers;

use App\DetailFacture;
use Illuminate\Http\Request;

/**
 * Class DetailFactureController
 * @package App\Http\Controllers
 */
class DetailFactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailFactures = DetailFacture::paginate();

        return view('detail-facture.index', compact('detailFactures'))
            ->with('i', (request()->input('page', 1) - 1) * $detailFactures->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detailFacture = new DetailFacture();
        return view('detail-facture.create', compact('detailFacture'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetailFacture::$rules);

        $detailFacture = DetailFacture::create($request->all());

        return redirect()->route('detail-factures.index')
            ->with('success', 'DetailFacture created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailFacture = DetailFacture::find($id);

        return view('detail-facture.show', compact('detailFacture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detailFacture = DetailFacture::find($id);

        return view('detail-facture.edit', compact('detailFacture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetailFacture $detailFacture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailFacture $detailFacture)
    {
        request()->validate(DetailFacture::$rules);

        $detailFacture->update($request->all());

        return redirect()->route('detail-factures.index')
            ->with('success', 'DetailFacture updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detailFacture = DetailFacture::find($id)->delete();

        return redirect()->route('detail-factures.index')
            ->with('success', 'DetailFacture deleted successfully');
    }
}
