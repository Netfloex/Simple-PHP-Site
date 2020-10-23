<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= preg_replace("/^{$paths->public}/", "", $paths->stylesOutput) ?>">
</head>

<body>
    <?php include $document ?>
</body>

</html>