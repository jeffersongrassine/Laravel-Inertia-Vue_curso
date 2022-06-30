import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    // server: {
    //     hmr: {
    //         host: 'localhost',
    //     },
    //     watch: {
    //   ignored: ['!**/node_modules/your-package-name/**']
    // },
    // },
    plugins: [
        laravel({
            input: 'resources/css/app.js',
            input: 'resources/js/app.js',
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],

});
