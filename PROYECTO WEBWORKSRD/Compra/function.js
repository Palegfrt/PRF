const accordionHeaders = document.querySelectorAll('.accordion-header');
const labels = document.querySelectorAll('label');

accordionHeaders.forEach((header, index) => {
    header.addEventListener('click', () => {
        // Oculta todos los contenidos del acordeón
        document.querySelectorAll('.accordion-content').forEach((content) => {
            content.style.display = 'none';
        });

        // Muestra el contenido correspondiente al índice del acordeón seleccionado
        document.querySelectorAll('.accordion-content')[index].style.display = 'block';

        // Cambia el contenido de las etiquetas según la opción seleccionada
        labels.forEach((label, i) => {
            label.textContent = `Contenido ${index * 3 + i + 1}`;
        });
    });
});