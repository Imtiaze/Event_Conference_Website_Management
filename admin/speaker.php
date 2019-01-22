<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'connection.php';

if(isset($_POST['submit'])){
      $tm = md5(time());
      $target = "images/speakers/".$tm.basename($_FILES['s_image']['name']);

      $speaker            = $_POST['heading'];
      $description        = $_POST['description'];
      $speakerFirstname   = $_POST['s_firstname'];
      $speakerLastname    = $_POST['s_lastname'];
      $speakerImage       = $tm.$_FILES['s_image']['name'];
      $speakerDesignation   = $_POST['s_designation'];
      $speakerCompany     = $_POST['s_company'];
      $speakerDescription = $_POST['s_description'];

      $query = "INSERT INTO speakers VALUES('','$speaker','$description','$speakerFirstname','$speakerLastname','$speakerImage','$speakerDesignation','$speakerCompany','$speakerDescription')";
      mysqli_query($link, $query);
      move_uploaded_file($_FILES['s_image']['tmp_name'], $target);

}


?>


<div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
            <li class="breadcrumb-item">
                  <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Speakers</li>
      </ol>

      <!-- Page Content -->

      <hr>

      <div class="card border-info">
            <div class="card-header bg-info">
                  <h2 style="color:white; font-weight:bold;">Speakers</h2>
            </div>
            <div class="card-body">
                  <div style="max-width:600px; margin: 0 auto;">
                        <form class="" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                    <input type="text" name="heading" id="title" value="" placeholder="Speaker Heading"  class="form-control" required>
                              </div>
                              <div class="form-group">
                                    <textarea name="description" placeholder="Speaker Heading description" class="form-control" rows="2" cols="80"></textarea>
                              </div>
                              <div class="form-group">
                                    <input type="text" name="s_firstname" placeholder="Speaker firstname" class="form-control">
                              </div>
                              <div class="form-group">
                                    <input type="text" name="s_lastname" placeholder="Speaker lastname" class="form-control" >
                              </div>
                              <table class="table table-bordered">
                                    <tr>
                                          <label for="click">Select a image</label>
                                          <td>
                                                <input type="file" name="s_image" required>
                                          </td>
                                    </tr>
                              </table>
                              <div class="form-group">
                                    <input type="text" name="s_designation" placeholder="Speaker Designation"  class="form-control" required>
                              </div>
                              <div class="form-group">
                                    <input type="text" name="s_company" placeholder="Speaker Company"  class="form-control" required>
                              </div>
                              <div class="form-group">
                                    <input type="text" name="s_description" placeholder="Speaker Description"  class="form-control" required>
                              </div>
                              <input type="submit" name="submit" value="Insert Speaker" class="btn btn-primary">
                        </form>
                  </div>
            </div>
      </div>

      <!-- <div class="card-footer bg-info text-muted">

</div> -->
</div>


</div>


<?php include 'inc/footer.php'; ?>
