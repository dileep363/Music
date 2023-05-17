<?php
include('connection.php');

function get_all_songs($conn,$usea){
	$sql = "SELECT * FROM songs ";
 	$res = mysqli_query($conn,$sql);
 	$songs = array();  
  	while ($data = mysqli_fetch_assoc($res)) {
  		array_push($songs, $data);
 	}
 	return $songs;
}


function get_top_song_by_song_id($conn,$song_id){

	$sql = "SELECT * FROM songs WHERE song_id = {$song_id}";
 	$res = mysqli_query($conn,$sql);
 	$song = mysqli_fetch_assoc($res);
	

 	return $song;
}


?>