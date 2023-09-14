new WOW().init();

// Function to set a cookie with a given name, value, and expiration date
function setCookie(name, value, days) {
    const expirationDate = new Date();
    expirationDate.setDate(expirationDate.getDate() + days);
    const cookieValue = encodeURIComponent(value) + ((days === null) ? '' : `; expires=${expirationDate.toUTCString()}`);
    document.cookie = `${name}=${cookieValue}; path=/`;
}

// Function to get the value of a cookie by name
function getCookie(name) {
    const cookies = document.cookie.split('; ');
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].split('=');
        if (cookie[0] === name) {
            return decodeURIComponent(cookie[1]);
        }
    }
    return null;
}

const darkModeSwitch = document.getElementById("darkModeSwitch");
const body = document.body;

// Check the user's dark mode preference from the cookie
const darkModePreference = getCookie("darkModePreference");

if (darkModePreference === "dark") {
    darkModeSwitch.checked = true;
    body.classList.add("dark-mode");
}

darkModeSwitch.addEventListener("change", () => {

    if (darkModeSwitch.checked) {
        body.classList.add("dark-mode");
        setCookie("darkModePreference", "dark", 365); // Set the dark mode preference in a cookie for 1 year
    } else {
        body.classList.remove("dark-mode");
        setCookie("darkModePreference", "light", 365); // Set the light mode preference in a cookie for 1 year
    }


});

document.addEventListener("DOMContentLoaded", function () {
    const fontSizeRange = document.getElementById("fontSizeRange");
    const textContainer = document.getElementById("text-container");

    if(fontSizeRange){
        fontSizeRange.addEventListener("input", () => {
            textContainer.style.fontSize = fontSizeRange.value + "px";
        })
    }


    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const menuItems = document.getElementById("menu-items");

    if(mobileMenuButton) {
        mobileMenuButton.addEventListener("click", function () {
            // Toggle the visibility of the menu items
            menuItems.style.display = (menuItems.style.display === "block") ? "none" : "block";
        });
    }
});

function scrollToId(id) {
    let navbarHeight = 150;
    let target = document.getElementById(id);
    if (target) {
        window.scrollTo({
            top: target.offsetTop - navbarHeight,
            behavior: 'smooth'
        });
    }
}

window.addEventListener('hashchange', function() {
    let hash = window.location.hash.substring(1);
    scrollToId(hash);
});

window.addEventListener('load', function() {
    if (window.location.hash) {
        let hash = window.location.hash.substring(1);
        scrollToId(hash);
    }
});