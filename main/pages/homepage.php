<?php
if(isset($_POST['submit'])){

  require '../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

  $email = $_POST['email'];

  $mail = new PHPMailer;

  $mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'localhost';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'info@madmensoftware.com';                 // SMTP username
  $mail->Password = 'MadnessAwaits2morrow';                           // SMTP password
  //$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  //$mail->Port = 465;                                    // TCP port to connect to

  $mail->From = $email;
  // below we want to set the email address we will be sending our email to.
  $mail->AddAddress("info@madmensoftware.com", "Info");

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = 'New Client Quote';

  // PREPARE THE BODY OF THE MESSAGE
  $htmlMessage = '<html><body>';
  $htmlMessage .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
  $htmlMessage .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
  $htmlMessage .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
  $htmlMessage .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

  if (isset($_POST['organization'])) {
    $htmlMessage .= "<tr><td><strong>Organization:</strong> </td><td>" . strip_tags($_POST['organization']) . "</td></tr>";
  }

  foreach ($_POST['client_type'] as $client_type) {
    $htmlMessage .= "<tr><td><strong>Client Type:</strong> </td><td>" . $client_type . "</td></tr>";
  }

  foreach ($_POST['project_type'] as $project_type) {
    $htmlMessage .= "<tr><td><strong>Project Type:</strong> </td><td>" . $project_type . "</td></tr>";
  }

  $htmlMessage .= "<tr><td><strong>Project Title:</strong> </td><td>" . strip_tags($_POST['project-title']) . "</td></tr>";
  $htmlMessage .= "<tr><td><strong>Project Description:</strong> </td><td>" . strip_tags($_POST['project-description']) . "</td></tr>";
  $htmlMessage .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['urgency']) . "</td></tr>";
  $htmlMessage .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";
  $htmlMessage .= "</table>";
  $htmlMessage .= "</body></html>";

  $mail->Body = $htmlMessage;
  $mail->AltBody = $htmlMessage;

  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

  }
  else {
    echo 'Message has been sent';
  }
}
?>

