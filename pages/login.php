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
    <!-- css file -->
    <link rel="stylesheet" href="../styles/auth.css">
    <title>Login</title>
</head>

<body>
    <form action="../backend/login.php" method="POST" class="my_form">
        <h2>Login</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">ESI Email address</label>
            <input name="useremail" type="email" class="form-control" placeholder="...@esi.ac.ma" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">If it's your first time, please reset to create your
                password.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="userpassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="password" required>
        </div>
        <div style="justify-content: space-between;display:flex;flex-direction:row;width:100%" class="form-group form-check">
            <div><input name="remember_me_checkbox" type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <a style="color: blue" type="button" data-toggle="modal" data-target="#exampleModalCenter">Forgotten Password?
                <strong>reset</strong></a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">ESI Email Address:</label>
                            <input id="reset_email_id" type="email" class="form-control" placeholder="...@esi.ac.ma" required autofocus>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" onclick="getpassword(document.getElementById('reset_email_id').value)" class="btn btn-primary">Get My Password</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        function getpassword(input_email) {
            if (input_email === "") {
                alert("enter your email please")
            } else {
                let emails_data = [];
                fetch('../backend/users.json').then(response => {
                    return response.json();
                }).then(users_data => {
                    users_data.forEach(user => {
                        emails_data.push(user.email)
                    });
                    if (emails_data.includes(input_email)) {
                        var user_password = users_data[emails_data.indexOf(input_email)].password
                        alert(`Your Password Is: ${user_password}`)
                    } else {
                        alert("this email is not registered, Contact Us for any feedback")
                    }
                })
            }

        }
    </script>
</body>

</html>