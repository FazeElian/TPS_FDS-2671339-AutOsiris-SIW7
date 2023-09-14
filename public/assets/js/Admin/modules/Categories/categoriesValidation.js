document.getElementById("form-categories").addEventListener("submit", function(event) {
    // Evitar que el formulario se envíe automáticamente
    event.preventDefault();

    // Obtener los valores de los campos de entrada
    var nombre = document.getElementById("nombre").value;
    var descripcion = document.getElementById("descripcion").value;

    // Realizar las validaciones
        // Nombre - Campo vacío
        if(nombre === ""){
            alert("El nombre de categoría es un dato que no puede estar vacío");
            return;
        }

        // Nombre - Caracteres máximos
        var maxLengthName = 30;

        if (nombre.length >= maxLengthName) {
            alert("El nombre de categoría excede la cantidad de caracteres");
            return;
        }

        // Nombre - Caracteres inválidos
        var nombreRegex = /^[a-zA-Z\s]*$/; // Solo Texto (mayúsculas y minúsculas)

        if (!nombreRegex.test(nombre)) {
            alert("Por favor, ingresa un nombre de categoría válido (Solo texto)");
            return;
        }

        // Descripción - Campo vacío
        if(descripcion === ""){
            alert("Debes darle una descripción a la categoría");
            return;
        }

        // Descripción - Caracteres máximos
        var maxLengthDescription = 50;

        if (descripcion.length >= maxLengthDescription) {
            alert("La descripción de categoría excede la cantidad de caracteres");
            return;
        }

        // Descripción - Caracteres inválidos
        var descripcionRegex = /^[a-zA-Z\s]*$/; // Solo Texto (mayúsculas y minúsculas)

        if(!descripcionRegex.test(descripcion)) {
            alert("Por favor, ingresa una descripción de categoría válida (Solo texto)");
            return;
        }
    this.submit();
});
