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
            <form role="form" id="calculator" method="post">
                <input id="operation" name="operation" type="hidden">
                <div class="form-group">

                    <label for="first">
                        First
                    </label>
                    <input type="number" class="form-control" min="0" id="first" name="first" value="<?= $data['first'] ?>">
                </div>

                <div class="form-group">

                    <label for="second">
                        Second
                    </label>
                    <input type="number" class="form-control" min="0" id="second" name="second" value="<?= $data['second'] ?>">
                </div>
                <div class="form-group">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown">
                            Operation
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" onclick="$('#operation').val('add'); $('#calculator').submit()">Add</a>
                            <a class="dropdown-item" onclick="$('#operation').val('subtract'); $('#calculator').submit()">Subtract</a>
                            <a class="dropdown-item" onclick="$('#operation').val('multiply'); $('#calculator').submit()">Multiply</a>
                            <a class="dropdown-item"onclick="$('#operation').val('divide'); $('#calculator').submit()">Divide</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <label for="result">
                        Result
                    </label>
                    <input type="number" class="form-control" id="result" value="<?= $data['result'] ?>">
                </div>
            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>

</body>
</html>