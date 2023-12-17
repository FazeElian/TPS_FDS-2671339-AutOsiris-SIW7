<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function testCreateCategory(){
    //     $category = [
    //         "name" => "Categoría ejemplo 1",
    //         "description" => "Descripción Categoria ejemplo 1"
    //     ];

    //     $response = $this->post("products/categories", $category);

    //     $response->assertStatus(302);
    //     $response->assertRedirect(route("categories.index"));

    //     $this->assertDatabaseCount("categories", 3);

    //     $lastCategoryCreated = Category::query()->latest()->first();

    //     $this->assertDatabaseHas("categories", [
    //         "name" => $lastCategoryCreated->name,
    //         "description" => $lastCategoryCreated->description,
    //     ]);

    //     $this->assertDatabaseHas("categories", $category);

    //     $this->assertEquals($category["name"], $lastCategoryCreated->name);
    //     $this->assertEquals($category["description"], $lastCategoryCreated->description);
    // }
}
