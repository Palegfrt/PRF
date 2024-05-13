window.addEventListener("load", function () {
    const container = document.querySelector(".container");
    const elements = container.querySelectorAll("h1, form, p");
  
    elements.forEach((element, index) => {
      element.style.opacity = "0";
      element.style.transform = "translateY(50px)";
      element.style.transition = "opacity 0.8s ease, transform 0.8s ease";
  
      setTimeout(() => {
        element.style.opacity = "1";
        element.style.transform = "translateY(0)";
      }, (index + 1) * 200);
    });
  });
  // Escuchar los eventos de entrada en los campos de contraseña
passwordInput.addEventListener('input', checkPasswords);
confirmPasswordInput.addEventListener('input', checkPasswords);
  // Obtener referencias a los elementos del DOM
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirmPassword');
const button = document.getElementById('myButton');
const warningMessage = document.getElementById('warningMessage');

// Función para verificar si las contraseñas coinciden
function checkPasswords() {
  if (passwordInput.value === confirmPasswordInput.value) {
    button.style.pointerEvents = 'auto'; // Habilitar el hover en el botón
    warningMessage.textContent = ''; // Limpiar el mensaje de advertencia
  } else {
    button.style.pointerEvents = 'none'; // Deshabilitar el hover en el botón
    warningMessage.textContent = 'Las contraseñas no coinciden'; // Mostrar mensaje de advertencia
  }
}

