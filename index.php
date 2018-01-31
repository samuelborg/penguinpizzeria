<?php
    $page = "index";

    include('templates/header.php');
?>

        <div class="row featurette">
        <div class="col-md-6 text-center">
        <div class="panel panel-default wow fadeInUp">
         <div class="panel-body">
            <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span><br><strong>Location</strong><br><br>
             <center>
            <div id="map-canvas">
            </div>
                    <em><p>Mulletville</p>
                    <p>Iceberg #3</p>
                    <p>Livingston Island</p>
                    <p>Antarctica</p></em>
            </center>
         </div>
         </div>
         </div>

        <div class="col-md-6 text-center">
        <div class="panel panel-default wow fadeInUp">
          <div class="panel-body">
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span><br><strong>Opening Hours</strong><br><br>

            <div class="col-md-5 ">
                <em style="display:inline;">Monday - Thursday</em><br>
                <em style="display:inline;">Friday</em><br>
                <em style="display:inline;">Saturday</em><br>
                <em style="display:inline;">Sunday</em><br>
            </div>

            <div class="col-md-7">
                <p style="display:inline" class = "text-right">10:00am to 11:00pm</p><br>
                <p style="display:inline" class = "text-right">11:00am to 1:00am</p><br>
                <p style="display:inline" class = "text-right">5:00pm to 11:00pm</p><br>
                <p style="display:inline" class = "text-right">Closed</p><br>
            </div>
            <br><br>
        </div>
                        <?php
                include('store_hours/index.php');
            ?>
      </div>
</div>
</div>

      <!-- START THE FEATURETTES -->

      <center><hr class="featurette-divider"></center>

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Flipper lickin' good. <span class="text-muted"> It's true because it's our motto.</span></h2>
            <p class="lead">Leave it to our skilled chefs to offer nothing but top-notch quality food. From beak-watering pizzas to desserts that will make your tastebuds jump with joy. Bon apetit!<br><br><a href="menu.php">Check out our award winning menu &#8594;</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block wow slideInRight" data-src="holder.js/500x500/auto" src="/img/ph-1.jpg" alt="Generic placeholder image">
        </div>
      </div>

<center><hr class="featurette-divider"></center>

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Service that will warm your heart <span class="text-muted">from the cold wind.</span></h2>
            <p class="lead">Think the fish was too raw? Need a high chair for your baby chick? Don't like Justin Bieber being played on our radio? Our caring crew got you covered. At Penguin Pizzeria, you're family and our customers love us ... but not as much as we love them.<br><br><a href="about.php/#team">&#8592; Meet our team</a></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block wow slideInLeft" data-src="holder.js/500x500/auto" src="/img/ph-2.jpg" alt="Generic placeholder image">
        </div>
      </div>

<center><hr class="featurette-divider"></center>

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Table for two? <span class="text-muted">Right this way.</span></h2>
            <p class="lead">It's not easy being a highly regarded restaurant for penguins. And we don't like to keep our customers waiting. So we came up with the idea of setting an online table booking system so you don't have to keep your girlfriend waiting on your date anymore. Spend less time waiting and more time enjoying a magical night in our igloo under the starry sky surrounded by the aurora australis. <br><br><a href="booking.php">Book your igloo now &#8594;</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block wow slideInRight" data-src="holder.js/500x500/auto" src="/img/ph-3.jpg" alt="Generic placeholder image">
        </div>

          <center><hr class="featurette-divider"></center>
      </div>

      <!-- /END THE FEATURETTES -->

        <center>
        <div class="col-md-6 text-center">
        <div class="panel panel-default wow fadeInUp">
         <div class="panel-body">
            <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><br><strong>Awards</strong><br><br>
             <center>
               <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="img/trip-advisor-2014.jpg" alt="Generic placeholder image">
            </center>
         </div>
         </div>
         </div>
        </center>


<?php
    include('templates/footer.php');
?>
