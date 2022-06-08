

import Dropzone from "dropzone";

/* autodiscover false 
porque dropzone busca un elemento con la clase dropzone
pero yo quiero darle el comportamiento a que endpoint y a que ruta
quiero mandar las imagenes*/
Dropzone.autoDiscover = false;

// creando una instancia y su selector de dropzone
const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage: "Sube aqui tu imagen",
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
})

// import './bootstrap';
