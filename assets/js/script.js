// Copyright
document.getElementById("year").innerHTML = new Date().getFullYear()


// Certificates Lightbox

function certificates() {
  let itemIndex = 0
  const lightbox = document.querySelector(".lightbox")
  const certItem = document.querySelectorAll(".certificate-item")
  const prevItem = document.getElementById("prev-item")
  const nextItem = document.getElementById("next-item")

  function toggleLightbox() {
    const a = window.matchMedia("(max-height: 500px)")
    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent)
    if (a.matches || isMobile) {
      if (lightbox.classList.contains("open")) { lightbox.classList.remove("open") }
      else { console.log("Your screen is too small for Lightbox!") }
    } else { lightbox.classList.toggle("open") }
  }

  function changeItem() {
    const lightboxImage = lightbox.querySelector(".lightbox-image")
    const lightboxText = lightbox.querySelector(".caption-text")
    const lightboxCounter = lightbox.querySelector(".caption-counter")
    const imageStyle = document.querySelector(".lightbox .lightbox-content img")
    const imageAlt = certItem[itemIndex].querySelector(".certificate-image img").getAttribute("alt")

    lightboxImage.src = certItem[itemIndex].querySelector(".certificate-image img").getAttribute("src")
    lightboxText.innerHTML = certItem[itemIndex].querySelector(".certificate-image img").getAttribute("name")
    lightboxCounter.innerHTML = (itemIndex + 1) + " of " + certItem.length

    if (imageAlt === "mos1" || imageAlt === "mtcna" || imageAlt === "oracle") {
      imageStyle.style.height = "435px"
    } else { imageStyle.style.height = "650px" }
  }

  prevItem.addEventListener("click", function () {
    if (itemIndex === 0) { itemIndex = certItem.length - 1 }
    else { itemIndex-- }
    changeItem()
  })

  nextItem.addEventListener("click", function () {
    if (itemIndex === certItem.length - 1) { itemIndex = 0 }
    else { itemIndex++ }
    changeItem()
  })

  for (let i = 0; i < certItem.length; i++) {
    certItem[i].addEventListener("click", function () {
      itemIndex = i
      toggleLightbox()
      changeItem()
    })
  }

  if (lightbox != null) {
    lightbox.addEventListener("click", function (event) {
      if (event.target === lightbox.querySelector(".lightbox-close")) {
        toggleLightbox()
      }
    })
  }

  document.addEventListener("keydown", function (event) {
    if (lightbox != null) {
      if (lightbox.classList.contains("open") && event.which == 27) {
        lightbox.classList.remove("open")
      } else if (lightbox.classList.contains("open") && event.which == 37) {
        if (itemIndex === 0) { itemIndex = certItem.length - 1 }
        else { itemIndex-- }
        changeItem()
      } else if (lightbox.classList.contains("open") && event.which == 39) {
        if (itemIndex === certItem.length - 1) { itemIndex = 0 }
        else { itemIndex++ }
        changeItem()
      }
    }
  })
}


// Menus

let currentUrl = window.location.pathname
const homeLink = document.getElementById("home-link")
const abouLink = document.getElementById("abou-link")
const certLink = document.getElementById("cert-link")
const portLink = document.getElementById("port-link")
// const blogLink = document.getElementById("blog-link")
const downLink = document.getElementById("down-link")

if (currentUrl === "/" || currentUrl === "") {
  document.title = `${document.title} | Home`
  homeLink.classList.add("active")
  abouLink.classList.remove("active")
  certLink.classList.remove("active")
  portLink.classList.remove("active")
  // blogLink.classList.remove("active")
  fetch("/pages/home.html").then(res => res.text()).then(html => {
    document.getElementById("content").innerHTML = html
  })
} else if (currentUrl === "/about") {
  document.title = `${document.title} | About`
  homeLink.classList.remove("active")
  abouLink.classList.add("active")
  certLink.classList.remove("active")
  portLink.classList.remove("active")
  // blogLink.classList.remove("active")
  fetch("/pages/about.html").then(res => res.text()).then(html => {
    document.getElementById("content").innerHTML = html
  })
} else if (currentUrl === "/certificates") {
  document.title = `${document.title} | Certificates`
  homeLink.classList.remove("active")
  abouLink.classList.remove("active")
  certLink.classList.add("active")
  portLink.classList.remove("active")
  // blogLink.classList.remove("active")
  fetch("/pages/certificates.html").then(res => res.text()).then(html => {
    document.getElementById("content").innerHTML = html
    certificates()
  })
} else if (currentUrl === "/projects") {
  document.title = `${document.title} | Projects`
  homeLink.classList.remove("active")
  abouLink.classList.remove("active")
  certLink.classList.remove("active")
  portLink.classList.add("active")
  // blogLink.classList.remove("active")
  fetch("/pages/projects.html").then(res => res.text()).then(html => {
    document.getElementById("content").innerHTML = html
  })
} /* else if (currentUrl === "/blogs") {
  document.title = `${document.title} | Blogs`
  homeLink.classList.remove("active")
  abouLink.classList.remove("active")
  certLink.classList.remove("active")
  portLink.classList.remove("active")
  blogLink.classList.add("active")
  fetch("/pages/blogs.html").then(res => res.text()).then(html => {
    document.getElementById("content").innerHTML = html
  })
} */

downLink.addEventListener("click", () => {
  setTimeout(() => { alert("Resume downloaded successfully") }, 900)
})


// Style Switcher

const styleSwitcher = document.querySelector(".style-switcher")

document.querySelector(".switcher-toggle").addEventListener("click", () => {
  styleSwitcher.classList.toggle("open")
})

