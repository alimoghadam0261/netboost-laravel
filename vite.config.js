import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import compression from 'vite-plugin-compression';

export default defineConfig({
    css: {
        postcss: {
            plugins: [
                tailwindcss,
                autoprefixer,
            ]
        }
    },

    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/all.css',
                'resources/css/admin.css',
                'resources/js/app.js',
                'resources/js/all.min.js',
            ],
            refresh: true,
        }),
        compression({
            algorithm: 'gzip',
        }),
    ]
});

