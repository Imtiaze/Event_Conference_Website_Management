<?php include 'connection.php'; ?>
<div class="container">
    <div class="row">
        <div id="speaker-detail" class="col-lg-10 col-lg-offset-1">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>

                <?php
                $id = $_GET['id'];
                $speakerImageQuery = "SELECT * FROM speakers WHERE id='$id'";
                $speakerImageResult = mysqli_query($link, $speakerImageQuery);

                while($speakerImageRow = mysqli_fetch_array($speakerImageResult)){
                    ?>


                    <div class="col-md-5 col-lg-5 no-padding">
                    <img class="img-responsive" src="<?php echo "../admin/images/speakers/".$speakerImageRow['speaker_image']; ?>" alt="" />
                    </div>
                    <?php
                }

                ?>



                <div class="col-md-7 col-lg-7">

                    <?php
                    $id = $_GET['id'];

                    $speakerDetailsQuery = "SELECT * FROM speakers WHERE id='$id'";
                    $speakerDetailsResult = mysqli_query($link, $speakerDetailsQuery);

                    while($speakerDetailsRow = mysqli_fetch_array($speakerDetailsResult)){
                        ?>

                        <h2><?php echo $speakerDetailsRow['speaker_firstname']." "; ?><span><?php echo $speakerDetailsRow['speaker_firstname']; ?></span></h2>
                        <p class="lead"><?php echo $speakerDetailsRow['speaker_designation']; ?> <strong><?php echo $speakerDetailsRow['speaker_company']; ?></strong></p>
                        <ul class="social list-inline list-unstyled">
                            <li><a href=""><i class="fa fa-2x fa-facebook-square"></i></a></li>
                            <li><a href=""><i class="fa fa-2x fa-twitter-square"></i></a></li>
                            <li><a href=""><i class="fa fa-2x fa-google-plus-square"></i></a></li>
                            <li><a href=""><i class="fa fa-2x fa-linkedin-square"></i></a></li>
                        </ul>

                        <div id="content">
                            <p><?php echo $speakerDetailsRow['speaker_description']; ?></p>

                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
