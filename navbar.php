<?php echo '<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="javascript:void(0)">Car2go</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
        <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search for cars">
            <button class="btn btn-warning text-white" type="button"><strong>Search</strong></button>
        </form>
        <ul class="navbar-nav me-auto d-flex  justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Contact us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Hello,Sign in</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="login.php">Login</a></li>
                <li><a class="dropdown-item" href="register.php">Register</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>'; ?>
