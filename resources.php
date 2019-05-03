<?php 
    $page = "resources";
    include("inc/header.php"); 
?> 
<div class="kcmitian-resources-list">
    <div class="container">
        <?php for($i=0;$i<3;$i++){ ?>
            <div class="kcmitian-resources">
                <div class="kcmitian-desc">
                    <h3>WEb i project presentation sample in pdf</h3>
                    <div class="kcmitian-date">
                        Added: <span>Mar 22,2019</span>
                    </div>
                </div>
            
                <div class="kcmitian-download">
                </div>
            </div><!--/kcmitian-resoures-->
        <?php } ?>
    </div><!--/container-->
</div><!--/kcmitian-resources-list-->
<?php include("inc/footer.php"); ?>