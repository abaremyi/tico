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
  $sql = "SELECT * FROM applications WHERE title!= '' order by addedDate desc  LIMIT $offset, $limit";
  $applications = $db->prepare($sql);
  $applications->execute();
  $is_Epmty = $applications->rowCount();

	$output = "";

	if (!empty($is_Epmty)) {
  while($res = $applications->fetch()){ 
    // convert date
    $evdate = strtotime($res['addedDate']);
    $dateDetails= date("d/M/Y", $evdate);
    $ifotosrc='';
    if($res['photo']){
      $ifotosrc='img/'.$res['photo'];
    } elseif ($res['url']) {
      $ifotosrc=$res['url'];
    }else {
      $ifotosrc='img/applicationIllustration.jpg';
    }
      $title = $res['title'];
      $applid = $res['applid'];
      $status = $res['status'];
      $googleForm = ($res['googleForm'])? $res['googleForm'] :'#';
      $category = $res['category'];
	$output.="<!-- Start Application Data -->
          <div class='col-lg-4 col-md-6 mb-4'>
            <div class='rounded overflow-hidden mb-2'>
                <img class='img-fluid' src='{$ifotosrc}' alt='ApplicationIllustrationImg'>
                <div class='bg-secondary p-4'>
                    <div class='d-flex justify-content-between mb-3'>
                        <small class='m-0'><i class='fa fa-shapes text-primary mr-2'></i>{$category}</small>
                        <small class='m-0'><i class='far fa-calendar text-primary mr-2'></i>{$dateDetails}</small>
                    </div>
                    <a class='h5' href='#'>{$title}</a>
                    <div class='border-top mt-4 pt-4'>
                        <div class='d-flex justify-content-between'>
                            <h6 class='m-0'>
                              <div class='btn-group btn-group-sm mb-4' role='group' aria-label='Small button group'>
                              <a href='{$googleForm}' class='btn btn-pill btn-sm btn-primary py-2 px-4 ml-auto  d-lg-block'>Apply</a>
                              <a href='applicationDetails.php?event={$applid}' class='btn btn-pill btn-sm btn-outline-primary py-2 px-4 ml-auto  d-lg-block'>More</a>
                              </div>
                            </h6>
                            <h6 class='m-0 text-success'><small> {$status}</small></h6>
                        </div>
                    </div>
                </div>
            </div>
          </div>
              <!-- End Application Data -->";
	} 
	

	$sql = $db->prepare("SELECT * FROM applications WHERE title !=''");

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