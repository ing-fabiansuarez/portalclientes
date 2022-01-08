const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'primary': {
                100: '#D290F4',
                200: '#D290F4',
                300: '#D290F4',
                400: '#D290F4',
                500: '#D290F4',
                600: '#D290F4',
                700: '#D290F4',
                800: '#D290F4',
                900: '#D290F4',
            },
            'gray': {
                100: '#000000',
                200: '#D290F4',
                300: '#D290F4',
                400: '#D290F4',
                500: '#D290F4',
                600: '#D290F4',
                700: '#D290F4',
                800: '#D290F4',
                900: '#D290F4',
            },
            // ...
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};