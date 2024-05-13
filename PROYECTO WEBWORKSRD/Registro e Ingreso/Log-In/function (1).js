
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
  