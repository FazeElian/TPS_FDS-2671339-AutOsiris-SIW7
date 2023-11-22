// Estilos para este componente
// import "../../../assets/css/views/Admin/Statistics/StatisticsView.css";

// Imágenes - Iconos
    import TotalPorcentSales from "../../../assets/img/statistics-total-porcent-sales.jpg";
    import TotalSales from "../../../assets/img/statistics-total-sales.png";
    import ProductExample from "../../../assets/img/notebook.webp";

export default function StatisticsView(){
    return (
        <>
            {/* Contenido de página */}
            <section class="content-page">
                {/* Titulo de ventana */}
                <div class="title-page">
                    <h1>Estadísticas</h1>
                </div>
                {/* Número de usuarios actuales de tu Tienda Online */}
                <div class="num-usuarios">
                    <img src={TotalPorcentSales} alt="Imagen Estadística Porcentaje total de ventas" />
        
                    <div class="usuarios">
                        <h2>Porcentaje de Ventas</h2>
                        <div class="num">
                            <h2>346</h2>
                        </div>
                    </div>
                </div>
        
                {/* Visitas  diarias de tu sitio web */}
                <div class="visitas-diarias">
                    <img src={TotalSales} alt="Imagen Estadística Total de ventas" />
        
                    <div class="visitas">
                        <h2>Ventas Diarias</h2>
                        <div class="num">
                            <h2>1203</h2>
                        </div>
                    </div>
                </div>
        
                {/* Productos más vendidos esta semana */}
                <div class="prod_mas_vendidos">
                    <div class="texto-productos">
                        <h2>Productos más vendidos esta semana: 01/01/23</h2>
                    </div>
        
                    <section class="productos">
                        {/* Fila 1 - Productos */}
                        <div class="cont-productos1">
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        {/* Fila 2 - Productos */}
                        <div class="cont-productos2">
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        {/* Fila 3 Responsive - Productos */}
                        <div class="cont-productos3">
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor_de_producto">
                                <img src={ProductExample} alt="Imagen ejemplo producto" />
        
                                <div class="info-prod">
                                    <div class="nombre-prod">
                                        <h1>Nombre de producto</h1>
                                        <h1>Nombre de producto</h1>
                                    </div>
        
                                    <div class="info-compra">
                                        <li class="item-info-compra">Precio: 10.000 $</li>
                                        <li class="item-info-compra">Cantidad: 12</li>
                                        <li class="item-info-compra">Código: Cd32136</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </>
    )
}