<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();






//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
	  <script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
	
	
	
</head>
<body>

	<div id="wrapper">

		<?php echo '<h1>'.$row['postTitle'].'</h1>'; 
echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
		?>
		<hr />
		<p><a href="./">Blog Index</a></p>


		<?php	
			echo '<div id="blogcontent">';
				
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>
		
	<div id="usercomm">
<h2> User Comments</h2>
<?php
			try {




				$stmt1 = $db->prepare('SELECT blog_id, user_id, comment, commentDate, username FROM user_comments WHERE blog_id = :postID');
				$stmt1->execute(array(':postID' => $_GET['id']));
				while($row1 = $stmt1->fetch()){
					
					echo '<div class="comments">';
						echo '<div class="userdetail"><h4>'.$row1['username'].'</h4></div>';
						echo '<div class="userdetail" style="margin-left:20px;"><p>Commented on '.date('jS M Y H:i:s', strtotime($row1['commentDate'])).'</p></div>';
						echo '<p>'.$row1['comment'].'</p>';				
									
					echo '</div>';
					echo '<div class="blankdiv"> </div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>


</div>



	
		
		<form action='' method='post'>
				<?php	
			//if not logged in redirect to login page
		if(!$user->is_logged_in()){
		echo '<p><a href="viewpost.php?id='.$row['postID'].'">Login First</a></p>';	
		 }else if($user->is_logged_in()){
		 
		 echo "<p><label>Enter Your Comments</label><br />
				<textarea name='usercomment' cols='60' rows='10'></textarea></p>";
		 
		 echo "<p><input type='submit' name='submit' value='Submit'></p>";	
		 }
			?>
		</form>

	</div>
	
	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($usercomment ==''){
			$error[] = 'Please enter the Comment.';
		}
		
		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO user_comments (blog_id,user_id,username,comment) VALUES (:blogId, :userId, :username, :comment)') ;
				$stmt->execute(array(
					':blogId' => $_GET['id'],
					':userId' => $_SESSION["loginuserId"],
					':username' => $_SESSION["loginusername"],
					':comment' => $usercomment
				));

				//redirect to index page
				header('Location: index.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>	

	
	
	

</body>
</html>