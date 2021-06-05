<head>
    <link rel="stylesheet" href="../styles/navbar.css">
</head>
<!-- nav bar -->
<nav style="position: sticky;top:0;z-index:10;box-shadow:.5px .5px 10px rgba(0,0,255,.4)" class="navbar navbar-expand-lg navbar-light bg-light">
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
                <a href="./basket.php">
                    <button style="border-radius: 80px;padding: 8px !important;width:40px;height:40px" type="button" class="btn btn-primary">
                        <span class="material-icons">
                            shopping_cart
                        </span>
                    </button></a>
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