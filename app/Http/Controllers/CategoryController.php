<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Para consultas desde tablas para buscador

/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Obtenemos valor de input de búsqueda
        $inputSearchValue = trim($request->get("searchCategory"));

        $categories = Category::paginate(8);

        return view('Admin.category.index', compact('categories', "inputSearchValue"))
            ->with('i', (request()->input('page', 1) - 1) * $categories->perPage());
    }

    // Función para buscar categorías
    public function search(Request $request)
    {
        // Obtenemos valor de input de búsqueda
        $inputSearchValue = trim($request->get("searchCategory"));

        // Autoincrementable para Columna No de vista
        $a = 0;
        $i = $a++;

        // Realiza las consultas a las tablas junto con la tabla categorías
        $categories = DB::table("categories")
            ->select("id", "name", "description")
            ->where("name", "LIKE", "%" . $inputSearchValue . "%")
            ->orWhere("id", "LIKE", "%" . $inputSearchValue . "%")
            ->orderBy("name", "asc")
            ->paginate(10);

        return view('Admin.category.index', compact("categories", "i", "inputSearchValue"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        return view('Admin.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Category::$rules);

        $category = Category::create($request->all());

        return redirect()->route('categories.index')->with("created", "La categoría de productos ha sido creada");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $category = Category::find($id);

    //     return view('Admin.category.index', compact('category'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('Admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        request()->validate(Category::$rules);

        $category->update($request->all());

        return redirect()->route('categories.index')->with("updated", "Los cambios de categoría de productos han sido actualizados");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();

        return redirect()->route('categories.index')->with("deleted", "La categoría de productos ha sido eliminada");
    }
}
