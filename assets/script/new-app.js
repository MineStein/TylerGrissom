function scrollToElement(el, diff = 60, delay = 250) {
    $('html, body').animate({
        scrollTop: el.offset().top - diff
    }, delay);
}

function timer(callback, delay = 1500) {
    setTimeout(callback, delay);
}

class ErrorBox {
    constructor(el = '#error-box') {
        this.el = el;
    }

    getElement() {
        return this.el;
    }
    
    hide() {
        this.getElement().hide();
    }
    
    show() {
        this.getElement().show();
    }
    
    isVisible() {
        return this.getElement().is(':visible');
    }
    
    isNotVisible() {
        return !this.isVisible();
    }
    
    setContent(text) {
        this.getElement().find('p').text(text);
    }

    animate(classes = ['shake'], callback = null) {
        const eb = this.getElement();
        
        if (eb.hasClass('animated')) eb.removeClass('animated');
        
        let classStr = 'animated ';
        
        classes.forEach((clazz, index) => {
            classStr += clazz;
            
            if (index !== classes.length) classStr += ' '; 
        });
        
        eb.addClass(classStr);
        
        timer(() => {
            eb.removeClass(classStr);
            
            callback();
        })
    }
    
    shake(content = 'Uh oh! An unspecified error occurred.', callback = () => { $('#form-submit').prop('disabled', false); }) {
        const eb = this.getElement();
        
        this.setContent(content);
        
        scrollToElement(eb);

        if (this.isNotVisible()) {
            eb.fadeIn();
        }
        
        this.animate([
            'shake'
        ], callback);
    }
}

function enablePlugins() {
    $('select').material_select();
    $('.parallax').parallax();
    $('.tooltipped').tooltip({delay: 50});
    $('.modal').modal();
    $('.collapsible').collapsible();
    $('.button-collapse').sideNav();
    $('.slider').slider();
    $('.scrollspy').scrollSpy({
        getActiveElement: id => {
            return '#nav-item-' + id;
        }
    });

    $('#menu').click(() => $('.tap-target').tapTarget('open'));
}

$(() => {
    FastClick.attach(document.body);
    
    const eb = new ErrorBox($('#error-box'));
    
    eb.hide();
    
    enablePlugins();
    
    const form = $('#form-contact');
    const submit = $('#form-submit');
    
    form.on('submit', e => {
        e.preventDefault();

        submit.prop('disabled', true);

        let firstName = $('#first_name').val().trim();
        let lastName = $('#last_name').val().trim();
        let email = $('#email').val().trim();
        let description = $('#description').val().trim();
        let need = $('#need').val();

        if (firstName === '' ||
            lastName === '' ||
            email === '' ||
            description === '' ||
            need === 'choose') {

            eb.shake('Please complete all fields!');

            return;
        }

        if (grecaptcha.getResponse().length === 0) {
            shakeErrorBox('Please verify you are a human.');

            return;
        }

        $.ajax({
            type: 'post',
            url: 'assets/secret/send-contact.php',
            data: {
                first_name: firstName,
                last_name: lastName,
                email: email,
                need: need,
                description: description,
                captcha: grecaptcha.getResponse()
            },
            success: data => {
                if (data === '1') shakeErrorBox('Could not verify humanity! Beep boop.');
                else if (data === '2') shakeErrorBox('Your specified email is not valid.');
                else if (data === '3') shakeErrorBox('An error with what you need processing has occurred. This should not happen...');
                else if (data === '4') shakeErrorBox('Uh oh! Try and right a little more for your description.');
                else if (data === '5') shakeErrorBox('Awesome! Your message was delivered. Thank you for your interest!');
                else shakeErrorBox(data, null);
            },
            error: () => shakeErrorBox('An unknown error occurred. Please try again later.')
        });    
    });
});