<?php
$storage = __DIR__ . '/storage';
$userDir = $_GET['rout'] ?? '';
$dir = "{$storage}/{$userDir}";
$routs = scandir($dir);
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Файловый менеджер</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .container {
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }
        body {
            padding-bottom: 20px;
        }

        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

<!-- Begin page content -->
<main class="flex-shrink-0">
    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="/my-site/index.php">Astakhov & Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Doesn't work yet" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <form action="create-dir.php" method="post">
            <input type="hidden" name="dir" value="<?=
            $userDir ?>">
            <div class="row">
                <div class="col-8">
                    <input type="text" name="directoryName" class="form-control" placeholder="name directory">
                </div>
                <button type="submit" class="btn btn-info col-4">Create Directory</button>
            </div>

        </form>
        <?php foreach ($routs as $rout) : ?>
        <li><a href="index.php?rout=<?= $rout ?>"><?=$rout ?></a></li>
        <?php endforeach; ?>
    </div>

</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Astakhov Company 2021.</span>
    </div>
</footer>



</body>
</html>