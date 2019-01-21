<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'connection.php';


if(isset($_POST['submit1'])){
      $title = $_POST['title'];
      $description = $_POST['description'];


      mysqli_query($link, "UPDATE sponsors_status SET title='$title', description='$description' WHERE id=1");
}

if(isset($_POST['submit2'])){
      $tm = md5(time());
      $target = "images/sponsors/".$tm.basename($_FILES['sponsors']['name']);

      $image = $tm.$_FILES['sponsors']['name'];


      mysqli_query($link, "INSERT INTO sponsors_photo VALUES('','$image')");

      move_uploaded_file($_FILES['sponsors']['tmp_name'], $target);
}


?>




<div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
            <li class="breadcrumb-item">
                  <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Update Sponsors</li>
      </ol>

      <!-- Page Content -->
      <hr>
      <div class="card border-info">
            <div class="card-header bg-info">
                  <h2 style="color:white; font-weight:bold;">Sponsors</h2>
            </div>
            <div class="card-body border-info">
                  <div style="max-width:600px; margin: 0 auto;">
                        <form class="" action="" method="post">
                              <div class="form-group">
                                    <input type="text" name="title" id="title" value="" placeholder="Enter tile"  class="form-control" required>
                              </div>
                              <div class="form-group">
                                    <textarea name="description" placeholder="Enter a Short description" class="form-control" rows="2" cols="80"></textarea>
                              </div>

                              <input type="submit" name="submit1" value="Update Sponsors Status" class="btn btn-primary form-group">
                        </form>

                        <form class="" action="" method="post" enctype="multipart/form-data">
                              <table class="table table-bordered">
                                    <tr>
                                          <label for="click">Insert an Image</label>
                                          <td>
                                                <input type="file" name="sponsors" id="click" required>
                                          </td>
                                    </tr>
                              </table>
                              <input type="submit" name="submit2" value="Insert Photo" class="btn btn-primary">
                        </form>
                  </div>
            </div>
            <!-- <div class="card-footer bg-info border-info">

      </div> -->
</div>

</div>


<?php include 'inc/footer.php'; ?>
