document.addEventListener("DOMContentLoaded", function () {
    const elementosFactura = document.getElementById("elementos-factura");
    const agregarElementoBtn = document.getElementById("agregar-elemento");

    agregarElementoBtn.addEventListener("click", function () {
        const filaElemento = `
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" name="descripcion[]" class="form-control" placeholder="Descripción">
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="cantidad[]" class="form-control" placeholder="Cantidad">
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="precio[]" class="form-control" placeholder="Precio">
                </div>
                <div class="form-group col-md-2">
                    <button type="button" class="eliminar-elemento btn btn-danger">Eliminar</button>
                </div>
            </div>
        `;
        elementosFactura.insertAdjacentHTML("beforeend", filaElemento);
    });

    elementosFactura.addEventListener("click", function (e) {
        if (e.target && e.target.classList.contains("eliminar-elemento")) {
            e.target.closest(".form-row").remove();
        }
    });
});
