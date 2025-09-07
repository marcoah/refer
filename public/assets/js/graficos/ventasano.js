function renderChart(data, labels,active_year) {
    var ctx = document.getElementById("myChart");
    const etiquetas = months({count: labels.length});
    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: "Ventas año "+active_year,
                backgroundColor: "#3e95cd",
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
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
            }
        }
    });
}

/*
$.ajax({
    url: 'estadisticas/ventasano/2022',
    type: 'GET',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    dataType: 'json',
    success: function (data) {
        var datos = [];
        var etiquetas = [];
        for (var i in data) {
            //datos.push(data[i].monto);
            //etiquetas.push(data[i].mes);
            datos[data[i].mes-1] = data[i].monto;
            etiquetas[data[i].mes-1] = data[i].mes;
        }
        renderChart(datos, etiquetas,2022);
    },
    error: function (data) {
        console.log(data);
    }
});
*/
