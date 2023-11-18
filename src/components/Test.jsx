import React from "react";
import image from "../assets/img/icons/Menu.png";
export default function Test() {
    return (
        <>
            {/* Menú superior */}
            <header className="menu_sup">
                <nav className="nav-inicio">
                    {/* Icono de Menú responsive */}
                    <button className="icono-menu">
                        <div className="icono-menu-responsive">
                            <img src={image} alt="User Icon" />
                        </div>
                        <div className="icono-menu-pc">
                            <a href="f"><img src="" alt="Menu Icon" /></a>
                        </div>
                    </button>
                    <ul className="lista_nav-inicio">
                        <li className="item_nav-inicio"><a href="/home">Inicio</a></li>
                        <li className="item_nav-inicio"><a href="/home">Estadísticas</a></li>
                        <li className="item_nav-inicio"><a href="/home">Ventas</a></li>
                        <li className="item_nav-inicio li-facturas"><a href="/home">Facturas</a></li>
                        <li className="item_nav-inicio"><a href="/home">Productos</a></li>
                        <li className="item_nav-inicio li-inventarios"><a href="/home">Inventarios</a></li>
                    </ul>
                </nav>
            </header>
        </>
    );
}
