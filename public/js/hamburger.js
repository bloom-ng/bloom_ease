document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");
  
    // Show menu and hide hamburger
    hamburger.addEventListener("click", () => {
      menu.classList.remove("hidden");
      hamburger.classList.add("hidden");
    });
  
    // Hide menu and show hamburger when clicking outside the menu
    document.addEventListener("click", (event) => {
      if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
        menu.classList.add("hidden");
        hamburger.classList.remove("hidden");
      }
    });
  });