document.getElementById("form-roles").addEventListener("submit", function(event) {
    // Evitar que el formulario se envíe automáticamente
    event.preventDefault();

    // Obtener los valores de los campos de entrada
    var nombre = document.getElementById("nombre").value;
    var descripcion = document.getElementById("descripcion").value;

    // Realizar las validaciones
        // Nombre - Campo vacío
        if(nombre === ""){
            alert("El nombre de rol es un dato que no puede estar vacío");
            return;
        }

        // Nombre - Caracteres máximos
        var maxLengthName = 50;

        if (nombre.length >= maxLengthName) {
            alert("El nombre de rol excede la cantidad de caracteres");
            return;
        }

        // Nombre - Caracteres inválidos
        var nombreRegex = /^[a-zA-Z\s]*$/; // Solo Texto (mayúsculas y minúsculas)

        if (!nombreRegex.test(nombre)) {
            alert("Por favor, ingresa un nombre de rol válido (Solo texto)");
            return;
        }

        // Descripción - Campo vacío
        if(descripcion === ""){
            alert("Debes darle una descripción al rol");
            return;
        }

        // Descripción - Caracteres máximos
        var maxLengthDescription = 30;

        if (descripcion.length >= maxLengthDescription) {
            alert("La descripción de rol excede la cantidad de caracteres");
            return;
        }

        // Descripción - Caracteres inválidos
        descripcionRegex = /^[a-zA-Z0-9]*$/; // Texto y números

        if(!descripcionRegex.test(descripcion)) {
            alert("Por favor, ingresa una descripción de rol válida (Solo texto y números)");
            return;
        }
    this.submit();
});
