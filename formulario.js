document.addEventListener("DOMContentLoaded", () => {
    const enfermedadSi = document.getElementById("enfermedad-si");
    const enfermedadNo = document.getElementById("enfermedad-no");
    const enfermedadesLista = document.getElementById("enfermedades-lista");

    enfermedadSi.addEventListener("change", () => {
        enfermedadesLista.classList.remove("hidden");
    });

    enfermedadNo.addEventListener("change", () => {
        enfermedadesLista.classList.add("hidden");
    });
});
