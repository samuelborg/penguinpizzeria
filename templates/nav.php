 <nav class="navbar navbar-default navbar-custom navbar-fixed-top wow fadeInDown">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="/img/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">

                 <?php
                    foreach($navItems as $item)
                    {
                        echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
                    }
                 ?>
                 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    <!-- /.container -->
</nav>
