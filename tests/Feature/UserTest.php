<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

// Importamos modelo de módulo -> Usuario
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/'); // Verificar que el usuario pueda acceder a la ruta principal

        $response->assertStatus(200);
    }

    // Test: Un usuario puede acceder a la vista de Inicio de Sesión
    public function test_a_user_can_view_a_login_form() {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    // Test: Un usuario puede acceder a la vista de Registro de Usuario
    public function test_a_user_can_view_a_register_form() {
        $response = $this->get('/register');

        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }

    // Test: Un usuario puede Registrarse
    // public function test_a_user_can_register() {
    //     // Creación usuario de prueba
    //     $user = User::factory()->create([
    //         "name" => "name test example",
    //         "email" => "emailtest@example.ex",
    //         "password" => "12345",
    //     ])->toArray();

    //     $response = $this->post("/register", $user); // Va a recolectar los datos de $user en la ruta register
    //     $response->assertRedirect("/"); // Redirección a la página principal

    //     // Verificar que el usuario se haya almacenado correctamente en la base de datos
    //     $this->assertDatabaseHas("users", $user);
    // }
}
