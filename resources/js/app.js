import "./bootstrap";
import "flowbite";
import $ from "jquery";

import ClientsCtrl from "./controllers/clients";
import UsersCtrl from "./controllers/users";
import PostsCtrl from "./controllers/posts";
import ProjectsCtrl from "./controllers/projects";

var CtrlObj = {
    ClientsCtrl,
    UsersCtrl,
    PostsCtrl,
    ProjectsCtrl
};

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

$(document).ready(function () {
    // alert("ddd")
    $(".data-ctrl").each(function () {
        var ctrl = $(this).data("ctrl");
        console.log(ctrl);
        if (
            typeof ctrl != "undefined" &&
            ctrl != null &&
            typeof CtrlObj[ctrl] != "undefined"
        ) {
            CtrlObj[ctrl]().init();
        }
    });

    // $(".hamburger .hamburger__inner").click(function () {
    //     $("body").toggleClass("close");
    // });
});
