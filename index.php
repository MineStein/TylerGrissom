<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tyler Grissom</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="assets/style/css/materialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style/css/style.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <script rel="script" type="text/javascript" src="assets/script/jquery-3.2.1.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/materialize.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/global.js"></script>
    <script rel="script" type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
    <script rel="script" type="text/javascript" async src="https://widget.battleforthenet.com/widget.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

<div class="navbar navbar-fixed">
    <nav class="cyan darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Tyler Grissom</a>
                <a href="#" data-activates="mobile-navbar" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li id="nav-item-section-about-me"><a href="#section-about-me" onclick="scrollToElement('section-about-me');">About Me</a></li>
                    <li id="nav-item-section-services"><a href="#section-services" onclick="scrollToElement('section-services');">Services</a></li>
                    <li id="nav-item-section-portfolio"><a href="#section-portfolio" onclick="scrollToElement('section-portfolio');">Portfolio</a></li>
                    <li id="nav-item-section-contact"><a href="#section-contact" onclick="scrollToElement('section-contact');">Contact</a></li>
                </ul>
                <ul class="side-nav cyan darken-2" id="mobile-navbar">
                    <li><a href="#" class="white-text" onclick="scrollToElement('section-about-me');">About Me</a></li>
                    <li><a href="#" class="white-text" onclick="scrollToElement('section-services');">Services</a></li>
                    <li><a href="#" class="white-text" onclick="scrollToElement('section-portfolio');">Portfolio</a></li>
                    <li><a href="#" class="white-text" onclick="scrollToElement('section-contact');">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="section white scrollspy" id="section-about-me">
    <div class="row container">
      <h2 class="header">About Me</h2>
      <div class="divider"></div>
      <div style="margin-top: 25px;">
          <div class="row">
              <div class="col s12 m4">
                  <img src="assets/image/tyler.jpg" alt="Tyler" style="border-radius: 15px; width: 70%; height: 70%;" class="materialboxed">
              </div>

              <div class="col s8 m4">
                  <h5>Hello!</h5>
                  <p>
                      My name is Tyler and I am a fifteen year old programmer and web designer from the United States. I primarily code in Java creating
                      Spigot server plugins and utilizing various web-enabled technologies to craft beautiful, user-friendly sites.
                      <br><div class="divider cyan darken-2"></div><br style="line-height: 50%">
                      Besides my experience with computers, I have a miniature schnauzer named Maggie and a younger brother named Kaiden. I attend high school where
                        I am currently a sophomore taking some very interesting classes, some of which include Astronomy and Web Design & Development. I love
                      hanging out with my friends, going out and doing side-projects related to computers.
              </div>
          </div>
      </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax">
        <img src="assets/image/php-code.png" alt="PHP Code">
    </div>
</div>

<div class="section white scrollspy" id="section-services">
    <div class="row container d-flex">
        <h2 class="header">Services</h2>
        <div class="divider"></div>

        <p>Want to buy one of these? Drop me a line <a href="#" onclick="scrollToElement('section-contact');">here</a>.</p>

        <div class="col s12 m4">
            <div class="card small orange darken-1 white-text z-depth-5">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="#modal-service-spigot" class="modal-trigger"><img src="assets/image/java-code-5.png" alt="Java Code"></a>
                </div>

                <div class="card-content">
                    <span class="card-title">Spigot Server Plugin <a href="#modal-service-spigot" class="white-text modal-trigger"><i class="material-icons right">unfold_more</i></a></span>
                    <p>A made-to-order custom Spigot server plugin.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card small pink darken-1 white-text z-depth-5">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="#modal-service-laravel" class="modal-trigger"><img src="assets/image/laravel-code.png" alt="Laravel Code"></a>
                </div>

                <div class="card-content">
                    <span class="card-title">Laravel Website <a href="#modal-service-laravel" class="white-text modal-trigger"><i class="material-icons right">unfold_more</i></a></span>
                    <p>A fluid PHP backend powered by Laravel.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card small blue white-text z-depth-5">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="#modal-service-web-design" class="modal-trigger"><img src="assets/image/css-code.png" alt="CSS Code"></a>
                </div>

                <div class="card-content">
                    <span class="card-title">Web Design <a href="#modal-service-web-design" class="white-text modal-trigger"><i class="material-icons right">unfold_more</i></a></span>
                    <p>A custom design for your next big project.</p>
                </div>
            </div>
        </div>

        <div class="col s12 offset-m2 m4">
            <div class="card small purple white-text z-depth-5">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="#modal-service-php" class="modal-trigger"><img src="assets/image/php-code.png" alt="PHP Code"></a>
                </div>

                <div class="card-content">
                    <span class="card-title">PHP Website<a href="#modal-service-php" class="white-text modal-trigger"><i class="material-icons right">unfold_more</i></a></span>
                    <p>A completely custom PHP backend for your website.</p>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card small yellow black-text z-depth-5">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="#modal-service-bungeecord" class="modal-trigger"><img src="assets/image/java-code-6.png" alt="Java Code"></a>
                </div>

                <div class="card-content">
                    <span class="card-title">BungeeCord Plugin<a href="#modal-service-bungeecord" class="black-text modal-trigger"><i class="material-icons right">unfold_more</i></a></span>
                    <p>A plugin designed to run on your proxy server.</p>
                </div>
            </div>
        </div>

        <div class="col s12">
            <div class="card green white-text">
                <div class="card-content">
                    <h5>Pro Tip</h5>
                    <p>Need a service that isn't mentioned here? It's likely I can still hook you up! Just submit a request <a href="#" class="white-text" onclick="scrollToElement('section-contact');">here</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax">
        <img src="assets/image/java-code-4.png" alt="Java Code">
    </div>
