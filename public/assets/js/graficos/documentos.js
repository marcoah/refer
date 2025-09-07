function renderChartPie(data, labels,active_year) {
    var ctx = document.getElementById("myPieChart");
    const etiquetas = labels;
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: etiquetas,
            datasets: [{
                label: "# documentos",
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                  ],
                data: data,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            title: {
              display: true,
              text: 'Documentos por tipo '+active_year
            }
        }
    });
}
