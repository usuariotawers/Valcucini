document.addEventListener('DOMContentLoaded', function () {
    fetch('/Vl/controlador/datos_visitas.php')
        .then(response => response.json())
        .then(data => {
            const ctx = document.getElementById('visitasChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Visitas',
                        data: data.data,
                        borderColor: '#03A9F4',
                        backgroundColor: 'rgba(3, 169, 244, 0.1)',
                        tension: 0.3,
                        fill: true,
                        pointRadius: 5,
                        pointBackgroundColor: '#03A9F4'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        })
        .catch(error => {
            console.error('Error cargando datos del gráfico:', error);
        });
});

