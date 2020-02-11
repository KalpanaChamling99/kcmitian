<?php 
    $page = "blog";
    include("inc/header.php"); 
?> 

<div class="kcmitian-blog-section kcmitian-post-section">
        <div class="container">
            <div class="kcmitian-blog-list">
                <div class="kcmitian-row">
                    <?php for($i=0;$i<3;$i++){ ?>
                        <div class="kcmitian-col-4">
                            <div class="kcmitian-blog-post kcmitian-post">
                                <div class="kcmitian-image-section kcmitian-d-flex kcmitian-image-300 kcmitian-bg-image kcmitian-image-overlay" style="background-image:url(uploads/image1.jpg)">
                                    <div class="kcmitian-post-desc kcmitian-w-100">
                                        <ul class="kcmitian-category kcmitian-d-flex">
                                            <li>Technology</li>
                                        </ul>
                                        <h3 class="kcmitian-post-title"><a href="#" class="kcmitian-white-text kcmitian-hover-text-color">Sophia,The Human RObot</a></h3>
                                        <div class="kcmitian-meta-tag kcmitian-d-flex">
                                            <span class="kcmitian-icon"><i class="ion ion-md-person"></i></span>
                                            <span class="kcmitian-caption">Kalpana Rai</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div><!--/kcmitian blog-->
                        </div><!--/col-->
                    <?php } ?>
                </div><!--/kcmitian-row-->
            </div><!--/kcmitian-blog-list-->
        </div><!--/container-->
    </div><!--/kcmitian-blog-section-->
<?php include("inc/footer.php"); ?>