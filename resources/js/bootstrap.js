import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import { initPerformanceChart, initContactChart, initTotalPerformanceChart } from './charts';

document.addEventListener('DOMContentLoaded', () => {
    initPerformanceChart();
    initContactChart();
    initTotalPerformanceChart();
});
