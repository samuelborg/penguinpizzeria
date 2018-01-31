    <?php

    // REQUIRED
    // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
    date_default_timezone_set('Europe/Malta');
    // Include the store hours class
    require('StoreHours.class.php');

    // REQUIRED
    // Define daily open hours
  // Must be in 24-hour format, separated by dash
  // If closed for the day, leave blank (ex. sunday)
  // If open multiple times in one day, enter time ranges separated by a comma
  $hours = array(
      'mon' => array('10:00-23:00'),
      'tue' => array('10:00-23:00'),
      'wed' => array('10:00-23:00'),
      'thu' => array('10:00-23:30'),
      'fri' => array('11:00-1:00'),// Open late
      'sat' => array('17:00-23:00'),
      'sun' => array('') // Closed all day
    );

  // OPTIONAL
  // Add exceptions (great for holidays etc.)
  // MUST be in format month/day
  // Do not include the year if the exception repeats annually
  $exceptions = array(
    '2/24' => array('11:00-18:00'),
    '10/18' => array('11:00-16:00', '18:00-20:30'),
    '1/20' => array('11:00-16:00', '18:00-20:30')
  );

  // OPTIONAL
  // Place HTML for output below. This is what will show in the browser.
  // Use {%hours%} shortcode to add dynamic times to your open or closed message.
  $template = array(
  'open' => '<div class="alert alert-success">Yes, we\'re open!<br>Today\'s hours are {%hours%}</div><br><img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="/img/signs/open.png" alt="Open Sign">',
    'closed' => '<div class="alert alert-danger">Sorry, we\'re closed.<br>Today\'s hours are {%hours%}</div><br><img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="/img/signs/closed.png" alt="Closed Sign">',
    'closed_all_day' => '<div class="alert alert-danger"><h4>Sorry, we\'re closed today.</h4><br><img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="/img/signs/closed.png" alt="Closed Sign"></div>',
    'separator' => " - ",
    'join' => " and ",
    'format' => "g:ia", // options listed here: http://php.net/manual/en/function.date.php
    'hours' => "{%open%}{%separator%}{%closed%}"
  );

  // Instantiate class and call render method to output content
    $store_hours = new StoreHours($hours, $exceptions, $template);
    $store_hours->render();
    ?>

    </body>

</html>
