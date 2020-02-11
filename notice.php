<?php 
    $page = "notice";
    include("inc/header.php"); 
?> 
    <div class="kcmitian-notice-section kcmitian-post-section">
        <div class="container">
            <div class="kcmitian-notice-list">
                <div class="kcmitian-row">
                    <?php for($i=0;$i<3;$i++){ ?>
                        <div class="kcmitian-col-4">
                            <div class="kcmitian-notice kcmitian-post kcmitian-box-shadow-sm">

                                <div class="kcmitian-image-section kcmitian-image-250 kcmitian-bg-image" style="background-image:url(uploads/image1.jpg)">
                                </div>
                                <div class="kcmitian-post-desc">
                                    <h3 class="kcmitian-post-title">3rd and 7th semester makeup exam result published</h3>
                                    <p class="kcmitian-text-gray-color">Download ledger from resources</p>
                                    <div class="kcmitian-meta-tag kcmitian-d-flex kcmitian-text-secondary-color">
                                        <span class="kcmitian-caption">2 days ago</span>
                                        <span class="kcmitian-icon-image kcmitian-bg-image">
                                        </span>
                                    </div>
                                </div>

                            </div><!--/kcmitian notice-->
                        </div><!--/col-->
                    <?php } ?>
                </div><!--/kcmitian-row-->
            </div><!--/kcmitian-notice-list-->
        </div><!--/container-->
    </div><!--/kcmitian-notice-section-->
<?php include("inc/footer.php"); ?>
