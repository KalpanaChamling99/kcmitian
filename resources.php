<?php 
    $page = "resources";
    include("inc/header.php"); 
?> 
<div class="kcmitian-resources-section kcmitian-post-section">
    <div class="container">
        <div class="kcmitian-resources-list">
            <div class="kcmitian-row">
                <?php for($i=0;$i<8;$i++){ ?>
                    <div class="kcmitian-col-4">
                        <div class="kcmitian-resources kcmitian-post kcmitian-box-shadow-sm">

                            <div class="kcmitian-post-desc">
                                <h3 class="kcmitian-post-title">WEb i project presentation sample in pdf</h3>
                                <div class="kcmitian-btn-section kcmitian-d-flex">
                                    <span class="kcmitian-bar"></span>
                                    <span class="kcmitian-icon-image kcmitian-bg-image"></span>
                                </div>
                                <div class="kcmitian-meta-tag">
                                    <span class="kcmitian-icon"><i class="ion ion-md-calendar"></i></span>
                                    <span class="kcmitian-caption">Mar 22,2019</span>
                                </div>

                            </div>
                        </div><!--/kcmitian-resoures-->
                    </div><!--/col--->
                <?php } ?>
            </div><!--/row-->
        </div><!--/kcmitian-resources-list-->
    </div><!--/container-->
</div><!--/kcmitian-resources-section-->
<?php include("inc/footer.php"); ?>