<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculator</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form role="form" action="index.php" method="post">
                <input id="operation" name="operation" type="hidden">
                <div class="form-group">

                    <label for="uname">
                        Username
                    </label>
                    <input type="text" class="form-control" id="uname" name="uname">
                </div>

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" value="Sign in">
                </div>
            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>

</body>
</html>