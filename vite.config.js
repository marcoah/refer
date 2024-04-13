import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
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
    resolve: {
        alias: {
            '~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'vue': 'vue/dist/vue.esm-bundler.js',
            '$': 'jQuery',
        }
    }
});
