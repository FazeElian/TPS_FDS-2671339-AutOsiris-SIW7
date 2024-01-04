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

  // Ventas
  import SalesView from "./views/modules/Sales/SalesView";

  // Productos
  import ProductsView from "./views/modules/Products/ProductsView";

  // Categorías de Productos
  import CategoriesView from "./views/modules/Categories/CategoriesView";

  // Inventarios
  import InventoriesView from "./views/modules/Inventories/InventoriesView";

  // Perfil
  import ProfileView from "./views/modules/Profile/ProfileView";

  // Facturas
  import FacturesView from "./views/modules/Factures/FacturesView";

  // Clientes de Facturas
  import CustomersView from "./views/modules/Customers/CustomersView";

// Importación vista Error 404 - Página no encontrada
import Error404AdminView from "./views/Exceptions/Error404AdminView";
import Error404CustomerView from "./views/Exceptions/Error404CustomerView";

function App() {
  return (
    <Routes>
      {/* Rutas para vistas de Usuarios: Iniciar sesión, Registrarse */}
      <Route path="login" element={<LoginView />} />
      <Route path="register" element={<RegisterView />} />

      {/* Rutas para la interfaz de Administrador */}
      <Route path="admin/*" element={<HeaderAdmin />}>
        <Route path="home" element={<HomeView />} /> {/* Página principal */}
        <Route path="sales" element={<SalesView />} /> {/* Ventas */}

        <Route path="factures/*" element={<FacturesView />} /> {/* Facturas */}
        <Route path="factures/customers" element={<CustomersView />} /> {/* Clientes de Facturas */}

        <Route path="products/*" element={<ProductsView />} /> {/* Productos */}
        <Route path="products/categories" element={<CategoriesView />} />

        <Route path="inventories" element={<InventoriesView />} /> {/* Inventarios */}
        <Route path="profile" element={<ProfileView />} /> {/* Perfil */}

        {/* Ruta Error 404 - Página no encontrada */}
        <Route path="*" element={<Error404AdminView />} /> {/* Vista Administrador */}
      </Route>

      {/* Ruta Error 404 - Página no encontrada */}
      <Route path="*" element={<Error404CustomerView />} /> {/* Vista Cliente */}
    </Routes>
  );
}

export default App;
