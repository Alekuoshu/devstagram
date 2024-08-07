import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

window.addEventListener("DOMContentLoaded", function () {
  const dropzoneElement = document.querySelector("#dropzone");
  if (!dropzoneElement) {
    return;
  }
  // Carga de Dropzone
  const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube o arrastra la imagen aquí",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
      if (document.querySelector('[name="imagen"]').value.trim()) {
        const img = {};
        img.size = 1234;
        img.name = document.querySelector('[name="imagen"]').value;
        this.options.addedfile.call(this, img);
        this.options.thumbnail.call(this, img, `/uploads/${img.name}`);
        img.previewElement.classList.add("dz-success", "dz-complete");
      }
    },
  });

  dropzone.on("removedfile", function () {
    console.log("removedfile");
    document.querySelector('[name="imagen"]').value = "";
  });

  dropzone.on("success", function (file, response) {
    document.querySelector('[name="imagen"]').value = response.imagen;
  });

  dropzone.on("error", function (file, response) {
    console.log("error", response);
  });

  // dropzone.on("sending", function (file, xhr, formData) {
  //   console.log(formData);
  // });
});
