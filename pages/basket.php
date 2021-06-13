<?php include("./header.php"); ?>
<?php include("./backend/products.php"); ?>

<head>
    <!-- css file -->
    <link rel="stylesheet" href="./styles/basket.css">
    <title>Basket</title>
</head>

<body>
    <?php include("./navbar.php"); ?>
    <div style="height: 100%;padding-top:48px;" class="container">
        <?php
        if (!isset($_SESSION['products'])) {
            echo 'empty';
        } else {
            if (count($_SESSION['products']) == 0) {
                echo "empty";
            } else {
                $total_price = 0;
                foreach ($_SESSION['products'] as $key => $item) {
                    $total_price = $total_price + floatval(substr($data[$item]['price'], 0, -4));
                }
            }


        ?>
            <div class="row">
                <div class="col-lg-5">
                    <div style="margin-bottom: 24px;" class="card">
                        <div class="card-body">
                            <div class="small_info">
                                <p class="text-secondary mb-1"> Products in your basket</p><strong>
                                    <?php
                                    echo count($_SESSION['products']);
                                    ?>
                                </strong>
                            </div>
                            <div class="small_info">
                                <p class="text-muted font-size-sm">TOTAL</p><strong><?php echo $total_price; ?> DHs </strong>
                            </div>
                            <div class="small_btn_pay"><button style="padding: 4px 12px ;align-self:flex-end" class="btn btn-outline-success my-2 my-sm-0">Pay</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 container_products_basket">
                    <?php
                    foreach ($_SESSION['products'] as $key => $item) {
                        $my_product = $data[$item];
                    ?> <div class="card card_product_basket">
                            <img class="product_basket_image" src=<?php echo $my_product['image-url']; ?> alt="product_image">
                            <div class="product_basker_info">

                                <h4>
                                    <?php
                                    echo $my_product['title']; ?>
                                </h4>
                                <strong><?php echo $my_product['price']; ?></strong>
                                <div class="add_or_delete_product">
                                    <span class="material-icons">
                                        indeterminate_check_box
                                    </span>
                                    <div id='item_count_<?php echo $item; ?>'>1</div>
                                    <span class="material-icons">
                                        add_box
                                    </span>
                                    <!-- <span onclick="subLessProduct(<?php //echo $item; 
                                                                        ?>)" class="material-icons">
                                        indeterminate_check_box
                                    </span>
                                    <div id='item_count_<?php //echo $item; 
                                                        ?>'>1</div>
                                    <span onclick="addMoreProduct(<?php //echo $item; 
                                                                    ?>)" class="material-icons">
                                        add_box
                                    </span> -->
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>


        <?php
        }

        ?>
    </div>
    <script>
        function addMoreProduct(item_id) {
            var nbr = $(`#item_count_${item_id}`).text();
            var nbr = parseInt(nbr) + 1;
            $(`#item_count_${item_id}`).text(nbr);
        }

        function subLessProduct(item_id) {
            var nbr = $(`#item_count_${item_id}`).text();
            if (parseInt(nbr) <= 1) {
                $.ajax({
                    type: "POST",
                    url: "./backend/addsubitem.php",
                    data: {
                        item_id: item_id,

                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                })
                location.reload();
            } else {
                var nbr = parseInt(nbr) - 1;
                $(`#item_count_${item_id}`).text(nbr);
            }

        }
    </script>
</body>