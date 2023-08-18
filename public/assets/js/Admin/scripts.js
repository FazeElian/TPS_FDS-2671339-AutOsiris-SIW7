//Despliegue Ítems Inicio
const iconoInicio = document.querySelector(".icono-menu");
const lista_navInicio = document.querySelector(".lista_nav-inicio");

iconoInicio.addEventListener("click", () =>{
    lista_navInicio.classList.toggle("nav_inicio-visible");
});

//Despliegue Ítems Usuario
const iconoUsuario = document.querySelector(".icono-usuario");
const lista_navUsuario = document.querySelector(".lista_nav-usuario");

iconoUsuario.addEventListener("click", () =>{
    lista_navUsuario.classList.toggle("nav_usuario-visible");
});
