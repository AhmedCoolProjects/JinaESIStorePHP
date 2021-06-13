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
                        <img id=<?php echo "img_id_" . $item['id']; ?> src=<?php echo $item['image-url']; ?> class="card-img-top hover_image" alt="" />
                        <div class="product_info">
                            <h5 style="text-align:start;" id=<?php echo "title_id_" . $item['id']; ?> class='product_title'><?php echo $item["title"]; ?></h5>
                            <div class="product_info_right">
                                <strong id=<?php echo "price_id_" . $item['id']; ?>><?php echo $item['price']; ?></strong>
                                <span onclick="openProductModal($(this).attr('id'))" id=<?php echo $item['id']; ?> class="material-icons">
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
    <!-- Modal -->
    <div class="modal fade " id="product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_product_title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding:0;display:flex;flex-direction:row;align-items:center;justify-content:space-between;position:relative">
                    <img id="modal_product_image" src="" alt="product_image" style="width: 400px;object-fit:contain" />
                    <div class="modal_product_info">
                        <strong id="modal_product_price" style="align-self: flex-start;"></strong>
                        <form method="POST" action="../backend/additem.php">
                            <input id="modal_product_id_" name="add_item_to_basket_id" type="hidden">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0" style="align-self: flex-end;">Add to basket</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>