document.addEventListener('DOMContentLoaded', () => {

    let fecha = new Date();
    let fecha_full = fecha.toDateString();
    let month = fecha.getMonth();
    let day = fecha.getDay();

    let dias = { 1: "Lunes", 2: "Martes", 3: "Miercoles", 4: "Jueves", 5: "Viernes", 6: "Sabado", 7: "Domingo" };
    let mes = { 0: 'Enero', 1: 'Febrero', 2: 'Marzo', 3: 'Abril', 4: 'Mayo', 5: 'Junio', 6: 'Julio', 7: 'Agosto', 8: 'Septiembre', 9: 'Octubre', 10: 'Noviembre', 11: 'Diciembre' };

    let trWeek = document.querySelector("#calendar").querySelector("#week > tr");
    let trDay = document.querySelector("#calendar").querySelector("#day > tr");

    for (let d in dias) {

        let td = document.createElement("td");
        let p = document.createElement("p");

        if (d == day || day == 0) {
            p.className = "font-weight-bold";
        }

        p.textContent = dias[d];

        trWeek.insertAdjacentElement("beforebegin", td);
        td.insertAdjacentElement("afterbegin", p);

        let td2 = document.createElement("td");
        td2.id = dias[d];

        trDay.insertAdjacentElement("beforebegin", td2);

    }

    for (let m in mes) {
        if (m == month) {
            document.querySelector("#month").textContent = mes[m];
        }

    }

});