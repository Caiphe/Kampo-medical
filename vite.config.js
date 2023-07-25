import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/aos.css',
                'resources/css/about.css',
                'resources/css/appointment.css',
                'resources/css/contact.css',
                'resources/css/custom.css',
                'resources/css/slick-theme.css',
                'resources/css/slick.css',
                'resources/css/index.css',
                'resources/css/services.css',

                'resources/js/aos.js',
                'resources/js/appointment.js',
                'resources/js/contact.js',
                'resources/js/custom.js',
                'resources/js/index.js',
                'resources/js/slick.js',
                'resources/js/jquery-2.js',
            ],
            refresh: true,
        }),
    ],
});
