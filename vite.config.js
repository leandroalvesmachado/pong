import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/admin.css',
                'resources/js/admin.js',
                'resources/css/login.css',
                'resources/js/login.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                format: 'cjs', // Configura o formato de saída para CommonJS
            },
        },
    },
});
