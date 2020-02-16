document.addEventListener('DOMContentLoaded', () => {

    //line
    var ctxP = document.getElementById("lineChartPeso").getContext('2d');
    var ctxA = document.getElementById("lineChartAltura").getContext('2d');

    console.log(peso);

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

});