<?php
	session_start();
    include('files/connection.php');
	
    if(isset($_SESSION['Username'])){
		 
	}else{	
		header("Location: login.php");
		die();
	}
    if(isset($_POST['song_name'])){
        $use = $_SESSION['Username'];
		$file_name = "";  
		$song_photo = "";
		$song_mp3 = "";

		if(isset($_FILES['song_photo']['error'])){
			if($_FILES['song_photo']['error'] == 0){		 
				$target_dir = "uploads/";				
				$song_photo = time()."_".rand(100000,10000000).rand(100000,10000000)."_".$_FILES["song_photo"]["name"];
				$song_photo = str_replace(" ", "_", $song_photo);				
				$source = $_FILES["song_photo"]["tmp_name"];
				$destinatin = $target_dir.$song_photo;
				
				if(move_uploaded_file($source, $destinatin)){
				 	 
				}else{
				 	$song_photo = "";
				}
			}
		}

		if(isset($_FILES['song_mp3']['error'])){
			if($_FILES['song_mp3']['error'] == 0){		 
				$target_dir = "uploads/";				
				$song_mp3 = time()."_".rand(100000,10000000).rand(100000,10000000)."_".$_FILES["song_mp3"]["name"];
				$song_mp3 = str_replace(" ", "_", $song_mp3);				
				$source = $_FILES["song_mp3"]["tmp_name"];
				$destinatin = $target_dir.$song_mp3;
				
				if(move_uploaded_file($source, $destinatin)){
				 	 
				}else{
				 	$song_mp3 = "";
				}
			}
		}

		$song_name1 = $_POST['song_name'];
		$movie_name1 = $_POST['movie_name'];
 
		$SQL = "INSERT INTO songs(username,song_name,artist_name,song_pic,song_mp3) VALUES ('{$use}', '{$song_name1}', '{$movie_name1}', '{$song_photo}', '{$song_mp3}')";
        $result = mysqli_query($conn, $SQL);
		
		if($result){ 
            echo "<script>alert('Song uploaded');</script>";
        }else{ 
			echo "<script>alert('Song not uploaded');</script>";
		}

		header("Location: upload_music.php");
		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
<?php include('files/header.php');
 ?>
    <div class="row pl-0">
		<div class="col-md-8">
			<h2>Uploading new song</h2>

			<form method="post" action="upload_music.php" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="song_name">Song name</label>
			    <input type="text" name="song_name" class="form-control" id="song_name"  placeholder="Enter song name"> 
			  </div>


			  <div class="form-group">
			    <label for="aritst_id">Movie name</label>
			    <input type="text" name="movie_name" id="movie_name" class="form-control">                
			  </div>
 

 			  <div class="form-group">
			    <label for="song_photo">Song photo</label>
			    <input type="file"  name="song_photo" class="form-control" id="song_photo"> 
			  </div>


 			  <div class="form-group">
			    <label for="song_mp3">Song mp3</label>
			    <input type="file" accept=".mp3" name="song_mp3" class="form-control" id="song_mp3"> 
			  </div>

			  <input type="submit" value="add new song" class="float-right mt-md-3 btn btn-lg btn-dark">

			</form>

		</div>
	</div>

    </div>

    
</body>
</html>

