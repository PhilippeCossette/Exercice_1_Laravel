/*!
 * Start Bootstrap - Modern Business v5.0.7 (https://startbootstrap.com/template-overviews/modern-business)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
 */
// This file is intentionally blank
// Use this file to add JavaScript to your project

// Function to change the navbar state on scroll
function navBarState() {
    const navBar = document.getElementById("mainNav");

    if (!navBar) return;

    document.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navBar.classList.remove("bg-transparent");
            navBar.classList.add("scrolled");
        } else {
            navBar.classList.remove("scrolled");
            navBar.classList.add("bg-transparent");
        }
    });
}

document.addEventListener("DOMContentLoaded", navBarState);
