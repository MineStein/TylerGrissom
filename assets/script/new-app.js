function scrollToElement(el, diff = 60, delay = 250) {
    $('html, body').animate({
        scrollTop: el.offset().top - diff
    }, delay);
}

class ErrorBox {
    constructor(el = '#error-box') {
        this.el = el;
    }

    getElement() {
        return this.el;
    }


}

$(() => {
    var eb = new ErrorBox($('#error-box'));


});