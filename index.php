<?php

include ('dbconfig.php');

?>

<html>

<head>

<style>

.video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}
 
.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>

</head>

<body>

<div class="video-container">

         <iframe 

         <?php
	
	$stmt = $DB_con->prepare('SELECT userID, userName, userProfession, userPic FROM tbl_users ORDER BY userID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>

src="<?php echo $userProfession; ?>" 

<?php
		}
	}
	else
	{
		?>

        Nada encontrado ...
        
        <?php
	}
	
?>

frameborder="0" 

width="560" 

height="315">

</iframe>

</div>

</body>

</html>