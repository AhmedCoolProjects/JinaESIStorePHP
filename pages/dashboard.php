<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- css file -->
    <link rel="stylesheet" href="../styles/dashboard.css">
    <title>Jina ESI Store</title>
</head>

<body>
    <!-- nav bar -->
    <nav style="position: sticky;top:0;z-index:10" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./dashboard.php">Jina ESI Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form style="flex: 1" class="form-inline my-2 my-lg-0">
                <input style="flex: 1" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button style="align-items:center;justify-content:center;display:flex;flex-direction:row" class="btn btn-outline-success my-2 my-sm-0 margin_btns" type="submit">
                    <span class="material-icons">
                        search
                    </span>
                </button>
            </form>
            <div class="right_container">

                <div class="nav-item margin_btns">
                    <button style="border-radius: 80px;padding: 8px !important;width:40px;height:40px" type="button" class="btn btn-primary">
                        <span class="material-icons">
                            shopping_cart
                        </span>
                    </button>
                </div>
                <div class="nav_right">
                    <div class="nav-item dropdown">
                        <?php
                        if (!$_GET) {
                        ?>
                            <a style="align-items:center;display:flex;flex-direction:row;justify-content:center" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                                <span class="material-icons">
                                    face
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./login.php">Login</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <a style="align-items:center;display:flex;flex-direction:row;justify-content:center" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_GET['user']; ?>
                                <span class="material-icons">
                                    face
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./profile.php">Profile</a>
                                <a class="dropdown-item" href="./settings.php">Settings</a>
                                <a class="dropdown-item" href="./login.php">Logout</a>
                            </div>
                        <?php
                        }
                        ?>
                        </li>
                    </div>
                </div>
            </div>

        </div>

    </nav>
    <!-- end nav bar -->
    <!-- products grid -->
    <?php
    include "../backend/products.php";
    ?>
    <div class="container" style="margin-top:8px">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
            <?php foreach ($data as $key => $item) { ?>
                <div class="col" style="padding:12px">
                    <div class="card " style="cursor: pointer;padding:0">
                        <img src=<?php echo $item['image-url']; ?> class="card-img-top hover_image" alt="" />
                        <div class="product_info">

                            <h5 class='product_title'><?php echo $item["title"]; ?></h5>

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