import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/sass/app.scss',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
            'bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'admin-lte': path.resolve(__dirname, 'node_modules/admin-lte'),
        },
    },
});