<!DOCTYPE HTML>
<HTML>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mad Men Software | Seeing the Beauty in the Chaos</title>

    <!--build:css css/main.min.css-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="../../bower_components/normalize-css/normalize.css">
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="../../bower_components/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="../../bower_components/image-picker/image-picker/image-picker.css">
    <link rel="stylesheet" href="../css/homepage.css" type="text/css">
    <!--endbuild-->



  </head>
  <body>
    <section class="bg-1 text-center jumbo">
      <div class="container-fluid">
        <div class="row top">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xxs-3"></div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-6 logo-container">
            <img class="img-responsive logo animated flipInX" src="../img/MadMenOfficialLogo%20w:o%20Tagline.png">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xxs-3">
          </div>
        </div>
        <div class="row middle">
          <div class="col-lg-12 middle-col">
            <h1 id="rotate"></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container-fluid services">
    <div class="row text-center">
      <h1>What We Do</h1>
    </div>
    <div class="row text-center">
      <div class="col-md-4 col-sm-6 col-xs-6 service">
        <i class="fa fa-paint-brush" aria-hidden="true"></i>
        <p>
          Branding
        </p>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 service">
        <i class="fa fa-laptop" aria-hidden="true"></i>
        <p>
          Websites
        </p>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 service">
        <i class="fa fa-mobile" aria-hidden="true"></i>
        <p>
          Mobile Applications
        </p>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4 col-sm-6 col-xs-6 service">
        <i class="fa fa-line-chart" aria-hidden="true"></i>
        <p>
          Digital Marketing
        </p>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 service">
        <i class="fa fa-cloud" aria-hidden="true"></i>
        <p>
          Business Solutions
        </p>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 service">
        <i class="fa fa-google" aria-hidden="true"></i>
        <p>
          Search Engine Optimization
        </p>
      </div>
    </div>

  </div>

  <section class="big-problems-simply">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-6">
          <h1 class="text-center">Big Problems Solved Simply</h1>
          <p>
            &emsp;Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
          </p>
          <p>
            &emsp;Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="project-will-be">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center project-will-be-header">Your Project will be..</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="row">
            <div class="col-lg-3">
              <div class="project-will-be-item">
                <h1 class="text-center">Quick</h1>
                <p>
                  &emsp;We can get your project done quick.
                </p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="project-will-be-item">
                <h1 class="text-center">Simple</h1>
                <p>
                  &emsp;We'll do all the work, you don't need to lift a finger
                </p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="project-will-be-item">
                <h1 class="text-center">Custom</h1>
                <p>
                  &emsp;We'll create solutions that fit your needs.
                </p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="project-will-be-item">
                <h1 class="text-center">Personal</h1>
                <p>
                  &emsp;We'll work with you so you get a personal touch.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="need-to-grow">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="text-center">Need to grow your business?</h1>
          <h5 class="text-center">Lorem Ipsum lorem ipsum lorem ipsum lorem ipsum.</h5>
          <hr />
          <p>
            &emsp;We will be with you every step of the way while we build your custom application or website.
            Mad Men has experience building all kinds of software and we'll meet your business or personal needs.
            We'll make it an enjoyable and simple experience for you while you get what you want.
          </p>
        </div>
        <div class="col-lg-6">
          <img src="../img/all-devices.png" class="img-circle" alt="Cinque Terre" />
        </div>
      </div>
    </div>
  </section>

  <section class="portfolio">
    <div class="container-fluid">
      <h1 class="text-center">Our Work</h1>      
      <div class="row">
        <div class="col-lg-4">
          <div id="fuji">
            <div class="portfolio-item">
              <h4 class="text-center">Fuji Sushi Bar</h4>
              <a href="http://www.fujisushiau.com" class="btn btn-primary">Visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div id="bean">
            <div class="portfolio-item">
              <h4 class="text-center">Bean Gourmet Coffee</h4>
              <a href="http://www.beangourmetcoffee.com" class="btn btn-primary">Visit</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4">
          <div id="fuji">
            <div class="portfolio-item">
              <h4 class="text-center">Fuji Sushi Bar</h4>
              <a href="http://www.fujisushiau.com" class="btn btn-primary">Visit</a>
            </div>
          </div>
        </div>
      </div>
      <a href="" class="btn btn-primary" id="portfolio-see-more">See More</a>

    </div>
  </section>

  <section class="roots-in-auburn">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="text-center">Roots in Auburn</h1>
          <p>
            &emsp;Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
          </p>
          <p>
            &emsp;Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
            Lorem Ipsum lorem ipsum lorem ipsum.Lorem Ipsum lorem ipsum lorem ipsum.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="meet-the-team">
    <div class="container-fluid">
      <h1 class="text-center meet-the-team-header">Meet the Team</h1>
      <div class="row gutter-0 team-member-holder">
        <div class="col-xs-3">
          <img id="carson-pic" class="team-picture" src="https://upload.wikimedia.org/wikipedia/commons/7/7f/Daniel_Craig_-_Film_Premiere_%22Spectre%22_007_-_on_the_Red_Carpet_in_Berlin_(22387409720)_(cropped).jpg" />
          <h4 class="text-center">Carson Jones</h4>
          <p class="text-center">CEO and Developer</p>
        </div>
        <div class="col-xs-3">
          <img id="zach-pic" class="team-picture" src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Portrait_of_a_man_of_noble_birth_with_a_book.jpg"/>
          <h4 class="text-center">Zach Chandler</h4>
          <p class="text-center">CTO and Developer</p>
        </div>
      </div>
    </div>
  </section>

  <section class="get-a-quote">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1 class="text-center">Get a Quote for your Next Project Today</h1>
          <button class="btn btn-primary get-a-quote-btn" data-toggle="modal" data-target="#quoteModal">Get a Quote</button>
        </div>
      </div>
    </div>
  </section>

  <footer class="section">
    <div class="container-fluid">
      <div class="row logo-row">
        <div class="col-lg-12 logo-col">
          <a href="http://www.madmensoftware.com">
            <img class="img-responsive logo" src="../img/MadMenOfficialLogo%20w:o%20Tagline.png" alt="Mad Men Software Logo">
          </a>
        </div>
      </div>
      <div class="row social-media">
        <div class="col-lg-5"></div>
        <div class="col-lg-2">
          <div class="row">
            <div class="col-xs-4 icons facebook">
              <a href="">
                <img class="img-responsive icon" src="../img/SocialMediaIcons/Facebook.png">
              </a>
            </div>
            <div class="col-xs-4 icons twitter">
              <a href="">
                <img class="img-responsive icon" src="../img/SocialMediaIcons/Twitter.png">
              </a>
            </div>
            <div class="col-xs-4 icons linked-in">
              <a href="">
                <img class="img-responsive icon" src="../img/SocialMediaIcons/Linkedin.png">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5"></div>
      </div>
    </div>
  </footer><!-- end footer -->


  <!-- Modals -->
  <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-box">
            <form role="form" action="" method="post" class="quote-form">
              <fieldset class="describe-yourself">
                <div class="container-fluid">
                  <div class="form-top row">
                    <div class="form-top-left col-lg-6">
                      <h3>How would you describe yourself?</h3>
                    </div>
                    <div class="form-top-right col-lg-6">
                      <i class="fa fa-user"></i>
                    </div>
                  </div>
                  <div class="row form-middle">
                    <div class="col-lg-8 col-lg-offset-2">
                      <div class="btn-group btn-group-justified" role="group">
                        <div class="btn btn-default btn-lg small-business-btn">
                          <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
                          </span>
                          <h5>Business</h5>
                        </div>
                        <div class="btn btn-default btn-lg individual-btn">
                          <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                          </span>
                          <h5>Individual</h5>
                        </div>
                        <div class="btn btn-default btn-lg non-profit-btn">
                          <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                          </span>
                          <h5>Non-Profit</h5>
                        </div>
                      </div>

                      <input type="checkbox" name="client_type[]" value="small-business" class="hidden" id="small-business-checkbox" />
                      <input type="checkbox" name="client_type[]" value="individual" class="hidden" id="individual-checkbox" />
                      <input type="checkbox" name="client_type[]" value="non-profit" class="hidden" id="non-profit-checkbox" />
                    </div>
                  </div>
                  <div class="form-bottom row">
                    <button type="button" class="btn btn-next pull-right">Next</button>
                  </div>
                </div>
              </fieldset>

              <fieldset class="how-can-we-help">
                <div class="container-fluid">
                  <div class="form-top row">
                    <div class="form-top-left col-lg-6">
                      <h3>How can we help?</h3>
                    </div>
                    <div class="form-top-right col-lg-6">
                      <i class="fa fa-user"></i>
                    </div>
                  </div>
                  <div class="row form-middle">
                    <div class="col-lg-8 col-lg-offset-2">
                      <div class="btn-group btn-group-justified" role="group">
                        <div class="btn btn-default btn-lg website-btn">
                          <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                          </span>
                          <h5>Website</h5>
                        </div>
                        <div class="btn btn-default btn-lg mobile-btn">
                          <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                          </span>
                          <h5>Mobile App</h5>
                        </div>
                        <div class="btn btn-default btn-lg business-solution-btn">
                          <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                          </span>
                          <h5>Business Solution</h5>
                        </div>
                      </div>

                      <input type="checkbox" name="project_type[]" value="website" class="hidden" id="website-checkbox" />
                      <input type="checkbox" name="project_type[]" value="mobile" class="hidden" id="mobile-checkbox" />
                      <input type="checkbox" name="project_type[]" value="business-solution" class="hidden" id="business-solution-checkbox" />
                    </div>
                  </div>
                  <div class="form-bottom row">
                    <button type="button" class="btn btn-previous pull-left">Previous</button>
                    <button type="button" class="btn btn-next pull-right">Next</button>
                  </div>
                </div>
              </fieldset>

              <fieldset class="tell-us-more">
                <div class="container-fluid">
                  <div class="form-top row">
                    <div class="form-top-left col-lg-6">
                      <h3>Tell us a little bit about your project.</h3>
                    </div>
                    <div class="form-top-right col-lg-6">
                      <i class="fa fa-user"></i>
                    </div>
                  </div>
                  <div class="row form-middle">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for="project-title">Project Title</label>
                        <input type="text" class="form-control" id="project-title" name="project-title" placeholder="Tell us what your project should be called in correspondence with us...">
                      </div>
                      <div class="form-group">
                        <label for="project-description">Description</label>
                        <textarea class="form-control" type="text" name="project-description" placeholder="Tell us about your project's features, limitations, deadlines, etc.."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-bottom row">
                    <button type="button" class="btn btn-previous pull-left">Previous</button>
                    <button type="button" class="btn btn-next pull-right">Next</button>
                  </div>
                </div>
              </fieldset>

              <fieldset class="contact-info">
                <div class="container-fluid">
                  <div class="form-top row">
                    <div class="form-top-left col-lg-6">
                      <h3>Tell us a little bit about yourself.</h3>
                    </div>
                    <div class="form-top-right col-lg-6">
                      <i class="fa fa-user"></i>
                    </div>
                  </div>
                  <div class="row form-middle">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" id="phone">
                      </div>
                      <div class="form-group">
                        <label for="organization">Organization (Optional)</label>
                        <input type="text" class="form-control" id="organization" name="organization" placeholder="Organization or Company">
                      </div>

                    </div>
                  </div>
                  <div class="form-bottom row">
                    <button type="button" class="btn btn-previous pull-left">Previous</button>
                    <button type="submit" name="submit" class="btn pull-right">Get my Quote!</button>
                  </div>
                </div>
              </fieldset>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>




  <!--build:js /js/main.min.js -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script src="../../bower_components/maskedinput.js"></script>
  <script src="../../bower_components/flip/dist/jquery.flip.min.js"></script>
  <script src="../../bower_components/image-picker/image-picker/image-picker.min.js"></script>
  <script src="../../bower_components/parallax.js/parallax.js"></script>
  <script src="../../bower_components/typed.js/dist/typed.min.js"></script>
  <script src="../../bower_components/Scrollify/jquery.scrollify.min.js"></script>
  <script src="../../bower_components/date.js/build/date.js"></script>
  <script src="../../bower_components/classie/classie.js"></script>
  <script src="../js/homepage.js"></script>
  <!-- endbuild -->
</body>
</HTML>
