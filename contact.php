<?php
require_once('inc/config.php');
require_once('inc/validation.php');

	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','konfidentialent@gmail.com');
	define('MESSAGE_SUBJECT','form Demo');
	define('REPLY_TO', 'konfidentialent@gmail.com');
	define('FROM_ADDRESS', 'konfidentialent@gmail.com');
	define('REDIRECT_URL', 'http://konfidentialent.com/imd410/index.php/');
	
	




//get all contact related to this page (contact)
$sql = "SELECT * FROM site_content WHERE pg_name='contact'" ;
$myData = $db->query($sql);




//create container for each piece of data
while($row = $myData -> fetch_assoc())
{
	if($row['section_name'] === 'intro')
	{
		$intro = $row['content'];	
	}
	if($row['section_name'] === 'widgets')
 {
 	$items[]= $row['content'];
 }
}

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>K3</title>
<link href="css/main.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="contact_page">

<div class="container">

	<?php include_once('inc/header.php'); ?>

  <div class="sidebar1">
   	
    <?php require_once('inc/nav.php'); ?>
  </div>
    
    <div class="content">
     <h2>Contact</h2>
    <p>
    
    <?php echo $intro; ?>
    </p>
    
    <form action="<?php echo $_SERVER['form2/PHP_SELF']; ?>" method="post">
		<fieldset>
			<p>
				<label for="name">Name:</label><?php echo @$name_error; ?>
				<input type="text" id="name" name="name" value="<?php echo @$name ?>" class="required" />
			</p>
			<p>
				<label for="email">Email:</label><?php echo @$email_error; ?>
				<input type="text" id="email" name="email" value="<?php echo @$email ?>" class="email required" />
			</p>
			<p>
				<label for="message">Message:</label><?php echo @$message_error; ?>
				<textarea cols="45" rows="7" id="message" name="message" class="required"><?php echo @$message ?></textarea>
			</p>
			<input name="submitted" type="submit" value="Send" />
		</fieldset>
	</form>
	</div>

<?php include_once('inc/footer.php'); ?>
	

</div>



</body>
</html>
