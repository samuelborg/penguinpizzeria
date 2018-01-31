<?php

    $page = "menu";
    include('templates/header.php');
    $value = 0;
?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php
        foreach($foodItems as $dishType => $dish)
        {
        ?>
        <div class="panel panel-default">

            <div class="panel-heading" role="tab" id="heading<?php echo "$value";?>">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo "$value";?>" aria-expanded="true" aria-controls="collapse<?php echo "$value";?>">
                <h1><?php echo "$foodSections[$value]";?></h1>
                </a>
            </h4>
        </div>

        <div id="collapse<?php echo "$value";?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo "$value";?>">
        <div class="panel-body">
        <?php
        foreach($dish as $dish => $plate)
        {
        ?>
            <div class="col-md-4 portfolio-item wow flipInX">
                <a href="dish.php?item=<?php echo "$dish"; ?>">
                    <img class="img-responsive fixed-space bottom-space" src="/img/food/<?php echo "$plate[img]"; ?>.jpg" alt="<?php echo"$plate[name]"; ?>">
                    <h3 style="display:inline;"><?php echo "$plate[name]"; ?></h3>
                </a>
                <p style="display:inline;">€<?php echo number_format((float)"$plate[price]", 2, '.', ''); ?></p>
            </div>
        <?php
        }
        ?>
        </div>
        </div>
        </div>

    <?php

     $value+=1;

    }
    ?>

    </div>

<?php

    include('templates/footer.php');
?>
