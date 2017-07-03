<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wildcat Gaming</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Character Set Encoding -->
    <meta charset="utf-8">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>
    <?php include 'nav.html' ?>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <ul>
              <li><a href="services.html"><h5>Services</h5></a></li>
              <li><a href="#">PC Repair</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Tournaments</a></li>
              <li><a href="#">Self Service</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-xs-6">
            <ul>
              <li><a href="index.html"><h5>Wildcat Gaming</h5></a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">GoFundMe</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-xs-12 newsletter-column">
            <h3>Sign up for our Newsletter</h3>
            <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="https://tinyletter.com/wildcatgaming" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/wildcatgaming', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
              <p><label for="tlemail">Enter your email address</label></p>
              <p><input type="text" name="email" id="tlemail" /></p>
              <input type="hidden" value="1" name="embed"/><input type="submit" value="Subscribe" />
              <p><a href="https://tinyletter.com/" target="_blank">powered by TinyLetter</a></p>
            </form>
            <p>859.432.0046 | <a href="mailto:wildcatgaminglegal@gmail.com">wildcatgaminglegal@gmail.com</a></p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
