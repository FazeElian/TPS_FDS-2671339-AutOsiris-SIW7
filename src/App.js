import React from "react";

// Dom de React para Rutas
import { Routes, Route } from "react-router-dom";

// Importación de componentes
  // Encabezado de App
  import HeaderAdmin from "./components/HeaderAdmin";

// Importación de componentes de vistas
  // Home - Página Principal
  import HomeView from "./views/HomeView";

  // Estadísticas
  import StatisticsView from "./views/modules/Statistics/StatisticsView";

function App() {
  return (
    // Creación de rutas - Interfaz Administrador
    <Routes>
      <Route path="/">
        {/* Creamos una ruta principal, donde las subrutas incluirán el componente de Menú o encabezado superior */}
        <Route path="admin" element={<HeaderAdmin />}>
          <Route path="home" element={<HomeView />} /> {/* Página principal */}
          <Route path="statistics" element={<StatisticsView />} /> {/* Estadísticas */}
          <Route path="sales" /> {/* Ventas */}
          <Route path="factures" /> {/* Facturas */}
          <Route path="products" /> {/* Productos */}
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
