const { addIconSelectors } = require("@iconify/tailwind");
const { addDynamicIconSelectors } = require("@iconify/tailwind");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                abril: ["Abril Fatface", "serif"],
                julius: ["Julius Sans One", "serif"],
                inter: ["Inter", "serif"],
            },
            animation: {
                fadeIn: "fadeIn 1s ease-out",
            },
            boxShadow: {
                "custom-thick":
                    "0 10px 15px -3px rgba(0, 0, 0, 0.5), 0 4px 6px -2px rgba(0, 0, 0, 0.3)",
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
        // Iconify plugin, requires writing list of icon sets to load
        addIconSelectors(["mdi", "mdi-light"]),
        // Iconify plugin
        addDynamicIconSelectors(),
    ],
};
