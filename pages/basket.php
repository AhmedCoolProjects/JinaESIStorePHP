<?php include("./header.php"); ?>

<head>
    <!-- css file -->
    <link rel="stylesheet" href="../styles/basket.css">
    <title>Basket</title>
</head>

<body>
    <?php include("./navbar.php"); ?>
    <div style="height: 100%;padding-top:48px;" class="container">
        <div class="row">
            <div class="col-lg-5">
                <div style="margin-bottom: 24px;" class="card">
                    <div class="card-body">
                        <div class="small_info">
                            <p class="text-secondary mb-1"> Products in your basket</p><strong>2 </strong>
                        </div>
                        <div class="small_info">
                            <p class="text-muted font-size-sm">TOTAL</p><strong>200 DHs </strong>
                        </div>
                        <div class="small_btn_pay"><button style="padding: 4px 12px ;align-self:flex-end" class="btn btn-outline-success my-2 my-sm-0">Pay</button></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 container_products_basket">
                <?php
                for ($i = 0; $i < 4; $i++) {
                ?> <div class="card card_product_basket">
                        <img class="product_basket_image" src="https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/72/405983/1.jpg?5851" alt="product_image">
                        <div class="product_basker_info">

                            <h4>title</h4>
                            <strong>price</strong>
                            <div class="add_or_delete_product">

                                <input type="number" name="" id="">


                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</body>