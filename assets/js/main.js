new WOW().init();

const darkModeSwitch = document.getElementById("darkModeSwitch");
const body = document.body;

darkModeSwitch.addEventListener("change", () => {
    if (darkModeSwitch.checked) {
        body.classList.add("dark-mode");
    } else {
        body.classList.remove("dark-mode");
    }
});
