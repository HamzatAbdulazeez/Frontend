import Chart from 'chart.js/auto';

// Bar Chart (Performance)
export function initPerformanceChart() {
    const ctx = document.getElementById('barChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Online blast', 'Offline blast'],
                datasets: [{
                    label: 'Performance',
                    data: [48, 30],
                    backgroundColor: ['#3F3FFF', '#CCF261']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }
}

// Doughnut Chart
export function initContactChart() {
    const ctx = document.getElementById('doughnutChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Television', 'Billboards', 'Models'],
                datasets: [{
                    data: [20, 32, 18],
                    backgroundColor: ['#F28E2B', '#E15759', '#B07AA1']
                }]
            },
            options: {
                responsive: true,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    }
}

// Total Performance Chart
export function initTotalPerformanceChart() {
    const ctx = document.getElementById('totalBarChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Models', 'Influencers', 'Billboards', 'News', 'Blogs', 'Cinema', 'Television', 'Events', 'Vehicles'],
                datasets: [{
                    data: [20, 48, 55, 40, 20, 50, 15, 18, 57],
                    backgroundColor: ['#B07AA1', '#3F3FFF', '#E15759', '#7F5539', '#F4A261', '#8ECAE6', '#FFB703', '#FDD835', '#4CAF50']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }
}
