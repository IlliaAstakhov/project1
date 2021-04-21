<?php
$comments = require __DIR__ . '/get_contacts.php';
$i = '';
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контактная форма</title>
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
        <form action="all_contacts.php" method="post" >
            <div class="mb-3 mt-3">
                <label for="author_name">Ваше имя</label>
                <input type="text" name="author" id="author_name" required class="form-control">
            </div>

            <div class="mb-3">
            <label for="age">Ваш возраст</label>
            <select name="age" id="age" class="form-control">
                <option value="from 6 to 14">От 6 До 14</option>
                <option value="from 15 to 18">От 15 До 18</option>
                <option value="more than 18">Старше 18</option>
            </select>
            </div>

            <div class="mb-3">
            <label for="phone_number">Номер телефона</label>
            <input type="text" name="phone" id="phone_number" required class="form-control">
            </div>

            <div class="mb-3">
            <label for="comment">Комментарий</label>
            <textarea name="comment" id="comment" required class="form-control"></textarea>
            </div>

            <div class="mb-3">
            <button type="submit" class="btn btn-success">Send Comment</button>
            </div>
        </form>
        <div class="table-responsive">
        <table  class="table table-striped table-sm">
            <thead>
            <tr>
                <th>№</th>
                <th>Date</th>
                <th>Author</th>
                <th>Age</th>
                <th>Comment</th>
            </tr>
            </thead>
            <?php foreach ($comments as $comment) : ?>
                <?php $i++ ?>
                <tr>
                    <td>
                        <p>
                            <?= $i ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?= $comment['time'] ?>
                        </p>

                    </td>
                    <td>
                        <p>
                            <?= $comment['author'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?= $comment['age'] ?>
                        </p>

                    </td>
                    <td>
                        <p>
                            <?= $comment['comment'] ?>
                        </p>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>

    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Astakhov Company 2021.</span>
    </div>
</footer>



</body>
<body>

    </form>

</body>
</html>