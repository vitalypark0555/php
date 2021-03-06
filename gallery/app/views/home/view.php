<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Gallery</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/php/gallery/public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/php/gallery/public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>
<header>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Gallery</a>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</header>
<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= ASSET_ROOT . $data['photo']->path; ?>">
                    </div>
                    <div class="card-content">
                        <h5>Views: <?= $data['photo']->views_num ?> </h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br><br>
</div>

<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's
                    our full time job. Any amount would help support and continue development on this project and is
                    greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="blue-text text-lighten-3" href="#">Vitaly</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/php/gallery/public/js/materialize.js"></script>
<script src="/php/gallery/public/js/init.js"></script>
<script>
    $(function () {
        $('#form').validate({
            rules: {
                "photos[]": {
                    required: true,
                    extension: "jpg|jpeg|png|gif",
                    filesize: 20971520,
                }
            }
        });
    });

</script>
</body>
</html>
