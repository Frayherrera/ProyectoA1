const toggle = document.querySelector(".toggle")
const menuDashboard = document.querySelector(".menu-dashboard")
const iconoMenu = toggle.querySelector("i")
const enlacesMenu = document.querySelectorAll(".enlace")

// Despliega el menú cuando el puntero pase por encima
toggle.addEventListener("mouseenter", () => {
    menuDashboard.classList.add("open")
    iconoMenu.classList.replace("bx-menu", "bx-x")
})

// Cierra el menú cuando el puntero salga del área del menú
toggle.addEventListener("mouseleave", () => {
    menuDashboard.classList.remove("open")
    iconoMenu.classList.replace("bx-x", "bx-menu")
})

// Opción para que el menú se despliegue al pasar el mouse sobre los enlaces
enlacesMenu.forEach(enlace => {
    enlace.addEventListener("mouseenter", () => {
        menuDashboard.classList.add("open")
        iconoMenu.classList.replace("bx-menu", "bx-x")
    })

    enlace.addEventListener("mouseleave", () => {
        menuDashboard.classList.remove("open")
        iconoMenu.classList.replace("bx-x", "bx-menu")
    })
})
