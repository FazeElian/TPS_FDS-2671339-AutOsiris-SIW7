import React from "react";

// Rutas
import { Outlet, Link } from "react-router-dom";

// Estilos para este componente
import "../assets/css/components/HeaderAdmin.css";

// Imágenes - Iconos
    // Menú
    import MenuIcon from "../assets/img/icons/Menu.png";

    // Usuario
    import UserIcon from "../assets/img/icons/User.png";

    // Página Principal
    import HomeIcon from "../assets/img/icons/Home.png";

export default function HeaderAdmin(){
    return(
        <>
            {/* Menú superior */}
            <header className="menu_sup">
                <nav className="nav-inicio">
                    {/* Icono de Menú responsive */}
                    <button className="icono-menu">
                        {/* Icono Menú */}
                        <div className="icono-menu-responsive">
                            <img src={MenuIcon} alt="" />
                        </div>

                        {/* Icono Página Principal */}
                        <div className="icono-menu-pc">
                            <img src={HomeIcon} alt="Home Icon" />                        
                        </div>
                    </button>

                    {/* Lista navegación  */}
                    <ul className="lista_nav-inicio">
                        <li className="item_nav-inicio"><Link to="/admin/home" >Inicio</Link></li>
                        <li className="item_nav-inicio"><Link to="/admin/sales">Ventas</Link></li>
                        <li className="item_nav-inicio li-facturas"><Link to="/admin/factures">Facturas</Link></li>
                        <li className="item_nav-inicio"><Link to="/admin/products">Productos</Link></li>
                        <li className="item_nav-inicio li-inventarios"><Link to="/admin/inventories">Inventarios</Link></li>
                    </ul>
                </nav>
        
                {/* Navegación de ítems Usuario */}
                <nav className="nav-usuario">
                    <ul className="lista_nav-usuario">
                        <Link to="/admin/user/profile"><li className="item_nav-usuario">Mi perfil</li></Link>
                        <Link to="/">
                            <li className="item_nav-usuario cerrar_sesion">Cerrar Sesión</li>
                        </Link>
                    </ul>

                    <button className="icono-usuario">
                        <img src={UserIcon} alt="" />
                    </button>
                </nav>
            </header>  

            {/* Para rutas */}
            <Outlet />   
        </>
    )
}