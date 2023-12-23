import React, { useState, useEffect, useRef } from "react";

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
    import Home from "../assets/img/icons/HomeMobile.png";
    
    // Ventas
    import SalesIcon from "../assets/img/icons/Sales.png";

    // Productos
    import ProductsIcon from "../assets/img/icons/Products.png";

    // Facturas
    import FacturesIcon from "../assets/img/icons/Factures.png";

    // Inventarios
    import InventoriesIcon from "../assets/img/icons/Inventories.png";

// Componentes para este componente de vista}
    // Drop down de Usuario
    import { HeaderUserDropDown } from "./Admin/HeaderUserDropDown";

export default function HeaderAdmin(){
    // Creación estado para menú
    const [navMenu, setNavMenu] = useState(false);
    const navMenuRef = useRef();

    // Función para cambiar estado de menú
    const handleNavMenu = () => {
        setNavMenu(!navMenu);
    }

    // Cierra el menú cuando se hace clic fuera de él
    const handleClickOutsideMenu = (event) => {
        if (!navMenuRef.current.contains(event.target)) {
            setNavMenu(false);
        }
    };

    // Registra el evento de click fuera del contenedor del menú
    useEffect(() => {
        document.addEventListener("mouseout", handleClickOutsideMenu);
    }, []);

    // Creación de estado de dropdown, con un valor por defecto de false -> DropDown inactivo
    const [ userDropdown, setUserDropdown ] = useState (false)
    const dropDownUserRef = useRef();

    // Función para mostrar dropdown de ítem de usuario
    const handleUserDropDown = () => {
        setUserDropdown(!userDropdown)
    }

    return(
        <>
            {/* Menú superior */}
            <header className="menu_sup">
                <nav className="nav-inicio">
                    {/* Icono de Menú responsive */}
                    <div className="icono-menu">
                        {/* Icono Menú */}
                        <div className="icono-menu-responsive">
                            <button 
                                className="btn-menu-responsive" 
                                onClick={handleNavMenu}
                            >
                                <img src={MenuIcon} alt="" />
                            </button>
                        </div>

                        {/* Icono Página Principal */}
                        <div className="icono-menu-pc">
                            <img src={HomeIcon} alt="Home Icon" />                        
                        </div>
                    </div>

                    {/* Lista navegación  */}
                    <ul className={ `lista_nav-inicio ${navMenu ? "active" : ""}` } ref={navMenuRef}>
                        <li className="item_nav-inicio"><Link to="/admin/home" ><img src={Home} alt="" />Inicio</Link></li>
                        <li className="item_nav-inicio"><Link to="/admin/sales"><img src={SalesIcon} alt="" />Ventas</Link></li>
                        <li className="item_nav-inicio li-facturas"><Link to="/admin/factures"><img src={FacturesIcon} alt="" />Facturas</Link></li>
                        <li className="item_nav-inicio"><Link to="/admin/products"><img src={ProductsIcon} alt="" />Productos</Link></li>
                        <li className="item_nav-inicio li-inventarios"><Link to="/admin/inventories"><img src={InventoriesIcon} alt="" />Inventarios</Link></li>
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

                    <button 
                        className="icono-usuario"
                        onClick={handleUserDropDown}
                    >
                        <img src={UserIcon} alt="" />
                    </button>
                    <div ref={dropDownUserRef}>
                        {userDropdown && <HeaderUserDropDown />}
                    </div>
                </nav>
            </header>  

            {/* Para rutas */}
            <Outlet />   
        </>
    )
}