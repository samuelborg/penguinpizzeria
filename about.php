<?php
    $page = "about";

    include('templates/header.php');
?>
    <div class="panel panel-default wow fadeInUp" style="padding: 20px 20px 20px 20px">
    <div class="row" style="padding-left: 10px; padding-right: 10px;">
        <p>Located in one of the warmest and ever happy island in the continent surrounded by the cold winds of Antarctica, Penguin Pizzeria is the leading (and only) restaurant for penguins. We serve top-notch dishes inspired by the brilliant culture of humanity itself. Our award winning menu offers a wide range of pizzas and beak-watering desserts like pancakes, ice creams and crepes. <em>Our pizzas will warm your heart.</em><br><br>Leave it to our skilled chefs to offer nothing but top-notch quality food. From beak-watering pizzas to desserts that will make your tastebuds jump with joy. Think the fish was too raw? Need a high chair for your baby chick? Don't like Justin Bieber being played on our radio? Our caring crew got you covered. At Penguin Pizzeria, you're family and our customers love us ... but not as much as we love them.</p>
        </div>
    </div>
    <div class="panel panel-default wow fadeInUp" style="padding-left: 10px; padding-right: 10px">
    <div class="row" style="padding: 0 10px 10px 0">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <?php
            foreach($teamMembers as $employee)
            {
            ?>
            <div class="col-lg-4 col-sm-6 text-center">
               <img class="img-circle img-responsive img-center2 wow zoomIn" src="/img/employee/<?php echo "$employee[img]";?>.jpg" alt="<?php echo "$employee[name]";?> Profile">
                <h3><?php echo "$employee[name]";?>
                    <small><?php echo "$employee[job]";?></small>
                </h3>
                <p><?php echo "$employee[desc]";?></p>
            </div>
            <?php
            }
            ?>
    </div>
</div>

<?php
    include('templates/footer.php');
?>
