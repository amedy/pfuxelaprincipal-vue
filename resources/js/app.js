

import './bootstrap';
import { createApp } from 'vue';



const app = createApp({});

import Principal from './components/Principal.vue';
app.component('principal', Principal);


app.mount('#app');
