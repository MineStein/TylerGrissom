<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tyler Grissom</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="assets/style/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/style/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/style/css/style.css">

    <script rel="script" type="text/javascript" src="assets/script/jquery-3.2.1.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/materialize.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/global.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

<div class="navbar-fixed">
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
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="#" onclick="scrollToElement('section-contact');">Contact</a></li>
                </ul>
                <ul class="side-nav cyan darken-2" id="mobile-navbar">
                    <li class="active"><a href="#" class="white-text">Home</a></li>
                    <li><a href="about.php" class="white-text" onclick="scrollToElement('section-about-me');">About Me</a></li>
                    <li><a href="services.php" class="white-text" onclick="scrollToElement('section-services');">Services</a></li>
                    <li><a href="portfolio.php" class="white-text">Portfolio</a></li>
                    <li><a href="blog.php" class="white-text">Blog</a></li>
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
        <h2 class="header">Contact</h2>
        <div class="divider"></div>
        <div class="row">
          <div class="col s12 m8">
            <p>
              I am a very avid user of social media, however you can also get in contact with me at <a href="mailto:grisstyl@gmail.com">this email</a>
            </p>
          </div>

          <div class="col m4" style="margin-top: 10px;">
            <a href="http://twitter.com/grisstyl" class="btn blue z-depth-2" style="text-transform: none;">Twitter</a><br><br>
            <a href="http://snapchat.com/add/tylerrulesall" class="btn yellow darken-1 z-depth-2" style="text-transform: none;">Snapchat</a>
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
        $('html, body').animate({
            scrollTop: $("#" + elementId).offset().top
        }, 250);
    }

    $(function() {
        $(".parallax").parallax();
        $(".tooltipped").tooltip({delay: 50});
        $(".modal").modal();
    });

    $("#menu").click(function (e) {
        $(".tap-target").tapTarget('open');
    });
</script>

</body>
</html>
