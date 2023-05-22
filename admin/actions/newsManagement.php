<?php
include("../../config/db.php");

if (isset($_POST['publish'])) {
  // if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['title']) || empty($_POST['firstname']) || 
// empty($_POST['lastname']) || empty($_POST['newsdate']) || empty($_POST['phone']) || empty($_POST['details']) ||
// empty($_POST['biography']) || empty($_POST['ticoWhereBy']) || empty($_POST['whyTicoMember']) ) {
//   http_response_code(500);
//   exit();
// }

$url = strip_tags(htmlspecialchars($_POST['url']));
$title = strip_tags(htmlspecialchars($_POST['title']));
$newsdate = strip_tags(htmlspecialchars($_POST['newsdate']));
$status = strip_tags(htmlspecialchars($_POST['status']));
$details = strip_tags(htmlspecialchars($_POST['details']));
$photo = strip_tags(htmlspecialchars($_FILES['photo']['name']));
echo"<script>console.log('ifoto ".$photo."');</script>";
    if(!empty($photo)){
      $ext = pathinfo($photo, PATHINFO_EXTENSION);
      $new_photoname = 'News_'.rand(100, 1000).'.'.$ext;
      move_uploaded_file($_FILES['photo']['tmp_name'], '../../img/'.$new_photoname);

      $stmt = $db->prepare("SELECT *, COUNT(*) AS numrows FROM news WHERE title=:title");
      $stmt->execute(['title'=>$title]);
      $row = $stmt->fetch();

      if($row['numrows'] > 0){
        $_SESSION['error'] = 'Information already exist';
      }
      else{
        try{
          $stmt = $db->prepare("INSERT INTO news(title, newsdate, details, status, photo) 
          VALUES (:title, :newsdate, :details, :status, :photo)");
          $stmt->execute(array(
            'title'=>$title,
            'newsdate'=>$newsdate,'details'=>$details,
            'status'=>$status,'photo'=>$new_photoname
          ));
          $_SESSION['success'] = 'News Published successfully';
          header('Location: ../news.php');
        }
        catch(PDOException $e){
          $_SESSION['error'] = $e->getMessage();
          // http_response_code(500);
        }
      }
    }else if(!empty($url)){
      $stmt = $db->prepare("SELECT *, COUNT(*) AS numrows FROM news WHERE details=:details");
      $stmt->execute(['details'=>$details]);
      $row = $stmt->fetch();

      if($row['numrows'] > 0){
        $_SESSION['error'] = 'Information already exist';
      }
      else{
        try{
          $stmt = $db->prepare("INSERT INTO news(title, newsdate, details, status, url) 
          VALUES (:title, :newsdate, :details, :status, :url)");
          $stmt->execute(array(
            'title'=>$title,
            'newsdate'=>$newsdate,'details'=>$details,
            'status'=>$status,'url'=>$url
          ));
          $_SESSION['success'] = 'News Published successfully';
          header('Location: ../news.php');
        }
        catch(PDOException $e){
          $_SESSION['error'] = $e->getMessage();
          // http_response_code(500);
        }
      }
    }else {
      $_SESSION['error'] = 'Important Fields are not filled. Fill URL or Photo Field';
      header('Location: ../news.php');
    }
}else if(isset($_POST['updatePic'])){
  // News Image
  $filename1 = $_FILES['photo']['name'];
  $newsid = $_POST['newsid'];
  
  if(!empty($filename1)){
    
      // Before updating news photo delete the first saved if it exist
      $delPic = $db->prepare("SELECT *, COUNT(*) AS numrows FROM news WHERE newsid=:newsid");
      $delPic->execute(['newsid'=>$newsid]);
      $row = $delPic->fetch();

      if($row['numrows'] > 0 && !empty($row['photo'])){
        $fileToDelete = '../../img/'.$row['photo'];
        unlink($fileToDelete);
      }
    
    $ext = pathinfo($filename1, PATHINFO_EXTENSION);
    $new_filename1 = 'News_'.$newsid.rand(1000, 10000).'.'.$ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], '../../img/'.$new_filename1);

    try{
      $stmt = $db->prepare("UPDATE news SET photo=:photo WHERE newsid=:newsid");
      $stmt->execute(['photo'=>$new_filename1, 'newsid'=>$newsid]);
      $_SESSION['success'] = ' News photo updated !';
      header('Location: ../news.php');

    }
    catch(PDOException $e){
      $_SESSION['error'] = $e->getMessage();
      header('Location: ../news.php');
    }
  }
  else{
    $new_filename1 = '';
  }

  
}else if(isset($_POST['updateNews'])){
  $newsid = strip_tags(htmlspecialchars($_POST['newsid']));
  $url = strip_tags(htmlspecialchars($_POST['url']));
  $title = strip_tags(htmlspecialchars($_POST['title']));
  $status = strip_tags(htmlspecialchars($_POST['status']));
  $newsdate = strip_tags(htmlspecialchars($_POST['newsdate']));
  $details = strip_tags(htmlspecialchars($_POST['details']));
  
  if(!empty($newsid)){
    
    try{
      $stmt = $db->prepare("UPDATE news SET url=:url, title=:title, status=:status, 
      newsdate=:newsdate, details=:details  
      WHERE newsid=:newsid");
      $stmt->execute(array(
        'url'=>$url, 'title'=>$title,
        'status'=>$status, 'newsdate'=>$newsdate,
        'details'=>$details, 'newsid'=>$newsid
      ));
      $_SESSION['success'] = ' News Information updated !';
      header('Location: ../news.php');

    }
    catch(PDOException $e){
      $_SESSION['error'] = $e->getMessage();
      header('Location: ../news.php');
    }
  }
  else{
    $_SESSION['error'] = 'News Information update Failed !';
    header('Location: ../news.php');
  }

  
}else if(isset($_POST['deleteNews'])){
  // News Image
  $newsid = $_POST['newsid'];
  
  if(!empty($newsid)){
    
      // Before deleting news delete its saved photo if it exist
      $delPic = $db->prepare("SELECT *, COUNT(*) AS numrows FROM news WHERE newsid=:newsid");
      $delPic->execute(['newsid'=>$newsid]);
      $row = $delPic->fetch();

      if($row['numrows'] > 0 && !empty($row['photo'])){
        $fileToDelete = '../../img/'.$row['photo'];
        unlink($fileToDelete);
      }
    

    try{
      $stmt = $db->prepare("DELETE FROM news WHERE newsid=:newsid");
      $stmt->execute(['newsid'=>$newsid]);
      $_SESSION['success'] = ' News Information Deleted !';
      header('Location: ../news.php');

    }
    catch(PDOException $e){
      $_SESSION['error'] = $e->getMessage();
      header('Location: ../news.php');
    }
  }
  else{
    $_SESSION['error'] = ' News Information not Found !';
    header('Location: ../news.php');
  }

  
}

?>
