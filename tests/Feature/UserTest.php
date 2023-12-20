<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

// Importamos modelo de módulo -> Usuario
// use App\Models\User;

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

    // Test: Un usuario puede Iniciar Sesión
    // public function test_a_user_can_login() {
    //     // Crear un usuario de prueba
    //     $user = User::factory()->create([
    //         'name' => "name2 example",
    //         'email' => 'test2@example.com',
    //         'password' => bcrypt('password'), // Cifrar contraseña
    //     ]);

        // Visitar la página de inicio de sesión
        // $response = $this->post('/login', [
        //     'name' => "name2 example",
        //     'email' => 'test2@example.com',
        //     'password' => 'password',
        // ]);

        // Verificar que el usuario esté redirigido después de iniciar sesión
        // $response->assertRedirect('/home'); // Redirección a la página principal de Administrador

        // Verificar que el usuario esté autenticado
        // $this->assertAuthenticatedAs($user);
    // }
}
