<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'connection.php';

if(isset($_POST['submit'])){

    $eventTitle          = $_POST['e_title'];
    $eventDescription    = $_POST['e_description'];
    $eventTopic          = $_POST['e_topic'];
    $topicDescription    = $_POST['t_description'];
    $eventSpeaker        = $_POST['e_speaker'];
    $speakerDescription  = $_POST['s_description'];
    $eventLanguage       = $_POST['e_language'];
    $languageDescription = $_POST['l_description'];

    $query = "INSERT INTO event VALUES('','$eventTitle','$eventDescription','$eventTopic','$topicDescription','$eventSpeaker','$speakerDescription','$eventLanguage','$languageDescription')";
    mysqli_query($link, $query);
}


?>




<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Change Event</li>
    </ol>

    <!-- Page Content -->
    <hr>
    <div class="card border-info">
        <div class="card-header bg-info">
            <h2 style="color:white; font-weight:bold;">Event</h2>
        </div>
        <div class="card-body border-info">
            <div style="max-width:600px; margin: 0 auto;">
                <form class="" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="e_title" value="" placeholder="Event Title"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <textarea name="e_description" placeholder="Event description" class="form-control" rows="2" cols="80"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="e_topic" value="" placeholder="Event Topic"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="t_description" value="" placeholder="Topic Description"  class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="e_speaker" value="" placeholder="Event Speaker"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="s_description" value="" placeholder="Speaker Description"  class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="e_language" value="" placeholder="Event Language"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="l_description" value="" placeholder="Language Description"  class="form-control" required>
                    </div>

                    <input type="submit" name="submit" value="Update
                    Event" class="btn btn-primary">
                </form>
            </div>
        </div>
        <!-- <div class="card-footer bg-info border-info">

    </div> -->
</div>

</div>


<?php include 'inc/footer.php'; ?>
