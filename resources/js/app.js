import './bootstrap';
import 'laravel-datatables-vite';
import '../sass/app.scss';

import { createApp } from 'vue';
import HelloWorld from '@/components/HelloWorld.vue';

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        HelloWorld
    },
}).mount('#app');
