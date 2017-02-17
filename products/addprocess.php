<?php
require '../config.php';
//require_once '../classes/product.php';
require_once '../functions.php';

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

  $id=$_POST['id'];
  $image="/products/".$target_file;
  $category_id=$_POST['cats'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];
  $name=$_POST['name'];
  $description=$_POST['description'];
  $in_stock=1;
  $info=$_POST['info'];
  $reviews=$_POST['reviews'];
  $help=$_POST['help'];
  $is_valid=1;

 $product=new product(NULL,$category_id,$price,$quantity,$image,$name,$description,$in_stock,$info,$reviews,$help,$is_valid);

 if($product->insert())
 {
//   echo "true";
   header("Location: /products");
 }
 else {
   echo "false";
 }

 ?>
