<?php
    $page = "dish";

    include('templates/header.php');

    if (isset($_GET['item']))
    {
        $menuItem = $_GET['item'];
        $food_section =find_section($menuItem,$foodItems);
        $dish = $foodItems[$food_section][$menuItem];
    }

?>
    <div class="panel panel-default" style="padding: 20px 20px 20px 20px">
    <div class="row">
        <center><hr><h2 class="intro-text text-center"><?php echo "$dish[name]"; ?><hr></h2></center>
        <div class="col-md-5 text-center">
            <img class="img-responsive wow flipInX" src="/img/food/<?php echo "$dish[img]"; ?>.jpg" alt="<?php echo "dish[name]"; ?>">
        </div>
        <div class="col-md-7">
            <p><?php echo "$dish[info]"; ?></p>
                <span class="text-right tag wow flipInY"><small>€</small><?php echo number_format((float)"$dish[price]", 2, '.', ''); ?></span>
        </div><div class="fb-like" data-href="localhost:8888/<?php echo $_SERVER[‘REQUEST_URI’]?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
    <br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=848410028526883";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-layout="button_count" data-href="localhost:8888/<?php echo $_SERVER[‘REQUEST_URI’]?>" data-action="like" data-show-faces="true" data-share="false"></div>
<br>
<a class="twitter-share-button"
  href="https://twitter.com/share"
  data-via="twitterdev">
Tweet
</a>
<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
    <br>
    <br>
    <a href = "menu.php" class="btn btn-default">Back to Menu</a>
</div>

<?php
    include('templates/footer.php');
?>
