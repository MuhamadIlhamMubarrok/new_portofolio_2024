import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
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
