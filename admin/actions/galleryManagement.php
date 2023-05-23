<?php
include("../../config/db.php");

if (isset($_FILES['file']['name'][0])) {
  $imageData = '';
  $check = 0;
  $photo = '';
  $category = strip_tags(htmlspecialchars($_POST['category']));
  foreach ($_FILES['file']['name'] as $keys => $values) {
      $check = $check+1;
      $photo = $_FILES['file']['name'][$keys];
      $ext = pathinfo($photo, PATHINFO_EXTENSION);
      $fileName = 'Gallery-'.uniqid() .'.'.$ext;
    if (move_uploaded_file($_FILES['file']['tmp_name'][$keys], '../../img/' . $fileName)) {
        $imageData .= '<img src="../../img/' . $fileName . '" class="thumbnail" />';
        try{
          $stmt = $db->prepare("INSERT INTO gallery(photo, category) 
          VALUES (:photo, :category)");
          $stmt->execute(array(
            'photo'=>$fileName,
            'category'=>$category
          ));
          $_SESSION['success'] = 'Gallery Photo Added successfully';
        }
        catch(PDOException $e){
          $_SESSION['error'] = $e->getMessage();
        }
    }
  }
  // echo $imageData;
  // if ($check>0) {
  //   header('Location: ../gallery.php');
  // }
}else if(isset($_POST['updatePic'])){
  // News Image
  $filename1 = $_FILES['photo']['name'];
  $gallerid = $_POST['gallerid'];
  
  if(!empty($filename1)){
    
      // Before updating news photo delete the first saved if it exist
      $delPic = $db->prepare("SELECT *, COUNT(*) AS numrows FROM gallery WHERE gallerid=:gallerid");
      $delPic->execute(['gallerid'=>$gallerid]);
      $row = $delPic->fetch();

      if($row['numrows'] > 0 && !empty($row['photo'])){
        $fileToDelete = '../../img/'.$row['photo'];
        unlink($fileToDelete);
      }
    
    $ext = pathinfo($filename1, PATHINFO_EXTENSION);
    $new_filename1 = 'Gallery-'.$gallerid.rand(1000, 10000).'.'.$ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], '../../img/'.$new_filename1);

    try{
      $stmt = $db->prepare("UPDATE gallery SET photo=:photo WHERE gallerid=:gallerid");
      $stmt->execute(['photo'=>$new_filename1, 'gallerid'=>$gallerid]);
      $_SESSION['success'] = ' Gallery photo updated !';
      header('Location: ../gallery.php');

    }
    catch(PDOException $e){
      $_SESSION['error'] = $e->getMessage();
      header('Location: ../gallery.php');
    }
  }
  else{
    $new_filename1 = '';
  }

  
}else if(isset($_POST['deletePhoto'])){
  // News Image
  $gallerid = $_POST['gallerid'];
  
  if(!empty($gallerid)){
    
      // Before deleting news delete its saved photo if it exist
      $delPic = $db->prepare("SELECT *, COUNT(*) AS numrows FROM gallery WHERE gallerid=:gallerid");
      $delPic->execute(['gallerid'=>$gallerid]);
      $row = $delPic->fetch();

      if($row['numrows'] > 0 && !empty($row['photo'])){
        $fileToDelete = '../../img/'.$row['photo'];
        unlink($fileToDelete);
      }
    

    try{
      $stmt = $db->prepare("DELETE FROM gallery WHERE gallerid=:gallerid");
      $stmt->execute(['gallerid'=>$gallerid]);
      $_SESSION['success'] = ' Photo Information Deleted !';
      header('Location: ../gallery.php');

    }
    catch(PDOException $e){
      $_SESSION['error'] = $e->getMessage();
      header('Location: ../gallery.php');
    }
  }
  else{
    $_SESSION['error'] = ' Photo Information not Found !';
    header('Location: ../gallery.php');
  }

  
}

?>
