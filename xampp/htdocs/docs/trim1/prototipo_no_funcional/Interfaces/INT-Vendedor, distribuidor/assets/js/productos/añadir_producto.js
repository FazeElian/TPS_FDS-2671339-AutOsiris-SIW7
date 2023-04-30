function uploadFile() {
    var blobFile = $('#subir_imagen').files[0];
    var formData = new FormData();
    formData.append("fileToUpload", blobFile);

    $.ajax({
       url: "upload.php",
       type: "POST",
       data: formData,
       processData: false,
       contentType: false,
       success: function(response) {
           // .. hacer algo...
       },
       error: function(jqXHR, textStatus, errorMessage) {
           console.log(errorMessage); // Opcional
       }
    });
}