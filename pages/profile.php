<?php include("./header.php"); ?>

<head>
    <!-- css file -->
    <link rel="stylesheet" href="../styles/profile.css">
    <title>Profile</title>
</head>

<body>
    <?php include("./navbar.php"); ?>
    <div class="container profile_container">
        <div class="row">
            <div class="col-lg-4">
                <div style="height: 350px;" class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="../assets/yanni.png" alt="me" class="rounded-circle p-1 bg-primary" width="160" style="object-fit: cover;" height="160">
                            <div class="mt-3">
                                <h4><?php echo $_SESSION['user_info']['Prenom'] . " " . $_SESSION['user_info']['Nom']; ?></h4>
                                <p class="text-secondary mb-1">Data Science Student at ESI</p>
                                <p class="text-muted font-size-sm">Laayoune, Morocco</p>
                                <button class="btn btn-outline-primary">Change Image</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div style="height: 350px;" class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">First Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value=<?php echo $_SESSION['user_info']['Prenom']; ?>>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Last Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value=<?php echo $_SESSION['user_info']['Nom']; ?>>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value=<?php echo $_SESSION['user_info']['Email']; ?>>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="(212) 816-9029">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">School</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="ESI">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3 col-sm-3 text-secondary">
                                <input type="button" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>