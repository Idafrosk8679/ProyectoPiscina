document.addEventListener('DOMContentLoaded', () => {

    let modal = document.getElementById("myModal");
    let imagenes = document.getElementById("carousel-with-lb");


    imagenes.addEventListener("click", (event) => {
        if (event.target.tagName == "IMG") {
            modal.style.display = "block";
            modal.getElementsByClassName('modal-content')[0].src=event.target.src;

        }
    });

    var div = document.getElementById("myModal");[0];
    div.onclick = function () {
        modal.style.display = "none";
    }
});