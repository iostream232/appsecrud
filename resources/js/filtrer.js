document.getElementById('searchInput').addEventListener('keyup', function () {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll('#tableBody tr'); // Asegúrate de que tu <tbody> tenga el ID "tableBody"

    rows.forEach(row => {
        let nombre = row.querySelector('.nombre').textContent.toLowerCase();
        let estilo = row.querySelector('.estilo').textContent.toLowerCase();
        let ritmo = row.querySelector('.ritmo').textContent.toLowerCase();

        // Mostrar la fila si alguna columna coincide con el filtro
        if (nombre.includes(filter) || estilo.includes(filter) || ritmo.includes(filter)) {
            row.style.display = ''; // Mostrar fila
        } else {
            row.style.display = 'none'; // Ocultar fila
        }
    });
});
