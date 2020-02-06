document.addEventListener('DOMContentLoaded', () => {

    let nav = document.querySelector('#navbarSupportedContent');

    if (document.documentElement.clientWidth < 975) {
        nav.className=nav.className.split(" collapse")[0]+" collapse";
    }
    else {
        nav.className=nav.className.split(" collapse")[0]+" collapse show";
    } 

    window.addEventListener("resize", () => {
        let nav = document.querySelector('#navbarSupportedContent');

        if (document.documentElement.clientWidth < 975) {
            nav.className=nav.className.split(" collapse")[0]+" collapse";
        }
        else {
            nav.className=nav.className.split(" collapse")[0]+" collapse show";
        }
    });

});