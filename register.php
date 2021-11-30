<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Car2go</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col sm-6">
                            <img class="mx-auto d-block img-fluid rounded" src="./img/car2go_login.jpg" alt="car2go_login" height="150" width="600">
                            </div>
                        <div class="col sm-6">
                        <h3>Create Account</h3>
                            <form action="./modules/registration_action.php" method="POST">
                                <div class="mb-3 mt-3">
                                    <label for="username" class="form-label">Enter username:</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" autocomplete="off" required>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Enter Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="pwd" class="form-label">Enter Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="pwd1" class="form-label">Re-Enter Password:</label>
                                    <input type="password" class="form-control" id="pwd1" placeholder="Re-Enter Password" name="pswd1" autocomplete="off">
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>