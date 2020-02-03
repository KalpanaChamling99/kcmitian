<?php 
    $page = "notice";
    include("inc/header.php"); 
?> 
    <div class="kcmitian-notice-list">
        <div class="container">
            <?php for($i=0;$i<3;$i++){ ?>
            <div class="kcmitian-notice kcmitian-d-flex">
                <div class="kcmitian-image-section" style="background-image:url(uploads/notice-img.png)">
                </div>
                <div class="kcmitian-post-desc">
                    <h3 class="kcmitian-post-title">3rd and 7th semester makeup exam result published</h3>
                    <p class="kcmitian-text-gray-color">Download ledger from resources</p>
                    <div class="kcmitian-day kcmitian-text-secondary-color">
                        2 days ago
                    </div>
                    <div class="kcmitian-share-image">
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
<?php include("inc/footer.php"); ?>
