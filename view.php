<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Regex Artikel</title>
</head>
<body>
    <div class="card m-5">
        <h1 class="card-header"><a href="<?= $url ?>" style="color: black; text-decoration: none">Berliner Zeitung - Artikel (<?= count($matches[2]) ?>)</a></h1>
        <div class="card-body">
            <ul>
                <?php for ($i = 0; $i < count($matches[2]); $i++) { ?>
                    <li class="mb-4">
                        <a href="<?= $url.$matches[1][$i] ?>">
                            <h2><?= $matches[2][$i] ?></h2>
                        </a>
                    </li>
                    <hr>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>
</html>
