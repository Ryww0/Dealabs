<?php include('./partials/header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <?php
            for ($i = 0;
                 $i < 20;
                 $i++) {
                include('./partials/cards/deal-card.php');
            }
            ?>
        </div>
        <div class="col-4">
            pub
        </div>
    </div>

</div>


<?php include('./partials/footer.php') ?>
