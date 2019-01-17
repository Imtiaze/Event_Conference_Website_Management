<?php
include 'inc/header.php';
include 'inc/sidebar.php';

include 'connection.php';

if(isset($_POST['update'])){
  $target = "images/logo/".basename($_FILES['logo']['name']);

  $logo = $_FILES['logo']['name'];
  $id = 1;
  $query = "UPDATE logo SET logo='$logo' WHERE id='$id'";
  mysqli_query($link, $query);

  if(move_uploaded_file($_FILES['logo']['tmp_name'], $target)){
    echo 'Logo Changed sucessfully';
  } else{
    echo "Problem with the file";
  }
}

?>





<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Change Logo</li>
  </ol>

  <!-- Page Content -->

  <hr>

  <div class="card border-info">
    <div class="card-header bg-info">
      <h2 style="color:white; font-weight:bold;">Logo</h2>
    </div>
    <div class="card-body">
      <div style="max-width:600px; margin: 0 auto;">
        <form class="" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <table class="table table-bordered">
              <tr>
                <label for="click">Select a Logo</label>
                <td>
                  <input type="file" name="logo" id="click" required>
                </td>
              </tr>
            </table>

          </div>

          <input type="submit" name="update" value="Update Logo" class="btn btn-primary">
        </form>
      </div>


    </div>

    <!-- <div class="card-footer bg-info text-muted">

  </div> -->
  </div>
</div>




<!-- <div class="card col-lg-8">
<div class="card-header bg-info col-lg-12">
Featured
</div>
<div class="card-body">
<h5 class="card-title">Special title treatment</h5>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#!" class="btn btn-primary">Go somewhere</a>
</div>
</div> -->

<!-- <div class="panel panel-success">
<div class="panel-heading">
<h2>User<strong> Login</strong></h2>
</div>

<div class="panel-body">
<div style="max-width:600px; margin: 0 auto;">
<form class="" action="" method="post">
<div class="form-group">
<label for="email">Email</label>
<input type="text" name="" id="email" value="" placeholder="Email"  class="form-control" required>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" name="" id="password" value="" placeholder="Password" class="form-control" required>
</div>
<input type="submit" name="" value="Login" class="btn btn-success">
</form>
</div>
</div>
</div> -->












<!-- <div class="card">
<div class="card-header bg-info">
<h2 style="color:white; font-weight:bold;">Logo</h2>
</div>
<div class="card-body">
<div style="max-width:600px; margin: 0 auto;">
<form class="" action="" method="post">
<div class="form-group">
<label for="email">Email</label>
<input type="text" name="" id="email" value="" placeholder="Email"  class="form-control" required>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" name="" id="password" value="" placeholder="Password" class="form-control" required>
</div>
<input type="submit" name="" value="Upload Photo" class="btn btn-primary">
</form>
</div> -->








<?php include 'inc/footer.php'; ?>
