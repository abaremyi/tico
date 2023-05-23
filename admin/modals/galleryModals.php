  <!-- BEGIN View modal -->
  <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">View Photo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-3">
          <form id='newsForm' enctype="multipart/form-data" onsubmit="return checkFormInput(this.id)" name="newsForm" method="post" action="">
            <div class="form-row">
              <div class="form-group col-md-3">
              </div>
              <div class="form-group col-md-6" id="photoContainer">
                <!-- <label for="viewPhoto">News Photo</label> -->
                <img src="" id="viewPhoto"></img>
              </div>
              <div class="form-group col-md-3">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="viewName" class="text-primary">Photo Name</label>
                <p id='viewName'></p>
              </div>
              <div class="form-group col-md-3">
                <label for="viewDate" class="text-primary">Date Recorded</label>
                <p id="viewDate"></p>
              </div>
              <div class="form-group col-md-3">
                <label for="viewCategory" class="text-primary">Category</label>
                <p id='viewCategory'></p>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END View modal -->
 
 
 <!-- BEGIN Edit modal -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Gallery Photo!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-3">
          <form id='notepadForm' enctype="multipart/form-data" onsubmit="return checkFormInput(this.id)" name="notepadForm" method="post" action="actions/galleryManagement.php">
            <div class="form-row">
              <div class="form-group col-md-7">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="editTitle" placeholder="Edit Title...">
                <input type="hidden" name="gallerid" class="form-control" id="editGallerid" >
              </div>
              <div class="form-group col-md-5">
                <label for="editNewsdate">Date News Added</label>
                <input type="date" name="newsdate" class="form-control" id="editNewsdate">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-7">
                <label for="url">URL</label>
                <textarea type="text" name="url" class="form-control" id="editUrl" placeholder="Edit News Photo URL..."></textarea>
              </div>
              <div class="form-group col-md-5">
                <label for="reminder">News Status</label>
                <select name="status" class="form-control" id="editStatus">
                  <option value="">Change News Status</option>
                  <option value="New">New</option>
                  <option value="Recent">Recent</option>
                  <option value="Old">Old</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="details">Details</label>
              <Textarea name="details"  class="form-control" id="editDetails" placeholder="News Content Modifications ...."></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="updateNews" class="btn btn-success"><i class="fas fa-check"></i> Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END EDit modal -->
  <!-- BEGIN Delete modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Photo!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-3">
          <form id='notepadForm' enctype="multipart/form-data" onsubmit="return checkFormInput(this.id)" name="notepadForm" method="post" action="actions/galleryManagement.php">
            <div class="form-row">
              <div class="form-group col-md-12">
                <p for="photoName" id="deletePhotoName" class="text-primary text-center"></p>
                <input type="hidden" name="gallerid" class="form-control" id="deleteGallerid" >
              </div>
            </div>
            <div class="form-group">
              <p for="message" class="text-danger text-center">Message</p>
              <h5 class="text-center">If you press Confirm Delete, the Photo will be permenently Deleted!</h5>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="deletePhoto" class="btn btn-danger"><i class="fas fa-trash"></i> Confirm Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Delete  modal -->
  <!-- BEGIN Profile Picture modal -->
  <div class="modal fade" id="profilePictureModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Photo!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body m-3">
          <form id='profilePictureForm' enctype="multipart/form-data" onsubmit="return checkFormInput(this.id)" name="profilePictureForm" method="post" action="actions/galleryManagement.php">
            <div class="form-row profile-content text-center">
              <div class="profileBg col-md-12" src="" alt=""></div>
              <!-- Hidden id for picture Update style="background:skyblue;" -->
              <input type="hidden" name="gallerid" class="form-control" id="pictureId" >
              <!-- picture on the model , 1px -1px 0 #000, -1px 1px 0 white, 1px 1px 0 greenyellow -->
              <div class=" col-md-12 position-absolute " >
                <div class="picture-container" >
                  <div class="picture">
                      <img class="picture-src" id="EditWizardPicturePreview" title=""/>
                      <input type="file" id="editWizard-picture" name="photo">
                  </div>
                  <h6 style="text-shadow: -1px -1px 0 #000; color:white">Click in dark area to Choose a Picture</h6>
                </div> 
              </div>
            </div>
            <div class="form-group">
              <!-- <label for="content">Names</label> -->
              <input type='text' style="text-align: center;" name="name" class="form-control pictureNames" id="photoName" placeholder="Title...." readonly>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="updatePic" class="btn btn-success"><i class="fas fa-user"></i> Update Picture</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Profile Picture modal -->