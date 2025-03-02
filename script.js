document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(this);

    fetch('submit_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('form-message').textContent = data;
        document.getElementById('contact-form').reset(); // Limpiar el formulario
    })
    .catch(error => {
        document.getElementById('form-message').textContent = 'Hubo un error al enviar el mensaje.';
    });
});