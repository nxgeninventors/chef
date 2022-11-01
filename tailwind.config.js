const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                gray: {
                    400 : '#969798',
                    500 : '#666666',
                    700 : '#353535',
                    800 : '#1f2a37',
                    900 : '#101928',
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        pagination: theme => ({
            // Customize the color only. (optional)
            color: theme('colors.teal.600'),
        })
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('tailwindcss-plugins/pagination'),
    ],
};


// theme: {
//     pagination: theme => ({
//         // Customize the color only. (optional)
//         color: theme('colors.teal.600'),
    
//         // Customize styling using @apply. (optional)
//         wrapper: 'flex justify-center list-reset',
    
//         // Customize styling using CSS-in-JS. (optional)
//         wrapper: {
//             'display': 'flex',
//             'justify-items': 'center',
//             '@apply list-reset': {},
//         },
//     })
// },
// plugins: [
//     require('tailwindcss-plugins/pagination'),
// ],