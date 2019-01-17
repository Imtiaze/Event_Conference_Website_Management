<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'connection.php';


if(isset($_POST['submit'])){
      $target = "images/slider/".basename($_FILES['slider']['name']);

      $title  = $_POST['title'];
      $description  = $_POST['description'];
      $slider = $_FILES['slider']['name'];

      $query = "INSERT INTO slider VALUES('','$title','$description','$slider')";

      mysqli_query($link, $query);

      move_uploaded_file($_FILES['slider']['tmp_name'], $target);

}


?>

<div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
            <li class="breadcrumb-item">
                  <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Change Slider</li>
      </ol>

      <!-- Page Content -->
      <hr>

      <div class="card border-info">
            <div class="card-header bg-info">
                  <h2 style="color:white; font-weight:bold;">Slider</h2>
            </div>
            <div class="card-body border-info">
                  <div style="max-width:600px; margin: 0 auto;">
                        <form class="" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                    <input type="text" name="title" id="title" value="" placeholder="Enter tile"  class="form-control" required>
                              </div>
                              <div class="form-group">
                                    <textarea name="description" placeholder="Enter a Short description" class="form-control" rows="3" cols="80"></textarea>

                              </div>
                              <table class="table table-bordered">
                                    <tr>
                                          <label for="click">Insert an Image</label>
                                          <td>
                                                <input type="file" name="slider" id="click" required>
                                          </td>
                                    </tr>
                              </table>
                              <input type="submit" name="submit" value="Update
                              Slider" class="btn btn-primary">
                        </form>
                  </div>
            </div>
            <!-- <div class="card-footer bg-info border-info">

            </div> -->
      </div>

</div>


<?php include 'inc/footer.php'; ?>
