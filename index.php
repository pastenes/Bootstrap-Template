<!DOCTYPE html>
<html>
  <head>
    <title>Richard Pastenes - Web Dev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,300,200,100' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.min.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">
    <script src="_/js/jquery-2.1.0.min.js"></script>
  </head>
  <body>
  <!-- Contact form -->
  <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactForm" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Shoot me an email</h4>
        </div>
        <div class="modal-body">

          <!-- Form fields -->
          <form class="contact" name="contact">
          <div class="row">
          <div class="form-group">
              <div class="col-xs-12 col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your name">
              </div>
              <div class="col-xs-12 col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Your email">
              </div>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-12">
              <textarea class="form-control" name="message" rows="3" placeholder="Your message"></textarea>
            </div>
          </div>
          </form>
          <div id="thanks"></div>
          <!-- End form fields -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" id="submit" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>
  <!-- section 1 - nav -->
  <div class="content row">
    <div class="col-lg-12">
      <header class="clearfix">
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <img class="img-responsive pull-left" src="images/assets/pastenes-logo-100x50.png">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
              <span class="sr-only">Toggle navigaiton</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="collapse">
          
            <ul class="nav navbar-nav pull-right">
              <li><a href="http://pastenes.com/resume/">Resume</a></li>
              <li><a href="#" data-toggle="modal" data-target="#contact">Contact</a></li>
            </ul> <!-- nav -->
          </div> <!-- collapse -->
        </div> <!-- navbar -->
      </header> <!-- header -->
    </div> <!-- column -->
  </div> <!-- content -->

  <!-- section 2 - intro -->
  <section id="intro" data-speed="6" data-type="background">
    <div class="container">
      <div class="row-fluid">
            <h1>Richard Pastenes</h1>
            <h3>Web Dev</h3>
        </div>
      </div>
  </section>

  <!-- section 2 - home -->
  <section id="home">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <a href="#item1" class="thumbnail">
            <img src="images/screens/weis_screenshot_400x220-01.png" alt="Health insurance web site">
          </a>
        </div>

        <div class="col-xs-12 col-md-4">
          <a href="#item2" class="thumbnail">
            <img src="images/screens/gresham_screenshot_400x220-01.png" alt="Custom WordPress Theme">
          </a>
        </div>

        <div class="col-xs-12 col-md-4">
          <a href="#item3" class="thumbnail">
            <img src="images/screens/pastenes_screenshot_400x220-01.png" alt="This site's description">
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- section 3 - inter1 -->
  <section id="inter1" data-speed="6" data-type="background">
    <div class="container">
      <div class="row-fluid">
        </div>
      </div>
  </section>

  <!-- section 4 - item1 -->
  <div id="item1"></div>
  <section id="item">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
           <div id="carousel-item1" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-item1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-item1" data-slide-to="1"></li>
                <li data-target="#carousel-item1" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
              <div class="item active">
                <a href="http://weisandassociates.com/" target="_blank">
                  <img class="img-responsive" src="images/screens/weis_screenshot_400x220-01.png" alt="Health insurance web site">
                </a>
              </div>
              <div class="item">
                <a href="http://weisandassociates.com/" target="_blank">
                  <img class="img-responsive" src="images/screens/weis_screenshot_400x220-02.png" alt="Health insurance web site">
                </a>
              </div>
              <div class="item">
                <a href="http://weisandassociates.com/" target="_blank">
                  <img class="img-responsive" src="images/screens/weis_screenshot_400x220-03.png" alt="Health insurance web site">
                </a>
              </div>
          </div>
        </div>
      </div>

        <div class="col-xs-12 col-md-6">
          <h3>Custom WordPress Theme</h3>
          <p>WordPress theme handcoded entirely from scratch using HTML, CSS, and JavaScript pugins for the home page slider.</p>
          <p>The theme design was provided in a PSD file from which I obtained all the graphic assets. Then coded the HTML structure, style it with CSS and added the slider using JavaScript.</p>
          <p>The last step was to convert the plain HTML to a WordPress theme using PHP, the WordPress function reference in the WordPress codex site and custom fields plugin.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- section 5 - inter2 -->
  <section id="inter2" data-speed="6" data-type="background">
    <div class="container">
      <div class="row-fluid">
        </div>
      </div>
  </section>

  <!-- section 6 - item2 -->
  <div id="item2"></div>
  <section id="item">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <h3>Custom WordPress Theme</h3>
          <p>Custom WordPress site built 100% from scratch, hand coded search and filters functionality to sort posts by date, last name or custom date field. (sort functionality removed (commented out) in final version of the site.</p>
          <p>Created a custom home page widget that only shows furure events with conditional field display and custom fields that match the website purposes.</p>
          <p>The site uses custom WordPress fields, WordPress advanced php posts queries and functions.</p>
        </div>

        <div class="col-xs-12 col-md-6">
           <div id="carousel-item2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-item2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-item2" data-slide-to="1"></li>
                <li data-target="#carousel-item2" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
              <div class="item active">
                <a href="http://greshamfuneral.com/" target="_blank">
                  <img class="img-responsive" src="images/screens/gresham_screenshot_400x220-01.png" alt="Custom WordPress Theme">
                </a>
              </div>
              <div class="item">
                <a href="http://greshamfuneral.com/" target="_blank">
                  <img class="img-responsive" src="images/screens/gresham_screenshot_400x220-02.png" alt="Custom WordPress Theme">
                </a>
              </div>
              <div class="item">
                <a href="http://greshamfuneral.com/" target="_blank">
                  <img class="img-responsive" src="images/screens/gresham_screenshot_400x220-03.png" alt="Custom WordPress Theme">
                </a>
              </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </section>  

    <!-- section 7 - inter3 -->
  <section id="inter3" data-speed="6" data-type="background">
    <div class="container">
      <div class="row-fluid">
        </div>
      </div>
  </section>

  <!-- section 8 - item3 -->
  <div id="item3"></div>
  <section id="item">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
           <div id="carousel-item3" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-item3" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-item3" data-slide-to="1"></li>
                <li data-target="#carousel-item3" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
              <div class="item active">
                <a href="#">
                  <img class="img-responsive" src="images/screens/pastenes_screenshot_400x220-01.png" alt="This site's screenshot">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img class="img-responsive" src="images/screens/pastenes_screenshot_400x220-02.png" alt="This site's screenshot">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img class="img-responsive" src="images/screens/pastenes_screenshot_400x220-03.png" alt="This site's screenshot">
                </a>
              </div>
          </div>
        </div>
      </div>

        <div class="col-xs-12 col-md-6">
          <h3>This Portfolio Site</h3>
          <p>I build this site using a Twitter Boostrap 3 template I created. The template has a more organized file structure that includes all the Bootstrap files and assets plus separated JavaScipt and LESS files that are minified using <a href="https://incident57.com/codekit/" target="_blank">CodeKit</a>. This template is available in <a href="https://github.com/pastenes/Bootstrap-Template" target="_blank">this GitHub repository</a>.</p>

          <p> I started coding the site not before planning the responsive layout using the <a href="http://balsamiq.com/products/mockups/" target="_blank">Balsamiq Mockups app</a>. The coding process is thoroughly documented in <a href="https://github.com/pastenes/Bootstrap-Template/tree/portfoliov3" target="_blank">this GitHub branch</a>.</p>
          <p>I also used a combination of CSS, HTML5 and jQuery to add a smooth autoscroll effect, Parallax effect and back to top button.</p>
          <p>All images and photography are also done by me, processed in Aperture and edited in Photoshop.</p>
        </div>

      </div>
    </div>
  </section>  

  <footer class="row">
        <p><small>Copyright <a href="#">&copy; Richard Pastenes</a></small></p>

        <a href="#" class="go-top"><span class="glyphicon glyphicon-arrow-up"></span></a>
  </footer>

    <script src="_/js/respond.js"></script>
    <script src="_/js/bootstrap.min.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
