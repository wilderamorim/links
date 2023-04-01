<?php

$app = require dirname(__FILE__) . '/app.php';

uasort($app['links'], fn($a, $b) => ($b['isHighlight'] ?? false) <=> ($a['isHighlight'] ?? false));

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title><?= $app['name'] . ' - ' . $app['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<div class="container">
    <div class="col-xs-12">
        <div class="text-center" style="padding-top: 30px; padding-bottom: 30px;">
            <img style="background-image: url('<?= $app['links']['github']['url']; ?>.png');" class="backdrop linktree">
                <h2 style="color: #ffffff; padding-top: 20px;">
                    <?= $app['name'] . ' - ' . $app['title']; ?>
                </h2>
            </img>
        </div>
    </div>


    <div class="container">
        <div class="col-xs-12">
            <div class="text-center">
                <?php foreach ($app['links'] as $key => $link): ?>
                    <?php
                    $isHighlight = isset($link['isHighlight']) && $link['isHighlight'];
                    ?>
                    <div style="padding-bottom: 30px;">
                        <button onclick="uebi.incrementLinkClickCount('<?= $key; ?>');window.open('<?= $link['url']; ?>', '_blank');" type="button" class="btn btn-outline-light <?= $isHighlight ? 'shake' : null; ?>" style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: <?= $isHighlight ? 800 : 600; ?>;">
                            <?= $link['name']; ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a rel="nofollow" target="_blank" href="https://www.ordermerch.net/" style="color: #34312f;">
            powered by OrderMerch
        </a>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="assets/js/scripts.min.js"></script>
<script>
    $(document).ready(function () {
        uebi.init({});
    });
</script>
</body>

</html>