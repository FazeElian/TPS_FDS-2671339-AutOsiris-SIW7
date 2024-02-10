<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Modelo de ventas
use App\Models\Sale;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sales = Sale::paginate();

        // Filtrar ventas registradas hoy
        $todaySales = Sale::whereDate('created_at', now()->toDateString())->get();

        return view('home', compact('sales', 'todaySales'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }
}
