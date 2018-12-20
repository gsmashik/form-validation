<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {

    /////////////// Title ///////////////
     if (!empty($_POST['title'])) {
        $title = $_POST['title'];
     }
     else $title_err= " Please Type Your Name ";
  }  


      /////////////// Snippet ///////////////

  if (!empty($_POST['snippet'])) {
     $snippet = $_POST['snippet'];
  }

  else {
      $snippet_err = " Please Type Your Snippet "; 
  }
      /////////////// category ///////////////

  if (!empty($_POST['category'])) {
    $category = $_POST['category'];
 }

 else {
     $category_err = " Please Type Your category "; 
 }
      /////////////// subject ///////////////

 if(isset($_POST["subject"]))  
 { 
     // Retrieving each selected option 
     foreach ($_POST['subject'] as $subject)  
        $important =  print ($subject); 
 } 
else{
 echo "Select an option first !!"; 
} 

if (!empty($_POST['language'])) {
    $language = $_POST['language'];
 }

 else {
     $language_err = " Please Type Your language "; 
 }
    

echo $title ."</br>".$snippet."</br>".$category."</br>".$important."</br>".$language;"</br>";
}