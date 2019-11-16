<?php
?>
<html>

<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="jumbotron text-center" style="width:100%; height:100%; margin:0px">
        <h3>Login</h3>
        <form action="action_page.php" method="post">
            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="submit" class="btn btn-primary btn-sm">Login</button>
                <a href="./index.php" role="button">Cancel</a>
            </div>
        </form>
    </div>

</body>

</html>