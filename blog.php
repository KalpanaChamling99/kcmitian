<?php 
    $page = "blog";
    include("inc/header.php"); 
?> 
<div class="kcmitian-blog-list">
    <div class="container">
        <div class="kcmitian-row">
            <?php for($i=0;$i<6;$i++){ ?>
                <div class="kcmitian-col-4">
                    <div class="kcmitian-post kcmitian-blog">
                        <a href="#"></a>
                        <div class="kcmitian-image-section">
                            <img src="uploads/notice-img.png" alt="" class="img-fluid"/>
                        </div>
                        <div class="kcmitian-post-desc">
                            <h3 class="kcmitian-post-title">Sophia,The Human RObot</h3>
                            <div class="kcmitian-author kcmitian-text-gray-color">
                                Sumit Chhetri
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include("inc/footer.php"); ?>