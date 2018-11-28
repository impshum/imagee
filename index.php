<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$dirname = "assets/img/";
$images = glob($dirname . "*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);

function gallery()
{
    $dirname = "assets/img/";
    $images = glob($dirname . "*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);

    usort($images, create_function('$a,$b', 'return filemtime($a) - filemtime($b);'));

    foreach (array_reverse($images) as $image) {
        echo "
				<div class='grid__brick mt-3 col-6 col-md-4 col-xl-3'>

						<a class='woop' href='$image'><img src='$image'></a>

				</div>
						";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <title>Kris | Pics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link id="favicon" rel="icon" type="image/png" href="favicon.png" >
  <link rel="stylesheet" href="assets/css/normalize.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/shuffle-styles.css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="shortcut icon" type="image/png" href="../old/_include/img/favicon.png">
  <meta property="og:title" content="Kris | Pics" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="assets/og.jpg" />
  <meta property="og:image:width" content="1600" />
  <meta property="og:image:height" content="1600" />
	<meta property="og:url" content="https://recycledrobot.co.uk/kris" />
	<meta property="og:description" content="Because of all this and that" />

</head>
<body class="">

  <div id="loading">
    <div class="center">
      <div class="count"><?php echo count($images); ?> IMAGES</div>
    <div class="loader"></div>
    <div class="ready">
      <div class="trigger"></div>
      <svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
      <path class="circ path" style="fill:none;stroke:#000;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" d="
      	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"
      	/>
      <polyline class="tick path" style="fill:none;stroke:#000;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" points="
      	11.6,20 15.9,24.2 26.4,13.8 "/>
      </svg>
    </div>
  </div>
  </div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Pictures of me</h1>
    <p class="lead">Because of all this and that</p>
  </div>
</div>

<div class="container pac">
  <div class="row">

      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- kris -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-1625149405778757"
           data-ad-slot="4274097210"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>

  </div>
</div>

<div class="container mb-4">
  <div id="grid" class="my-shuffle-container row">
      <?php gallery(); ?>
    <div class="col-1 my-sizer-element"></div>
  </div>
</div>

<div class="container pac">
  <div class="row">

      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- kris -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-1625149405778757"
           data-ad-slot="4274097210"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>

  </div>
</div>

<footer class="footer">
  <div class="container footy">
    <span class="text-muted">MADE WITH <span class="nope">LOVE</span> A KEYBOARD</span>
  </div>
</footer>
<script src="assets/js/shuffle.js"></script>
<script src="assets/js/padding-grid.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<script>
$('.my-shuffle-container').imagesLoaded( function() {
  console.log('loaded');
  $('#grid').css('opacity', '1');
  $('.loader').hide();
  $(".trigger").toggleClass("drawn");
  setTimeout(function(){
    $('#loading').fadeOut();
  }, 1000);

});
$(document).ready(function() {
  $('.woop').magnificPopup({
		type:'image',
		removalDelay: 300,
		mainClass: 'mfp-fade',
		closeOnContentClick: true,
		zoom: {
    enabled: true,
    duration: 300,
    easing: 'ease-in-out',
    opener: function(openerElement) {
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    	}
		}
	});
});
</script>

</body>
</html>
