<?php 
    $page = "blog";
    include("inc/header.php"); 
?> 
<div class="kcmitian-blog-list">
    <div class="container">
        <?php for($i=0;$i<6;$i++){ ?>
            <div class="kcmitian-blog">
                <a href="#">
                    <div class="row kcmitian-align">
                        <div class="col-2">
                            <div class="kcmitian-image">
                            <img src="uploads/notice-img.png" alt="" class="img-fluid"/>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="kcmitian-desc">
                                <h3>Sophia,The Human RObot</h3>
                                <div class="kcmitian-author">
                                    Sumit Chhetri
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php include("inc/footer.php"); ?>