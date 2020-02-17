document.addEventListener('DOMContentLoaded', () => {

    //line


    try {
        var ctxP = document.getElementById("lineChartPeso").getContext('2d');
        var myLineChart1 = new Chart(ctxP, {
            type: 'line',
            data: {
                labels: fechas,
                datasets: [peso]
            },
            options: {
                responsive: true
            }
        });
    } catch (error) {

    }

    try {
        var ctxA = document.getElementById("lineChartAltura").getContext('2d');
        var myLineChart2 = new Chart(ctxA, {
            type: 'line',
            data: {
                labels: fechas,
                datasets: [altura]
            },
            options: {
                responsive: true
            }
        });
    } catch (error) {

    }


    try {
        console.log(marcas)
        var ctxM = document.getElementById("lineChartMarcas").getContext('2d');
        var myLineChart = new Chart(ctxM, {
            type: 'line',
            data: {
                labels: compe,
                datasets: [marcas]
            },
            options: {
                scales: {
                    yAxes: [{
                        type: 'time',
                        time: {
                            parser: 'h:m:s',
                            unit: 'seconds',
                            unitStepSize: 5,
                            min: '0:0:0',
                            max: '10:0:0',
                            displayFormats: {
                                'seconds': 'h.m'
                            }
                        }
                    }]
                }
            }
        });
    } catch (error) {

    }


});