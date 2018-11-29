<?php 

 class Test{

 	public function header(){
?>

 		<!DOCTYPE html>
 		<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
	<title>my app</title>
</head>
<body>
	<?php
 	}
 	public function content(){
 		?>
 		<h1>you</h1>
 		<?php
 	
 }
 	public function footer(){
 		?>
 	</body>
 	</html>
 	<?php
 	}

 }
 $obj=new Test();
 $obj->header();
 $obj->content();
 $obj->footer();?>