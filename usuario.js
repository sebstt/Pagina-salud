function cambiarFoto() {
    const nuevaFoto = prompt("Ingresa la URL de la nueva foto:");
    if (nuevaFoto) {
        document.getElementById("foto-perfil").src = nuevaFoto;
    }
}

function cambiarNombre() {
    const nuevoNombre = prompt("Ingresa tu nuevo nombre:");
    if (nuevoNombre) {
        document.getElementById("nombre-usuario").innerText = nuevoNombre;
    }
}