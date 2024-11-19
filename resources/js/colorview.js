document.addEventListener('DOMContentLoaded', function () {
    const ritmoSelect = document.getElementById('ritmo-select'); // Selecciona el dropdown
    const defaultClass = 'form-control'; // Clase base para el input

    // Función para actualizar dinámicamente el color
    function updateRitmoColor() {
        // Remueve las clases anteriores de colores
        ritmoSelect.classList.remove('bg-success', 'bg-warning', 'bg-danger');

        // Aplica la clase correspondiente según el valor seleccionado
        switch (ritmoSelect.value) {
            case 'rapido':
                ritmoSelect.classList.add('bg-success'); // Verde
                break;
            case 'moderado':
                ritmoSelect.classList.add('bg-warning'); // Amarillo
                break;
            case 'lento':
                ritmoSelect.classList.add('bg-danger'); // Rojo
                break;
            default:
                break;
        }
    }

    // Actualiza el color al cargar la página (si hay un valor preseleccionado)
    updateRitmoColor();

    // Escucha cambios en el dropdown y actualiza el color dinámicamente
    ritmoSelect.addEventListener('change', updateRitmoColor);
});
