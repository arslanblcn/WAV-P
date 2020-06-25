<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style type="text/css">
    .center {
  margin: auto;
  width: 26%;
  border: 3px solid grey;
  padding: 10px;
  top: 10px;
}
</style>
<body>
    <h4 style="text-align: center;">File Upload</h4>
    <div class="center">
      <form action="fupload-1.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" id="file" /><br><br>
         <input type="submit" class="btn btn-secondary" />
      </form>
    </div>
</body>
</html>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png", "gif");
      
      if(in_array($file_ext, $extensions) === false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file. Your file is ".$file_ext;
      }
      
      if(empty($errors) == true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      } else {
         print_r($errors);
      }
   }
?>