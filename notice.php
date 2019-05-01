<?php 
    $page = "notice";
    include("inc/header.php"); 
?> 
    <div class="evit-notice-list">
        <div class="container">
            <?php for($i=0;$i<3;$i++){ ?>
            <div class="evit-notice">
                <div class="row">
                    <div class="col-2 evit-notice-image" style="background-image:url(uploads/notice-img.png)">
                    <!-- <img class="img-fluid" src="" alt=""> -->
                            </div>
                    <div class="col-10">
                        <div class="evit-desc">
                            <h3>3rd and 7th semester makeup exam result published</h3>
                            <p>Download ledger from resources</p>
                            <div class="evit-day">
                                2 days ago
                            </div>
                            <div class="evit-share-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
<?php include("inc/footer.php"); ?>
