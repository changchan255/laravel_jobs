import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/pages/home.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/js',
        assetsDir: '', 
        rollupOptions: {
            output: {
                entryFileNames: 'home.js', // Tên tệp đầu ra
            },
        },
    },
});
