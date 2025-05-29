// tailwind.config.js
const defaultTheme = require('tailwindcss/defaultTheme');

export default {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    safelist: [
        // نمونه کلاس‌هایی که ممکنه داینامیک باشن
        /^bg-/,
        /^text-/,
        /^hover:/,
        /^focus:/,
        /^border-/,
        /^shadow-/,
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['IRANSans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [],
};

