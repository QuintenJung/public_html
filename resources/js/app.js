import './bootstrap';

const dropdownButton = document.getElementById("notDropdownButton")
const dropdownContent = document.getElementById("notDropdownContent")

dropdownContent.classList.add("hide")

dropdownButton.addEventListener("click", () => {
    let dropdownClassList = dropdownContent.classList
    if (!dropdownClassList.contains("hide")) {
        dropdownClassList.add("hide")
    } else {
        dropdownClassList.remove("hide")
    }
})

document.addEventListener("click", () => {
    let dropdownClassList = dropdownContent.classList
    if (dropdownButton.matches(":hover")) {
        if (!dropdownClassList.contains("hide")) {
            dropdownClassList.remove("hide")
        } else {
            dropdownClassList.add("hide")
        }
    } else {
        dropdownClassList.add("hide")
    }
})