function setActiveColor(color) {
  const links = document.querySelectorAll(".alternative-color")

  for (let i = 0; i < links.length; i++) {
    if (color === links[i].getAttribute("title")) {
      if (color == "Red") {
        localStorage.removeItem("Yellow")
        localStorage.removeItem("Green")
        localStorage.removeItem("Blue")
        localStorage.setItem("Red", true)
        links[i].removeAttribute("disabled")
        if (localStorage.getItem("dark")) {
          document.body.className = "dark"
        } else if (localStorage.getItem("light")) {
          document.body.className = "light"
        } else {
          localStorage.setItem("dark", true)
          document.body.className = "dark"
        }
      } else if (color == "Yellow") {
        localStorage.removeItem("Red")
        localStorage.removeItem("Green")
        localStorage.removeItem("Blue")
        localStorage.setItem("Yellow", true)
        links[i].removeAttribute("disabled")
        if (localStorage.getItem("dark")) {
          document.body.className = "dark"
        } else if (localStorage.getItem("light")) {
          document.body.className = "light"
        } else {
          localStorage.setItem("dark", true)
          document.body.className = "dark"
        }
      } else if (color == "Green") {
        localStorage.removeItem("Yellow")
        localStorage.removeItem("Red")
        localStorage.removeItem("Blue")
        localStorage.setItem("Green", true)
        links[i].removeAttribute("disabled")
        if (localStorage.getItem("dark")) {
          document.body.className = "dark"
        } else if (localStorage.getItem("light")) {
          document.body.className = "light"
        } else {
          localStorage.setItem("dark", true)
          document.body.className = "dark"
        }
      } else {
        localStorage.removeItem("Yellow")
        localStorage.removeItem("Green")
        localStorage.removeItem("Red")
        localStorage.setItem("Blue", true)
        links[i].removeAttribute("disabled")
        if (localStorage.getItem("dark")) {
          document.body.className = "dark"
        } else if (localStorage.getItem("light")) {
          document.body.className = "light"
        } else {
          localStorage.setItem("dark", true)
          document.body.className = "dark"
        }
      }
    } else {
      if (localStorage.getItem("dark")) {
        links[i].setAttribute("disabled", true)
        document.body.className = "dark"
      } else if (localStorage.getItem("light")) {
        links[i].setAttribute("disabled", true)
        document.body.className = "light"
      } else {
        localStorage.setItem("dark", true)
        links[i].setAttribute("disabled", true)
        document.body.className = "dark"
      }
    }
  }
}

if (
  localStorage.getItem("Red") || !localStorage.getItem("Red") &&
  !localStorage.getItem("Blue") && !localStorage.getItem("Green") &&
  !localStorage.getItem("Yellow") 
) {
  document.querySelector("#Red").removeAttribute("disabled")
} else if (localStorage.getItem("Yellow")) {
  document.querySelector("#Yellow").removeAttribute("disabled")
} else if (localStorage.getItem("Green")) {
  document.querySelector("#Green").removeAttribute("disabled")
} else if (localStorage.getItem("Blue")) {
  document.querySelector("#Blue").removeAttribute("disabled")
}

const bodySkin = document.querySelectorAll(".body-skin")

for (let i = 0; i < bodySkin.length; i++) {
  bodySkin[i].addEventListener("change", function () {
    if (this.value === "dark") {
      localStorage.removeItem("light")
      localStorage.setItem("dark", this.checked)
      document.body.className = "dark"
      if (localStorage.getItem("Red")) {
        document.querySelector("#Red").removeAttribute("disabled")
      } else if (localStorage.getItem("Yellow")) {
        document.querySelector("#Yellow").removeAttribute("disabled")
      } else if (localStorage.getItem("Green")) {
        document.querySelector("#Green").removeAttribute("disabled")
      } else if (localStorage.getItem("Blue")) {
        document.querySelector("#Blue").removeAttribute("disabled")
      } else {
        document.querySelector("#Red").removeAttribute("disabled")
      }
    } else {
      localStorage.removeItem("dark")
      localStorage.setItem("light", this.checked)
      document.body.className = "light"
      if (localStorage.getItem("Red")) {
        document.querySelector("#Red").removeAttribute("disabled")
      } else if (localStorage.getItem("Yellow")) {
        document.querySelector("#Yellow").removeAttribute("disabled")
      } else if (localStorage.getItem("Green")) {
        document.querySelector("#Green").removeAttribute("disabled")
      } else if (localStorage.getItem("Blue")) {
        document.querySelector("#Blue").removeAttribute("disabled")
      } else {
        document.querySelector("#Red").removeAttribute("disabled")
      }
    }
  })
}

if (!localStorage.getItem("light")) {
  document.body.className = "dark"
  document.querySelector("#dark").setAttribute("checked", true)
} else {
  document.body.className = "light"
  document.querySelector("#light").setAttribute("checked", true)
}


// Responsive Sidebar

const navTogglerButton = document.querySelector(".nav-toggler")
const sidebar = document.querySelector(".sidebar")

navTogglerButton.addEventListener("click", () => {
  navTogglerButton.classList.toggle("open")
  sidebar.classList.toggle("open")
})

document.addEventListener("keydown", function (event) {
  if (styleSwitcher.classList.contains("open") && event.which == 27) {
    styleSwitcher.classList.remove("open")
  }
  if (navTogglerButton.classList.contains("open") && event.which == 27) {
    navTogglerButton.classList.remove("open")
  }
  if (sidebar.classList.contains("open") && event.which == 27) {
    sidebar.classList.remove("open")
  }
})