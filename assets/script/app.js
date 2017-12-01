function scrollToElement(elementId) {
    $("html, body").animate({
        scrollTop: $("#" + elementId).offset().top - 60
    }, 250);
}

function isErrorBoxVisible() {
    var errorBox = $("#error-box");

    return errorBox.is(":visible");
}

function shakeErrorBox(content, callback) {
    var errorBox = $("#error-box");

    changeErrorBox(content);

    if (!isErrorBoxVisible()) {
        errorBox.fadeIn();
    }

    errorBox.addClass('animated shake');

    setTimeout(function() {
        errorBox.removeClass('animated shake');

        callback();
    }, 1500);
}

function changeErrorBox(content) {
    var errorBoxContent = $("#error-box").find("p");

    errorBoxContent.text(content);
}

function random(array) {
    return array[Math.floor(Math.random() * array.length)];
}

$(function() {
    $(".parallax").parallax();
    $(".tooltipped").tooltip({delay: 50});
    $(".modal").modal();
    $('select').material_select();
    $('.collapsible').collapsible();
    $(".button-collapse").sideNav();
    $('.scrollspy').scrollSpy({
        getActiveElement: function(id) {
            return "#nav-item-" + id;
        }
    });

    $("#menu").click(function () {
        $(".tap-target").tapTarget("open");
    });

    var errorBox = $("#error-box");

    errorBox.hide();

    var contactForm = $("#form-contact");
    var formSubmit = $("#form-submit");

    contactForm.on("submit", function(e) {
        e.preventDefault();

        formSubmit.prop("disabled", true);

        var firstName = $("#first_name").val().trim();
        var lastName = $("#last_name").val().trim();
        var email = $("#email").val().trim();
        var description = $("#description").val().trim();
        var need = $("#need").val();

        if (firstName === "" ||
            lastName === "" ||
            email === "" ||
            description === "" ||
            need === "choose") {

            shakeErrorBox("Please complete all fields.", function() {
                formSubmit.prop("disabled", false);
            });

            return;
        }

        if (grecaptcha.getResponse().length === 0) {
            shakeErrorBox("Please verify you are a human.", function() {
                formSubmit.prop("disabled", false);
            });

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
            success: function(data) {
                if (data === "1") {
                    shakeErrorBox("Could not verify humanity! Beep boop.", function() {
                        formSubmit.prop("disabled", false);
                    });
                } else if (data === "2") {
                    shakeErrorBox("Your specified email is not valid.", function() {
                        formSubmit.prop("disabled", false);
                    });
                } else if (data === "3") {
                    shakeErrorBox("An error with what you need processing has occurred. This should not happen...", function() {
                        formSubmit.prop("disabled", false);
                    });
                } else if (data === "4") {
                    shakeErrorBox("Uh oh! Try and right a little more for your description.", function() {
                        formSubmit.prop("disabled", false);
                    });
                } else if (data === "5") {
                    errorBox.fadeOut().removeClass("red").addClass("green");

                    shakeErrorBox("Awesome! Your message was delivered. Thank you for your interest!", null);
                } else {
                    shakeErrorBox(data, null);
                }
            },
            error: function() {
                shakeErrorBox("An unknown error occurred. Please try again later.", function() {
                    formSubmit.prop("disabled", false);
                });
            }
        });
    });
});