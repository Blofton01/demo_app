<?php
require_once('inc/config.php');

//get all contact related to this page (home)
$sql = "SELECT * FROM site_content WHERE pg_name='home'" ;
$myData = $db->query($sql);




//create container for each piece of data
while($row = $myData -> fetch_assoc())
{
	if($row['section_name'] == 'intro')
	{
		$intro = $row['content'];				
	}
	elseif($row['section_name'] == 'blurb')
	{
		$blurb = $row['content'];	
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

<body id="home_page">

<div class="container">

  <?php include_once('inc/header.php'); ?>

  <div class="sidebar1">
 
 <?php require_once('inc/nav.php'); ?>
 
    <aside>
    	<p class="spaceR">
     <?php echo $blurb; ?>
     	</p>
    </aside>
  </div>
  <article class="content">
    <h2>Home</h2>
    <section>
   
    
      <p>
      
     	<?php echo $intro; ?>
      
      </p>
 
    </section>
  <!-- end .content --></article>
   <!-- <aside>
    <h4>Backgrounds</h4>
 
  </aside>
-->

<?php include_once('inc/footer.php'); ?>
	

</div>
</body>
</html>
