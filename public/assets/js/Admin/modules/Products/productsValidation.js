document.getElementById("form-products").addEventListener("submit", function(event) {
    // Evitar que el formulario se envíe automáticamente
    event.preventDefault();

    // Obtener los valores de los campos de entrada
    var nombre = document.getElementById("nombre-prod").value;
    var codigo = document.getElementById("cod-prod").value;
    var categoria = document.getElementById("select-categoria-prod").value;
    var descripcion = document.getElementById("descripcion-prod").value;
    var precio = document.getElementById("precio-prod").value;

    // Realizar las validaciones
        // Nombre - Campo vacío
        if(nombre === ""){
            alert("El nombre de producto es un dato que no puede estar vacío");
            return;
        }

        // Nombre - Caracteres máximos
        var maxLengthName = 60; // Cantidad de caracteres

        if (nombre.length >= maxLengthName) {
            alert("El nombre de producto excede la cantidad de caracteres");
            return;
        }

        // Nombre - Caracteres inválidos
        var nombreRegex = /^[a-zA-Z\s]*$/; // Solo Texto (mayúsculas y minúsculas)

        if (!nombreRegex.test(nombre)) {
            alert("Por favor, ingresa un nombre de producto válido (Solo texto)");
            return;
        }

        // Código - Campo vacío
        if(codigo === ""){
            alert("El código de producto es un dato que no puede estar vacío");
            return;
        }

        // Código - Caracteres máximos
        var maxLengthCode = 20; // Cantidad de caracteres

        if (codigo.length >= maxLengthCode) {
            alert("El código de producto excede la cantidad de caracteres");
            return;
        }

        // Código - Caracteres inválidos
        codigoRegex = /^[A-Z0-9]*$/; // Mayúsculas y números

        if(!codigoRegex.test(codigo)) {
            alert("Por favor, ingresa un código de producto válido (Solo mayúsculas y números)");
            return;
        }

        // Categoría - Campo vacío
        if(categoria === ""){
            alert("Debes asignarle una categoría al producto");
            return;
        }

        // Descripción - Caracteres máximos
        var maxLengthDescription = 400; // Cantidad de caracteres

        if (descripcion.length >= maxLengthDescription) {
            alert("La descripción de producto excede la cantidad de caracteres");
            return;
        }

        // Descripción - Caracteres inválidos
        var descripcionRegex = /^[a-zA-Z0-9]*$/;

        if(!descripcionRegex.test(descripcion)){
            alert("Por favor, ingresa una descripción de producto válida (Solo texto y números)")
        }

        // Precio - Campo vacío
        if(precio === ""){
            alert("El precio de producto es un valor obligatorio");
            return;
        }

        // Precio - Caracteres máximos
        var maxLengthPrice = 8; // Cantidad de caracteres

        if (precio.length >= maxLengthPrice) {
            alert("El precio de producto excede la cantidad de caracteres");
            return;
        }

    this.submit();
});