</div>

<div class="section white scrollspy" id="section-portfolio">
    <div class="container">
        <h2 class="header">Portfolio</h2>
        <div class="divider"></div>

        <p>Obtain a copy of my CV <a href="cv.pdf" target="_blank" download>here</a>.</p>

        <div class="row" style="margin-top: 3%;">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">Java Plugins</div>
                    <div class="collapsible-body">
                        <ul class="collection">
                            <li class="collection-item"><a class="tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="An announcements plugin for Spigot servers." href="https://github.com/MineStein/Owlery">Owlery</a></li>
                            <li class="collection-item"><a class="tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="A discovery-based warp system for Spigot servers." href="https://github.com/MineStein/MaraudersMap">MaraudersMap</a></li>
                            <li class="collection-item"><a class="tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="A system for swapping between hats, wands, particles, and more." href="https://github.com/MineStein/RowlingsEffects">RowlingsEffects</a></li>
                            <li class="collection-item"><a class="tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="An anti-WDL plugin with command helpers." href="https://github.com/MineStein/RowlingsProtect">RowlingsProtect</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Laravel</div>
                    <div class="collapsible-body">
                        <ul class="collection">
                            <li class="collection-item"><a class="tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="A blog system based upon the Laracasts tutorial 'Laravel 5.4 from Scratch'." href="https://github.com/MineStein/blog">Blog</a></li>
                            </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Design</div>
                    <div class="collapsible-body">
                        <ul class="collection">
                            <li class="collection-item"><a class="tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="My personal website. You're on it." href="https://github.com/MineStein/TylerGrissom">tyler-g.net</a></li>
                            <li class="collection-item"><a class="tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="My final project for web design class following the very stringent and outdated practices mandated by school." href="https://github.com/MineStein/HTML-CSS-Final-Project">Coffee Shop</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax">
        <img src="assets/image/css-code.png" alt="CSS Code">
    </div>
</div>

