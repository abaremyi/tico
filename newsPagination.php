<?php

	// Connect database 

	include("config/db.php");

	$limit = 6;

	if (isset($_POST['page_no'])) {
	    $page_no = $_POST['page_no'];
	}else{
	    $page_no = 1;
	}

	$offset = ($page_no-1) * $limit;
  
  // statement to control pagination
	
  $sql = "SELECT * FROM news WHERE title!= '' order by addedDate desc  LIMIT $offset, $limit";
  $news = $db->prepare($sql);
  $news->execute();
  $is_Epmty = $news->rowCount();

	$output = "";

	if (!empty($is_Epmty)) {

	while ($res = $news->fetch()) {
   
      // convert date
      $newsdate = strtotime($res['newsdate']);
      $dateDetails= date("d/M/Y", $newsdate);
      $ifotosrc='';
      if($res['photo']){
        $ifotosrc='img/'.$res['photo'];
      } elseif ($res['url']) {
        $ifotosrc=$res['url'];
      }else {
        $ifotosrc='img/avatar-news.png';
      }
      $title = $res['title'];
      $newsid = $res['newsid'];
      $status = $res['status'];
	$output.="<!-- Start News Data -->
                <div class='col-lg-4 col-md-6 mb-4'>
                    <div class='rounded overflow-hidden mb-2'>
                        <img style='height:270px;width:100%' class='img-fluid' src='{$ifotosrc}' alt='avatar-news'>
                        <div class='bg-secondary p-4'>
                            <div class='d-flex justify-content-between mb-3'>
                                <!-- <small class='m-0'><i class='fa fa-shapes text-primary mr-2'></i></small> -->
                                <small class='m-0'><i class='far fa-calendar text-primary mr-2'></i>{$dateDetails} </small>
                            </div>
                            <a class='h5' href='#'>{$title}</a>
                            <div class='border-top mt-4 pt-4'>
                                <div class='d-flex justify-content-between'>
                                    <h6 class='m-0'><a href='newsSingle.php?news={$newsid}' class='btn btn-sm btn-info py-2 px-4 ml-auto  d-lg-block'>More</a></h6>
                                    <h6 class='m-0 text-success'><small>{$status} </small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- End News Data -->";
	} 
	

	$sql = $db->prepare("SELECT * FROM news WHERE title !=''");

	$sql->execute();

	$totalRecords = $sql->rowCount();

	$totalPage = ceil($totalRecords/$limit);

  $output.="<hr/><div class='col-lg-12 col-md-12 mb-4' style='border:solid 2px #f6f6fa;border-radius:20px;'>";
	$output.="<ul class='pagination justify-content-center' style='margin:20px 0px;'>";

	for ($i=1; $i <= $totalPage ; $i++) { 
	   if ($i == $page_no) {
		$active = "active";
	   }else{
		$active = "";
	   }

	    $output.="<li class='page-item $active'><a class='page-link' id='$i' href=''>$i</a></li>";
	}

	$output .= "</ul></div>";

	echo $output;

	}

?>