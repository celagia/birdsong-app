import './bootstrap';

import { createApp } from 'vue';
import Slider from './components/Slider.vue';

const app = createApp({ components: { Slider } })

app.mount('#app');