document.getElementById("form-inventories").addEventListener("submit", function(event) {
    // Evitar que el formulario se envíe automáticamente
    event.preventDefault();

    // Obtener los valores de los campos de entrada
    var nombreProducto = document.getElementById("seleccionar-prod").value;
    var entradas = document.getElementById("entradas").value;
    var salidas = document.getElementById("salidas").value;

    // Realizar las validaciones
        // Nombre Producto - Campo vacío
        if(nombreProducto === ""){
            alert("Debes seleccionar un producto para asignarle un inventario");
            return;
        }

        // Entradas - Campo vacío
        if(entradas === ""){
            alert("Debes ingresar un valor de entradas de producto");
            return;
        }

        // Entradas - Caracteres máximos
        var maxLength = 5; // Cantidad de caracteres

        if (entradas.length > maxLength) {
            alert("La cantidad de entradas ingresadas supera el límite");
            return;
        }

        // Entradas - Caracteres inválidos
        var Regex = /^\d*$/; // Solo números enteros

        if(!Regex.test(entradas)) {
            alert("Por favor, ingresa una cantidad de entradas (Solo números, no decimales)");
            return;
        }

        // Salidas - Campo vacío
        if(salidas === ""){
            alert("Debes ingresar un valor de salidas de producto");
            return;
        }

        // Salidas - Caracteres máximos
        if (salidas.length > maxLength) {
            alert("La cantidad de salidas ingresadas supera el límite");
            return;
        }

        // Salidas - Caracteres inválidos
        if(!Regex.test(salidas)) {
            alert("Por favor, ingresa una cantidad de salidas (Solo números, no decimales)");
            return;
        }

        // Salidas - Cuando es mayor que el valor de entradas
        if (salidas.length > entradas.length){
            alert("La cantidad de salidas no puede ser superior a la cantidad de entradas");
            return;
        }

    this.submit();
});
