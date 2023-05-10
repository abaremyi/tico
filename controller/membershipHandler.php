<?php
include("../config/db.php");

// if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['title']) || empty($_POST['firstname']) || 
// empty($_POST['lastname']) || empty($_POST['dob']) || empty($_POST['phone']) || empty($_POST['address']) ||
// empty($_POST['biography']) || empty($_POST['ticoWhereBy']) || empty($_POST['whyTicoMember']) ) {
//   http_response_code(500);
//   exit();
// }

$email = strip_tags(htmlspecialchars($_POST['email']));
$title = strip_tags(htmlspecialchars($_POST['title']));
$firstname = strip_tags(htmlspecialchars($_POST['firstname']));
$lastname = strip_tags(htmlspecialchars($_POST['lastname']));
$dob = strip_tags(htmlspecialchars($_POST['dob']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$address = strip_tags(htmlspecialchars($_POST['address']));
$biography = strip_tags(htmlspecialchars($_POST['biography']));
$ticoWhereBy = strip_tags(htmlspecialchars($_POST['ticoWhereBy']));
$whyTicoMember = strip_tags(htmlspecialchars($_POST['whyTicoMember']));
$photo = $_FILES['photo']['name'];
$status = 'Pending';
echo"<script>console.log('ifoto ".$photo.");</script>";
    if(!empty($photo)){
      $ext = pathinfo($photo, PATHINFO_EXTENSION);
      $new_photoname = 'MB_'.rand(100, 1000).'.'.$ext;
      move_uploaded_file($_FILES['photo']['tmp_name'], '../img/'.$new_photoname);

      $stmt = $db->prepare("SELECT *, COUNT(*) AS numrows FROM members WHERE email=:email");
      $stmt->execute(['email'=>$email]);
      $row = $stmt->fetch();

      if($row['numrows'] > 0){
        $_SESSION['error'] = 'Information already exist';
      }
      else{
        try{
          $stmt = $db->prepare("INSERT INTO members(email, firstname, lastname, phone, title, dob, address, biography, ticoWhereBy, whyTicoMember, photo, status) 
          VALUES (:email, :firstname, :lastname, :phone, :title, :dob, :address, :biography, :ticoWhereBy, :whyTicoMember, :photo, :status)");
          $stmt->execute(array(
            'email'=>$email,'firstname'=>$firstname,
            'lastname'=>$lastname,'phone'=>$phone,
            'title'=>$title,'dob'=>$dob,'address'=>$address,
            'biography'=>$biography,'ticoWhereBy'=>$ticoWhereBy,
            'whyTicoMember'=>$whyTicoMember,'photo'=>$new_photoname,
            'status'=>$status
          ));
          $_SESSION['success'] = 'Application Sent successfully';
        }
        catch(PDOException $e){
          $_SESSION['error'] = $e->getMessage();
          // http_response_code(500);
        }
      }
    }

?>
