<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?= view('template/header'); ?>
</head>
<body>
    <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
    <?= view('template/footer'); ?>
</body>
</html>
