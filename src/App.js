import React from "react";

// Dom de React para Rutas
import { Routes, Route } from "react-router-dom";

// Importación de componentes
  // Encabezado de vistas de Usuarios
  // import HeaderUsers from "./components/HeaderUsers";

  // Encabezado de App
  import HeaderAdmin from "./components/HeaderAdmin";

// Importación de componentes de vistas de Usuarios
  // Iniciar sesión
  import LoginView from "./views/modules/Users/LoginView";

  // Registrarse
  import RegisterView from "./views/modules/Users/RegisterView"

// Importación de componentes de vistas de Administrador
  // Home - Página Principal
  import HomeView from "./views/HomeView";

  // Estadísticas
  import StatisticsView from "./views/modules/Statistics/StatisticsView";

  // Productos
  import ProductsView from "./views/modules/Products/ProductsView";

function App() {
  return (
    // Creación de rutas - Interfaz Administrador
    <Routes>
      <Route path="/">
        {/* Creamos la ruta para las vistas de Usuarios: Iniciar sesión, Registrarse */}
        <Route path="login" element={<LoginView />} ></Route>
        <Route path="register" element={<RegisterView />}></Route>
      </Route>
      <Route path="/">
        {/* Creamos una ruta principal, donde las subrutas incluirán el componente de Menú o encabezado superior */}
        <Route path="admin" element={<HeaderAdmin />}>
          <Route path="home" element={<HomeView />} /> {/* Página principal */}
          <Route path="statistics" element={<StatisticsView />} /> {/* Estadísticas */}
          <Route path="sales" /> {/* Ventas */}
          <Route path="factures" /> {/* Facturas */}
          <Route path="products" element={<ProductsView />} /> {/* Productos */}
          <Route path="inventories" /> {/* Inventarios */}
          <Route path="user">
            <Route path="profile" ></Route> {/* Perfil */}
          </Route>
        </Route>
      </Route>
    </Routes>
  );
}

export default App;
