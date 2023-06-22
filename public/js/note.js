const submitButton = document.querySelector("button[type='submit']");

const handleSubmit = () => {
    submitButton.disabled = true;
};

document.querySelector("form").addEventListener("submit", handleSubmit);

const toggleMenuBtn = document.getElementById("toggleMenu");
const menu = document.getElementById("menu");
const darkOverlay = document.getElementById("darkOverlay");

const handleClickOutsideMenu = (event) => {
    if (!menu.contains(event.target) && !toggleMenuBtn.contains(event.target)) {
        menu.classList.add("hidden");
        darkOverlay.style.display = "none";
    }
};

const handleToggleMenu = () => {
    menu.classList.toggle("hidden");
    darkOverlay.style.display = menu.classList.contains("hidden")
        ? "none"
        : "block";
};

toggleMenuBtn.addEventListener("click", handleToggleMenu);
document.addEventListener("click", handleClickOutsideMenu);

var fileInput = document.getElementById("fileInput");
var previewContainer = document.getElementById("previewContainer");
var previewImage = document.getElementById("previewImage");
var textareaInput = document.getElementById("textareaInput");

fileInput.addEventListener("change", function (e) {
    var file = e.target.files[0];
    var reader = new FileReader();

    if (file) {
        reader.onload = function (e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = "flex";
            textareaInput.style.marginTop = "8px";
        };
        reader.readAsDataURL(file);
    } else {
        previewContainer.style.display = "none";
        textareaInput.style.marginTop = "4px";
    }
});
