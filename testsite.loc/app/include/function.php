<?php
    function get_face(){
        global $link;
        $sql = "SELECT * FROM face";
        $result = mysqli_query($link, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
    
    $face = get_face();
    
 function get_face_id($face_id){
     global $link;
     $sql = "SELECT * FROM face WHERE id =".$face_id;
     $result = mysqli_query($link, $sql);
     $face = mysqli_fetch_assoc($result);
     return $face;     
 }
function insert_army($email, $password){
       global $link;
       $email = mysqli_real_escape_string($link, $email);
       $password = mysqli_real_escape_string($link, $password);
       $query = "SELECT * FROM army WHERE email = '$email'";
       $result = mysqli_query($link, $query);
       if(!mysqli_num_rows($result)){
          $insert_query = "INSERT INTO army (email, password) VALUES ('$email', '$password')";
          $result = mysqli_query($link, $insert_query);
            if($result){
              return 'created';
            } else {
              return 'failed';
             }
       } else {
           return 'exist';
       }
    }
 
 function get_song(){
     global $link;
     $sql = "SELECT face.name as name_face, song.name as name_song FROM face LEFT JOIN face_song ON face.id = face_song.face_id LEFT JOIN song ON face_song.song_id = song.id ";
     $result = mysqli_query($link, $sql);
     $song = mysqli_fetch_all($result, MYSQLI_ASSOC);
     return $song;
 }
 
 function get_fan(){
     global $link;
     $sql = "SELECT army.email, band.name FROM army RIGHT JOIN band_army ON army.id = band_army.army_id RIGHT JOIN band ON band.id = band_army.band_id ";
     $result = mysqli_query($link, $sql);
     $fan = mysqli_fetch_all($result, MYSQLI_ASSOC);
     return $fan;
     }
     
function get_categories(){
    global $link;
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($link, $sql);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}