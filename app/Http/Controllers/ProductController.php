<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// Guardar Imagen en el storage
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request $request
     */
    public function index(Request $request)
    {
        // Obtenemos valor de input de búsqueda
        $inputSearchValue = trim($request->get("search"));

        // Autoincrementable para Columna No de vista
        $a = 0;
        $i = $a++;

        // Realiza las consultas a las tablas junto con la tabla categorías
        $products = Product::with('category')
        ->select("id", "name", "categorie_id")
        ->where("name", "LIKE", "%" . $inputSearchValue . "%")
        ->orWhere("categorie_id", "LIKE", "%" . $inputSearchValue . "%")
        ->orderBy("name", "asc")
        ->paginate(8); // Paginación de registros

        $categories = Category::select("id", "name")->get();

        return view('Admin.product.index', compact("products", "categories" ,"inputSearchValue", "i"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::pluck("name", "id");

        return view('Admin.product.create', compact('product', "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     */

     public function store(Request $request)
     {
        request()->validate(Product::$rules);

        // Adjuntar imagen del producto
        if ($request->hasFile("image")) {
           $imagePath = $request->file("image")->store("products_images", "public");

           // Convertir a JPG
           $image = Image::make(public_path("storage/{$imagePath}"))->encode("jpg", 75);
           $image->save();
           $product = Product::create($request->all());
           $product->image = $imagePath;
           $product->save();
        } else {
           $product = Product::create($request->all());
        }

        return redirect()->route('products.index')->with("created", "Producto creado con éxito");
     }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('Admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck("name", "id");

        return view('Admin.product.edit', compact('product', "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        // Guardar la ruta de la imagen actual
        $currentImagePath = $product->image;

        // Actualizar la información del producto
        $product->update($request->all());

        if ($request->hasFile("image")) {
            // Eliminar la imagen anterior si existe
            if ($currentImagePath) {
                Storage::disk('public')->delete($currentImagePath);
            }

            // Guardar y convertir la nueva imagen
            $imagePath = $request->file("image")->store("products_images", "public");
            $image = Image::make(public_path("storage/{$imagePath}"))->encode("jpg", 75);
            $image->save();

            // Actualizar la ruta de la imagen en la base de datos
            $product->image = $imagePath;
            $product->save();
        } else {
            // Si no se carga una nueva imagen, mantener la imagen actual
            $product->image = $currentImagePath;
            $product->save();
        }

        return redirect()->route('products.index')->with("updated", "Los cambios de producto han sido actualizados");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')->with("deleted", "El producto ha sido eliminado");
    }

    public function mostrarValor() {
        $valorBbdd = 1000000; // Este valor proviene de la base de datos
        return view("Admin.product.index", ['price' => $valorBbdd]);
    }
}
