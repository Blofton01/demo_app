<?php
require_once('inc/config.php');

//get all contact related to this page (home)
$sql = "SELECT * FROM site_content WHERE pg_name='contact'" ;
$myData = $db->query($sql);




//create container for each piece of data
while($row = $myData -> fetch_assoc())
{
	$content = $row['content'];
	
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
    
    <?php echo $content; ?>
    </p>
	</div>

<?php include_once('inc/footer.php'); ?>
	

</div>
</body>
</html>