<div class="section white scrollspy" id="section-contact">
    <div class="row container">
        <div class="card red white-text" id="error-box">
            <div class="card-content">
                <p>Uh oh!</p>
            </div>
        </div>

        <h2 class="header">Contact</h2>
        <div class="divider"></div>
        <div class="row">
          <div class="col s12 m8">
              <form id="form-contact" method="post" action="assets/secret/send-contact.php" style="margin-top: 10px;">
                  <div class="row">
                      <div class="input-field col s6">
                          <input placeholder="John" name="first_name" id="first_name" type="text" class="validate">
                          <label for="first_name">First Name</label>
                      </div>
                      <div class="input-field col s6">
                          <input placeholder="Doe" id="last_name" name="last_name" type="text" class="validate">
                          <label for="last_name">Last Name</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <input placeholder="john.doe@example.com" id="email" type="email" class="validate">
                          <label for="email">Email</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <select id="need">
                              <option value="choose" disabled selected>Choose an option</option>
                              <optgroup label="Service Estimate">
                                  <option value="service-plugin">Minecraft Server Plugin</option>
                                  <option value="service-website">Website</option>
                                  <option value="service-other">Other Project</option>
                              </optgroup>
                              <optgroup label="Other">
                                  <option value="other-partnership">Partnership</option>
                                  <option value="other-offer">Job Offer</option>
                                  <option value="other-inquiry">General Inquiry</option>
                              </optgroup>
                          </select>
                          <label for="need">What do you need?</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <textarea placeholder="Describe what you need in as much detail as possible." id="description" name="description" class="materialize-textarea"></textarea>
                          <label for="description">Description</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 m6 g-recaptcha" data-sitekey="6Ld3fzkUAAAAAMtobohuy_-dMRWnWq5tWv_9-50-"></div>
                      <div class="input-field col s12 m6">
                          <button id="form-submit" type="submit" class="btn blue">Send</button>
                      </div>
                  </div>
              </form>
          </div>

          <div class="col m4" style="margin-top: 10px;">
              <h4>Other</h4>
              <div class="divider"></div><br>
              <a href="http://twitter.com/grisstyl" class="btn blue z-depth-2 no-text-transform social-button tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="@grisstyl">Twitter</a><br><br>
              <a href="#" class="btn deep-purple lighten-1 z-depth-2 no-text-transform tooltipped" data-position="right" data-delay="50" data-tooltip="Tyler#6978" onclick="return false">Discord</a><br><br>
              <a href="http://snapchat.com/add/tylerrulesall" target="_blank" class="btn yellow darken-1 z-depth-2 no-text-transform tooltipped" data-position="right" data-delay="50" data-tooltip="tylerrulesall">Snapchat</a><br><br>
              <a href="https://github.com/MineStein" class="btn grey z-depth-2 no-text-transform tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="MineStein">GitHub</a><br><br>
              <a href="https://www.spigotmc.org/members/minestein.21431/" class="btn orange z-depth-2 no-text-transform tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="MineStein">SpigotMC</a>
          </div>
        </div>
    </div>
</div>

<footer class="page-footer cyan darken-2">
    <div class="container">
        <div class="row">
            <div class="col l4 s12">
                <h5 class="white-text">More</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3 modal-trigger" href="#modal-tos">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright © 2013 - <?php echo date("Y"); ?> Tyler Grissom
        </div>
    </div>
</footer>

<!-- Element Showed -->
<a id="menu" class="waves-effect waves-light btn btn-large btn-floating white z-depth-3" style="bottom: 20px; right: 20px; position: fixed;"><i class="red-text material-icons">favorite</i></a>

<!-- Tap Target Structure -->
<div class="tap-target white black-text" data-activates="menu">
    <div class="tap-target-content">
        <h5>made with <span class="pink-text text-darken-2"><i class="material-icons">favorite</i></span> by tyler grissom</h5>
    </div>
</div>

<!-- Modals -->

