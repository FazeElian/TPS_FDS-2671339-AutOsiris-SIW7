import React from "react";
import HeaderAdmin from "./components/HeaderAdmin";

// Dom de React para Rutas
import { Routes, Route } from "react-router-dom";

function App() {
  return (
    // Creación de rutas - Interfaz Administrador
    <Routes>
      <Route path="/">
        {/* Creamos una ruta principal, donde las subrutas incluirán el componente de Menú o encabezado superior */}
        <Route path="admin" element={<HeaderAdmin />}>
          <Route path="home" /> {/* Página principal */}
          <Route path="statistics" /> {/* Estadísticas */}
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
