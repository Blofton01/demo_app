<?php
require_once('../inc/config.php');

//get all contact related to this page (home)
$sql = "SELECT * 
FROM site_content 
WHERE pg_name='about' AND section_name='intro'" ;
$myData = $db->query($sql);




//create container for each piece of data
while($row = $myData -> fetch_assoc())
{
	if($row['section_name'] == 'intro')
	{
		$intro = $row['content'];	
	}
}

if( isset($_POST['submitted']) )
{
	$user_content = mysqli_real_escape_string($db, $_POST['body']);
	
	
	$sql = "UPDATE site_content SET content = '$user_content'
	WHERE pg_name='about' AND section_name='intro' ";
	
	$myData = $db->query($sql);
	
	header('Location: ../');
	
}

?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update About Page</title>
<style>
	legend, select, label, textarea, input 
	{
		display:block;	
		
	}


</style>
</head>

<body>
<h1>Update Home Page</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
    <legend>Update About Page Info</legend>
    <select>
    	<option value="home">home</option>
        <option value="about"selected="about" >about</option>
        <option value="contact">contact</option>
    </select>        
    <label for="body">body</label>
    <textarea name="body" rows="10" cols="30">
    <?php echo $blurb; ?>
    </textarea>
    <input type="submit" name="submitted" value="update now" />
    
    
    </fieldset>
</form>


</body>
</html>
