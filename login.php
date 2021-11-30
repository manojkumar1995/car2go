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
                            <img class="mx-auto d-block img-fluid rounded" src="./img/car2go_login.jpg" alt="car2go_login" height="100" width="400">
                            </div>
                        <div class="col sm-6 mt-5">
                        <h3>Login into Car2go</h3>
                            <form action="/action_page.php">
                                <div class="mb-3 mt-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" id="email" placeholder="Enter email" name="email" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="pwd" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
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