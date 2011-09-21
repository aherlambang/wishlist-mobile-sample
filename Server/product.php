<?php
function curPageURL() {
 $pageURL = 'http://';
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<html>
  <head prefix="og: http://ogp.me/ns# product: http://ogp.me/ns/product#">
          <meta property="fb:app_id"         content="233754036673011">
	  <meta property="og:url"         content="<?php echo strip_tags(curPageURL());?>"> 
	  <meta property="og:type"                content="product"> 
	  <meta property="og:title"               content="<?php echo strip_tags($_REQUEST['name']);?>"> 
	  <meta property="og:image"               content="<?php echo 'http://' . $_SERVER["SERVER_NAME"] . '/images/' . strip_tags($_REQUEST['image']);?>"> 
      <title>Product Name</title>
  </head>
	<body>
	<?php echo strip_tags($_REQUEST['name']);?>
	</body>
</html>
