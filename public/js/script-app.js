document.addEventListener('DOMContentLoaded', () => {

    let nav = document.querySelector('#navbarSupportedContent');

    if (document.documentElement.clientWidth < 975) {
        nav.className = nav.className.split(" collapse")[0] + " collapse";
    }
    else {
        nav.className = nav.className.split(" collapse")[0] + " collapse show";
    }

    window.addEventListener("resize", () => {
        let nav = document.querySelector('#navbarSupportedContent');

        if (document.documentElement.clientWidth < 975) {
            nav.className = nav.className.split(" collapse")[0] + " collapse";
        }
        else {
            nav.className = nav.className.split(" collapse")[0] + " collapse show";
        }
    });



    $(document).ready(function () {
        $('#dtBasicExample').DataTable({
            "ordering": false // false to disable sorting (or any other option)
        });
        $('.dataTables_length').addClass('bs-select');
    });



    $('.file-upload').file_upload();

});