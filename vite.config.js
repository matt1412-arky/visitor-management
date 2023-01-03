import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/support/css/style.css', 'public/support/js/dashboard/dashboard-1.js'],
            refresh: true,
        }),
    ],
});
