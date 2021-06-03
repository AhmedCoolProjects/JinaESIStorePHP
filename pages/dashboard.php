<?php include("./header.php"); ?>

<head>
    <!-- css file -->
    <link rel="stylesheet" href="../styles/dashboard.css">
    <title>Jina ESI Store</title>
</head>

<body>
    <?php include("./navbar.php"); ?>
    <!-- carousel -->
    <?php include("./carousel.php"); ?>
    <!-- end carousel -->
    <!-- products grid -->
    <?php
    include "../backend/products.php";
    ?>
    <div class="container" style="margin-top:8px;text-align:center">
        <h3>New Arrival</h3>
        <hr>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
            <?php foreach ($data as $key => $item) { ?>
                <div class="col" style="padding:12px">
                    <div class="card " style="cursor: pointer;padding:0">
                        <img src=<?php echo $item['image-url']; ?> class="card-img-top hover_image" alt="" />
                        <div class="product_info">

                            <h5 style="text-align:start;" class='product_title'><?php echo $item["title"]; ?></h5>

                            <div class="product_info_right">
                                <strong><?php echo $item['price']; ?></strong>
                                <span class="material-icons">
                                    add_shopping_cart
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- end products grid -->
</body>

</html>