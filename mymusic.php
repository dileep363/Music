<?php 
	session_start(); 
    include('files/connection.php');
	if(isset($_SESSION['Username'])){
		//echo("<pre>Logged in");
		//print_r($_SESSION['user']); 
	}else{
		header("Location: login.php");
		die();
	}
    $usea=$_SESSION['Username'];
	include 'files/functions.php';
	$songs = get_all_songs($conn,$usea);
?>
<?php require_once("files/header.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Music</title>
</head>
<body>
    
<div class="container">
 
 <div class="row">
     
     <div class="col-md-8">
         <h2>All Songs</h2>

         <a href="upload_music.php" class="btn btn-dark float-right mt-md-3 mb-md-3">
             Add new song
         </a>

         <table class="table table-bordered">
           <thead class="thead-dark">
             <tr>
               <th scope="col" style="width: 30%;">#</th>
               <th scope="col">Song Title</th>
               <th scope="col" style="width: 20%;">Artist</th>
               <th scope="col" style="width: 20%;">Action</th>
             </tr>
           </thead>
           <tbody>
               <?php foreach ($songs as $key => $a): ?>
                 <tr>
                   <th scope="row"><img class="img-fluid rounded" width="100%" src="uploads/<?php echo $a['song_pic']; ?>" alt=""></th>
                   <td><?php 
                       echo $a['song_name']; 
                   ?></td>
                   <td><?php 
                       echo $a['artist_name']; 
                   ?></td>
                   <td><div class="btn-group btn-group-sm">
                       <a href="admin_delete_process.php?song_id=<?php echo($a['song_id']); ?>" class="btn btn-danger" title="">Delete</a>
                   </div></td>
                 </tr> 
               <?php endforeach ?>
           </tbody>
         </table>

  

     </div>
 </div>

</div>




</body>
</html>