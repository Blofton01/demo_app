<?php
require_once('inc/config.php');

//get all contact related to this page (home)
$sql = "SELECT * FROM site_content WHERE pg_name='about'" ;
$myData = $db->query($sql);


$items = array();

//create container for each piece of data
while($row = $myData -> fetch_assoc())
{
	if($row['section_name'] === 'intro')
	{
		$intro = $row['content'];	
	}
	elseif($row['section_name'] === 'widgets')
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

<body id="about_page">

	<div class="container">

				<?php include_once('inc/header.php'); ?>

  			<div class="sidebar1">
  
  					<?php require_once('inc/nav.php'); ?>
  
   						 <aside>
 							
     
    					</aside>
                                
           </div>
                              <!-- end .sidebar1 -->	
                              <div id="mytext">
                              <?php
                             //loop through images and build div for each 
                                for($i=0; $i<count($items); $i++)
                                {
                                	echo '<div class="widgets">';
      								echo $items[$i];
                                    echo '</div>';	
      
     							}	
								?>	
      							</div>
                              <div class="content">
                                <h2>About</h2>
                               
                                  <p>
                                  <?php echo $content; ?>
                                  
                                  </p>
                              
                           </div>
 


						<?php include_once('inc/footer.php'); ?>
	
</div>
  <!-- end .container -->
</body>
</html>
