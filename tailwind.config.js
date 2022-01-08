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
            gray: {
                100: '#f7fafc',
                200: '#edf2f7',
                300: '#e2e8f0',
                400: '#cbd5e0',
                500: '#a0aec0',
                600: '#718096',
                700: '#4a5568',
                800: '#2d3748',
                900: '#1a202c',
            },
            // ...
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};