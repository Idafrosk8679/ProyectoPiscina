document.addEventListener('DOMContentLoaded', () => {

    let modal = document.getElementById("myModal");
    let imagenes = document.getElementById("carousel-with-lb");
    // Get the image and insert it inside the modal - use its "alt" text as a caption


    imagenes.addEventListener("click", (event) => {
        if (event.target.tagName == "IMG") {
            modal.style.display = "block";
            //event.target.src = this.src;
            modal.children[1].src=event.target.src;

        }
    });

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
});