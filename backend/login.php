<?php

$useremail = $_POST['useremail'];
$userpassword = $_POST['userpassword'];
$user_info = [
    "email" => $useremail,
    "password" => $userpassword
];

// read data file for users
$data_json_file = "./esi_student_data.json";
$json_data = file_get_contents($data_json_file);
$users_data = json_decode($json_data, true);
$users_data_small = [];
foreach ($users_data as $key => $user) {
    array_push($users_data_small, ["email" => $user['Email'], "password" => $user['password']]);
}
$is_logged = false;

if (in_array($user_info, $users_data_small)) {
    session_start();
    foreach ($users_data as $key => $user) {
        if ($user['Email'] == $user_info['email']) {
            $_SESSION["user_info"] = $user;
        }
    }

    header("Location:../pages/index.php");
} else {

?>

    <head>
        <!-- google icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body style="display: flex;flex-direction:column;align-items:center;">
        <h2 style="color: red;">Invalid User Informations</h2>
        <h4>Please click reset password to get your user informations</h4>
        <a href="../pages/login.php">
            <span class="material-icons">
                arrow_back
            </span>
        </a>
    </body>
<?php
}
