(function () {
    "use strict";

    const root = document.documentElement;
    const toggle = document.getElementById("fm-theme-toggle");
    const storageKey = window.mhdferdiansyahBlog && window.mhdferdiansyahBlog.storageKey
        ? window.mhdferdiansyahBlog.storageKey
        : "mhdferdiansyah-blog-theme";

    if (!toggle) {
        return;
    }

    const stored = localStorage.getItem(storageKey);

    if (stored === "dark") {
        root.classList.add("fm-dark");
    }

    toggle.addEventListener("click", function () {
        const dark = root.classList.toggle("fm-dark");
        localStorage.setItem(storageKey, dark ? "dark" : "light");
    });
}());
