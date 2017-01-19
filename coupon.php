<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ferrero Rocher Valentine's Day</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
  <link rel="stylesheet" href="./main.css">
  <link rel="stylesheet" href="./font.css">
  <link rel="stylesheet" href="./media.css">
</head>

<body>
  <?php
$response = file_get_contents('http://coupons2.smartsource.com/smartsource2/TokenGeneratorServlet?Link=IZT4N3ZREW2GE&MID=value&key=XG9qNjHBKw528HCQwRG6m4NbkuDBnW');
?>
  <div class="container" id="main">
    <div class="row">
      <div class="col-md-12" id="center-content">
        <div class="col-md-8 col-md-offset-2 col-xs-12" id="main-content">
          <img src='./assets/background-center.png' alt="" class="center-image img-responsive">fall
          <div class="content-box col-md-12 col-md-offset-0 col-xs-8 col-xs-offset-2" id="small-width">
            <img src="./assets/Valentines-Day.png" alt="" class="center img-responsive" id="img-1">

            <img src="./assets/from-ferrero-rocher.png" alt="" class="center img-responsive" id="img-2">
            <section class="intro-content col-xs-12">
              THANK YOU FOR TAKING THE TIME TO TAKE OUR SURVEY FOR FERRERO ROCHER<sup id="bold-reg">&reg;</sup> VALENTINE'S DAY HOLLOW HEARTS!
              <p class="small-intro">YOUR OPINION IS VERY IMPORTANT TO US.</p>
              <p class="small-intro">
                To show our appreciation, please click on the button below to get your coupon for a FREE 12 count Ferrero Rocher® (5.3 OZ) or Ferrero Collection (4.6 OZ).
              </p>
            </section>
            <section class="second-content col-xs-12">
              <div class="col-md-12 col-xs-12">
                <div class="submit">
                  <?php
                    if(!empty($response)){
                      echo '<a href="http://coupons2.smartsource.com/smartsource2/index.jsp?Link=IZT4N3ZREW2GE&MID=value&token='.$response.'" id="submit">';
                      echo '<img src="./assets/GETButton.png" alt="" class="submit-image-coupon img-responsive" />';
                      echo '</a>';
                    }else{
                      echo '<a href="http://coupons2.smartsource.com/smartsource2/index.jsp?Link=IZT4N3ZREW2GE&MID=value&token=" id="submit">';
                      echo '<img src="./assets/GETButton.png" alt="" class="submit-image img-responsive" />';
                      echo '</a>';
                    }
                    ?>

                  </a>
                </div>
              </div>
            </section>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