<div class="modal" id="modal-service-spigot">
    <div class="modal-content">
        <h4>Spigot Server Plugin</h4>
        <p>
            Purchasing this package will get you the following:
        </p>

        <ul class="collection">
            <li class="collection-item"><i class="material-icons green-text">check</i>Spigot plugin running on your choice of Minecraft version</li>
            <li class="collection-item"><i class="material-icons green-text">check</i>Support for 30 days after the JAR file is provided</li>
        </ul>

        <h5>Addon packages for this service</h5>

        <ul class="collection">
            <li class="collection-item">Customizable messages</li>
            <li class="collection-item">Database support</li>
            <li class="collection-item">Private source code access</li>
        </ul>

        <div class="row">
            <div class="col s12">
                <div class="card orange darken-1 white-text">
                    <div class="card-content">
                        <h5>Interested in purchasing?</h5>
                        <p>You can order this service by filling out the contact form below.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-service-laravel">
    <div class="modal-content">
        <h4>Laravel Website</h4>
        <p>
            Purchasing this package will get you the following:
        </p>

        <ul class="collection">
            <li class="collection-item"><i class="material-icons green-text">check</i>A website backend built upon the Laravel framework</li>
            <li class="collection-item"><i class="material-icons green-text">check</i>Support for 30 days after the site files are provided</li>
        </ul>

        <div class="row">
            <div class="col s12">
                <div class="card pink darken-1 white-text">
                    <div class="card-content">
                        <h5>Interested in purchasing?</h5>
                        <p>You can order this service by filling out the contact form below.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-service-web-design">
    <div class="modal-content">
        <h4>Web Design</h4>
        <p>
            Purchasing this package will get you the following:
        </p>

        <ul class="collection">
            <li class="collection-item"><i class="material-icons green-text">check</i>A custom designed website.</li>
            <li class="collection-item"><i class="material-icons green-text">check</i>Support for 30 days after the site files are provided.</li>
        </ul>

        <div class="row">
            <div class="col s12">
                <div class="card blue white-text">
                    <div class="card-content">
                        <h5>Interested in purchasing?</h5>
                        <p>You can order this service by filling out the contact form below.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-service-php">
    <div class="modal-content">
        <h4>PHP Website</h4>
        <p>
            Purchasing this package will get you the following:
        </p>

        <ul class="collection">
            <li class="collection-item"><i class="material-icons green-text">check</i>A website backend powered by custom PHP.</li>
            <li class="collection-item"><i class="material-icons green-text">check</i>Support for 30 days after the site files are provided.</li>
        </ul>

        <div class="row">
            <div class="col s12">
                <div class="card purple white-text">
                    <div class="card-content">
                        <h5>Interested in purchasing?</h5>
                        <p>You can order this service by filling out the contact form below.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-service-bungeecord">
    <div class="modal-content">
        <h4>BungeeCord Plugin</h4>
        <p>
            Purchasing this package will get you the following:
        </p>

        <ul class="collection">
            <li class="collection-item"><i class="material-icons green-text">check</i>A made-to-order Bungeecord plugin that works on your proxy.</li>
            <li class="collection-item"><i class="material-icons green-text">check</i>Support for 30 days after the files are provided.</li>
        </ul>

        <div class="row">
            <div class="col s12">
                <div class="card yellow black-text">
                    <div class="card-content">
                        <h5>Interested in purchasing?</h5>
                        <p>You can order this service by filling out the contact form below.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-tos">
    <div class="modal-content">
        <h4>Terms of Service</h4>
        <h5>1. Acceptance</h5>
        <p>These are the standard terms and conditions for Website Design and Development and apply to all contracts and all work undertaken by Tyler Grissom for its clients.</p>
        <h5>2. Our Fees and Deposits</h5>
        <p>A 50% deposit of the total fee payable under our proposal is due immediately upon you instructing us to proceed with the website design and development work. The remaining 50% shall become due when the work is completed to your reasonable satisfaction but subject to the terms of the “approval of work” and “rejected work” clauses. We reserve the right not to commence any work until the deposit has been paid in full. The 50% deposit is not refundable if the development work has been started and you terminate the contract through no fault of ours.</p>
        <h5>3. Supply of Materials</h5>
        <p>You must supply all materials and information required by us to complete the work in accordance with any agreed specification. Such materials may include, but are not limited to, photographs, written copy, logos and other printed material. Where there is any delay in supplying these materials to us which leads to a delay in the completion of work, we have the right to extend any previously agreed deadlines by a reasonable amount. Where you fail to supply materials, and that prevents the progress of the work, we have the right to invoice you for any part or parts of the work already completed.</p>
        <h5>4. Variations</h5>
        <p>We are pleased to offer you the opportunity to revise the design. However, we have the right to limit the number of design proposals to a reasonable amount and may charge for additional designs if you make a change to the original design specification</p>
        <h5>5. Project Delays and Client Liability</h5>
        <p>Any time frames or estimates that we give are contingent upon your full co-operation and complete and final content in photography for the work pages. During development there is a certain amount of feedback required to progress to subsequent phases.</p>
        <h5>6. Approval of Work</h5>
        <p>On completion of the work you will be notified and can review it. You must notify us in writing of any unsatisfactory points within 48 hours of such notification. Any of the work which has not been reported in writing to us as unsatisfactory within the 48-hour review period will be deemed to have been approved. Once approved, or deemed approved, work cannot subsequently be rejected and the contract will be deemed to have been completed and the 50% balance of the project price will become due.</p>
        <h5>7. Rejected Work</h5>
        <p>If you reject any of our work within the 48-hour review period, or not approve subsequent work performed by us to remedy any points recorded as being unsatisfactory, and we, acting reasonably, consider that you have been unreasonable in any rejection of the work, we can elect to treat this contract as at an end and take measures to recover payment for the completed work.</p>
        <h5>8. Payment</h5>
        <p>Upon completion of the work, the remaining 50% of the project is due and must be paid immediately.</p>
    </div>
</div>

<script>
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

    function showErrorBox() {
        var errorBox = $("#error-box");

        errorBox.show();
    }

    function hideErrorBox() {
        var errorBox = $("#error-box");

        errorBox.hide();
    }

    $(function() {
        $(".parallax").parallax();
        $(".tooltipped").tooltip({delay: 50});
        $(".modal").modal();
        $('select').material_select();
        $('.collapsible').collapsible();
        $('.scrollspy').scrollSpy({
            getActiveElement: function(id) {
                return "#nav-item-" + id;
            }
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

    $("#menu").click(function () {
        $(".tap-target").tapTarget("open");
    });
</script>

</body>
</html>
