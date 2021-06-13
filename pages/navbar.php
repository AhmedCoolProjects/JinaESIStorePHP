<head>
    <link rel="stylesheet" href="../styles/navbar.css">
</head>
<!-- nav bar -->
<nav style="position: sticky;top:0;z-index:10;box-shadow:.5px .5px 10px rgba(0,0,255,.4)" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">Jina ESI Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form style="flex: 1" class="form-inline my-2 my-lg-0">
            <input onchange="" style="flex: 1" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button style="align-items:center;justify-content:center;display:flex;flex-direction:row" class="btn btn-outline-success my-2 my-sm-0 margin_btns" type="submit">
                <span class="material-icons">
                    search
                </span>
            </button>
        </form>
        <div class="right_container">

            <div class="nav-item margin_btns">
                <a href="./basket.php">
                    <button style="border-radius: 80px;padding:8px !important;position:relative;width:40px;height:40px" type="button" class="btn btn-primary">
                        <p style="background-color: red;color:yellow;position:absolute;top:-6px;border-radius:10px;right:-6px;padding:4px;align-items:center;justify-content:center;display:flex">
                            <?php
                            session_start();
                            if (!isset($_SESSION['products'])) {
                                echo '0';
                            } else {
                                echo count($_SESSION['products']);
                            } ?>
                        </p>
                        <span style="z-index:2;" class="material-icons">
                            shopping_cart
                        </span>
                    </button></a>
            </div>
            <div class="nav_right">
                <div class="nav-item dropdown">
                    <?php

                    if (!isset($_SESSION['user_info']) && empty($_SESSION['user_info'])) {
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
                            <?php echo $_SESSION['user_info']['Email']; ?>
                            <span class="material-icons">
                                face
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./profile.php">Profile</a>
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