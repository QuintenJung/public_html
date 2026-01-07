import './bootstrap';

const dropdownButton = document.getElementById("notDropdownButton")
const dropdownContent = document.getElementById("notDropdownContent")
console.log(dropdownContent.classList)
dropdownContent.classList.add("hide")

dropdownButton.addEventListener("click", () => {
    let dropdownClassList = dropdownContent.classList
    if (!dropdownClassList.contains("hide")) {
        dropdownContent.classList.add("hide")
    } else {
        dropdownClassList.remove("hide")
    }
})
