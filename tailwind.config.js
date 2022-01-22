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
            colors: {
                'primary': '#d290f4',
                'primary': {
                    50: '#D290F4',
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
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                aguacate: ['aguacate']
            },

        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};