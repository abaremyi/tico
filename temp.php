<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<!-- upload multiple files -->
Here we have used DropzoneJS jQuery plugin to handle drag and drop file upload. We have also used PHP to upload the files on server and insert file details in MySQL database table.

So let’s start the coding. Before begin, take a look at major files used for this tutorial and demo.


index.php
file_upload.php
dropzone.js
dropzone.css
Step1: Create Database Table
In this tutorial we will insert uploaded files details into MySQL Database. So we need to create MySQL database table to store files details. Here we will create uploads table to store uploaded files details.

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `upload_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
Step2: Create Database Connection
After creating MySQL database table, we will create db_connect.php file to make connection with MySQL database.

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demos";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
Step3: Include Dropzone Plugin Files
As we have used Dropzone jQuery plugin for drag and drop file upload, so we need to include plugin files.

<link rel="stylesheet" type="text/css" href="css/dropzone.css" />
<script type="text/javascript" src="js/dropzone.js"></script>
Step4: Create File Upload Form HTML
Now in index.php file, we will create file upload Form HTML. We need only form opening and closing tags without any form elements. We just need action and class attributes in form tag. The action attribute used to perform server-side file upload. The dropzone class is identifier of the Dropzone library.

<div class="container">
	<h2>Example: Drag and Drop File Upload using jQuery and PHP</h2>	
	<div class="file_upload">
		<form action="file_upload.php" class="dropzone">
			<div class="dz-message needsclick">
				<strong>Drop files here or click to upload.</strong><br />
				<span class="note needsclick">(This is just a demo. The selected files are <strong>not</strong> actually uploaded.)</span>
			</div>
		</form>		
	</div>
</div>
Step5: Upload Files on Server
Finally in file_upload.php file, we will handle file upload on server and insert file details into MySQL database table.


<?php
include_once("db_connect.php");
if(!empty($_FILES)){     
    $upload_dir = "uploads/";
    $fileName = $_FILES['file']['name'];
    $uploaded_file = $upload_dir.$fileName;    
    if(move_uploaded_file($_FILES['file']['tmp_name'],$uploaded_file)){
        //insert file information into db table
		$mysql_insert = "INSERT INTO uploads (file_name, upload_time)VALUES('".$fileName."','".date("Y-m-d H:i:s")."')";
		mysqli_query($conn, $mysql_insert) or die("database error:". mysqli_error($conn));
    }    
}
?>