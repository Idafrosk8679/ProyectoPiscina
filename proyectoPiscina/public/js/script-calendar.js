document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
        defaultView: 'dayGridWeek',
        firstDay:1,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridWeek,dayGridMonth,list'
        },
        buttonText: {
            today: 'Hoy',
            month: 'Mes',
            week: 'Semana',
            day: 'Dia',
            list: 'Lista'
        },


    });


    calendar.setOption('locale', 'es');
    calendar.render();

    data.forEach(e => {
        calendar.addEvent(e);
    });

    

    window.addEventListener("resize", () => {

        if ($(window).width() < 650) {
            document.querySelectorAll("#calendar > div.fc-toolbar.fc-header-toolbar > div.fc-right > div > button")[2].click();
        } else {
            document.querySelectorAll("#calendar > div.fc-toolbar.fc-header-toolbar > div.fc-right > div > button")[0].click();
        }

    });


    if ($(window).width() < 650) {
        document.querySelectorAll("#calendar > div.fc-toolbar.fc-header-toolbar > div.fc-right > div > button")[2].click();
    } else {
        document.querySelectorAll("#calendar > div.fc-toolbar.fc-header-toolbar > div.fc-right > div > button")[0].click();
    }

});