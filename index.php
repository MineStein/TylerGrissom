<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tyler Grissom</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="assets/style/css/materialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style/css/style.css">

    <script rel="script" type="text/javascript" src="assets/script/jquery-3.2.1.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/materialize.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/global.js"></script>
    <script rel="script" type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

<div class="navbar">
    <nav class="cyan darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Tyler Grissom</a>
                <a href="#" data-activates="mobile-navbar" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#" onclick="scrollToElement('section-about-me');">About Me</a></li>
                    <li><a href="#" onclick="scrollToElement('section-services');">Services</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="#" onclick="scrollToElement('section-contact');">Contact</a></li>
                </ul>
                <ul class="side-nav cyan darken-2" id="mobile-navbar">
                    <li class="active"><a href="#" class="white-text">Home</a></li>
                    <li><a href="about.php" class="white-text" onclick="scrollToElement('section-about-me');">About Me</a></li>
                    <li><a href="services.php" class="white-text" onclick="scrollToElement('section-services');">Services</a></li>
                    <li><a href="portfolio.php" class="white-text">Portfolio</a></li>
                    <li><a href="contact.php" class="white-text" onclick="scrollToElement('section-contact');">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="section white" id="section-about-me">
    <div class="row container">
      <h2 class="header">About Me</h2>
      <div class="divider"></div>
      <div style="margin-top: 25px;">
          <div class="row">
              <div class="col m2 s10">
                  <img src="assets/image/tyler.jpg" alt="Tyler" style="border-radius: 15px; width: 70%; height: 70%;" class="materialboxed">
              </div>

              <div class="col m10 s2">
                  <h5>Hello!</h5>
                  <p>
                      My name is Tyler and I am a fifteen year old programmer and web designer from Hubertus, Wisconsin. I primarily code in Java creating
                      <a href="http://spigotmc.org">Spigot server plugins</a> and utilizing various web-enabled technologies to craft beautiful, user-friendly sites.
                      <br><div class="divider cyan darken-2" style="width: 60%;"></div><br style="line-height: 50%">
                      Besides my experience with computers, I have a miniature schnauzer named Maggie and a younger brother named Kaiden. I attend Hartford Union High
                      School where I am currently a sophomore taking some very interesting classes, some of which include Astronomy and Web Design & Development. I love
                      hanging out with my friends and going out, along with working a part-time position busing tables, and side-projects related to computers.
                  </p>
              </div>
          </div>
      </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax">
        <img src="assets/image/code-background.png" alt="Code Background">
    </div>
</div>

<div class="section white" id="section-services">
    <div class="row container">
        <h2 class="header">Services</h2>
        <div class="divider"></div>

        <p>Want to buy one of these? Drop me a line <a href="#" onclick="scrollToElement('section-contact');">here</a>.</p>

        <div class="col s12 m4">
          <div class="card orange darken-1 white-text">
            <div class="card-content">
              <h5>Spigot Server Plugin</h5>

              <p>A made-to-order Spigot server plugin.</p>
            </div>

            <div class="card-action">
              <a href="#modal-service-spigot" class="btn white black-text modal-trigger">View</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">

        </div>

        <div class="col s12 m4">

        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax">
        <img src="assets/image/huhs.jpg" alt="Hartford Union High School">
    </div>
</div>

<div class="section white" id="section-contact">
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
                                  <option value="other-offer">Offer</option>
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
                      <div class="col s6 g-recaptcha" data-sitekey="6Ld3fzkUAAAAAMtobohuy_-dMRWnWq5tWv_9-50-"></div>
                      <div class="col s6">
                          <button type="submit" class="btn blue">Send</button>
                      </div>
                  </div>
              </form>
          </div>

          <div class="col m4" style="margin-top: 10px;">
              <h4>Social</h4>
              <div class="divider"></div><br>
              <a href="http://twitter.com/grisstyl" class="btn blue z-depth-2 no-text-transform social-button tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="@grisstyl">Twitter</a><br><br>
              <a href="#" class="btn deep-purple lighten-1 z-depth-2 no-text-transform tooltipped" data-position="right" data-delay="50" data-tooltip="Tyler#6978" onclick="return false">Discord</a><br><br>
              <a href="http://snapchat.com/add/tylerrulesall" target="_blank" class="btn yellow darken-1 z-depth-2 no-text-transform tooltipped" data-position="right" data-delay="50" data-tooltip="tylerrulesall">Snapchat</a><br><br>
              <a href="https://github.com/MineStein" class="btn grey z-depth-2 no-text-transform tooltipped" target="_blank" data-position="right" data-delay="50" data-tooltip="MineStein">GitHub</a>
          </div>
        </div>
    </div>
</div>

<div class="fixed-action-btn horizontal" style="bottom: 100px; right: 20px; position: fixed;">
    <a class="btn-floating btn-large blue z-depth-3" onmouseover="Materialize.toast('How is your experience with this site?', 5000, '');" onmouseout="Materialize.Toast.removeAll();">
        <i class="material-icons">feedback</i>
    </a>
    <ul>
        <li><a class="btn-floating red tooltipped" data-position="top" data-delay="50" data-tooltip="Dissatisfied"><i class="material-icons">sentiment_dissatisfied</i></a></li>
        <li><a class="btn-floating yellow darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Neutral"><i class="material-icons">sentiment_neutral</i></a></li>
        <li><a class="btn-floating green tooltipped" data-position="top" data-delay="50" data-tooltip="Satisfied"><i class="material-icons">sentiment_very_satisfied</i></a></li>
    </ul>
</div>

<!-- Element Showed -->
<a id="menu" class="waves-effect waves-light btn btn-large btn-floating orange z-depth-3" style="bottom: 20px; right: 20px; position: fixed;"><i class="material-icons">copyright</i></a>

<!-- Tap Target Structure -->
<div class="tap-target amber darken-3 white-text" data-activates="menu">
    <div class="tap-target-content">
        <h5>made with <span class="pink-text text-darken-2"><i class="material-icons">favorite</i></span> by tyler grissom</h5>
        <p>Copyright &copy; Tyler Grissom 2013 - <?php echo date("Y"); ?></p>
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
  </div>
</div>

<script>
    function scrollToElement(elementId) {
        $("html, body").animate({
            scrollTop: $("#" + elementId).offset().top
        }, 250);
    }

    function isErrorBoxVisible() {
        var errorBox = $("#error-box");

        return errorBox.is(":visible");
    }

    function shakeErrorBox() {
        var errorBox = $("#error-box");

        if (!isErrorBoxVisible()) {
            errorBox.fadeIn();
        }

        errorBox.addClass('animated shake');

        setTimeout(function() {
            errorBox.removeClass('animated shake');
        }, 1500);
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

        var errorBox = $("#error-box");

        errorBox.hide();

        var contactForm = $("#form-contact");

        contactForm.on('submit', function(e) {
            e.preventDefault();

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

                shakeErrorBox();
            }

            $.ajax({

            });
        });
    });

    $("#menu").click(function () {
        $(".tap-target").tapTarget("open");
    });
</script>

</body>
</html>
