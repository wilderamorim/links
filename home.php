<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= asset('/css/styles.min.css'); ?>">
</head>

<body>
<div class="container">
    <div class="col-xs-12">
        <div class="text-center" style="padding-top: 30px; padding-bottom: 30px;">
            <img style="background-image: url('<?= $githubUrl; ?>.png');" class="backdrop linktree">
                <h2 style="color: #ffffff; padding-top: 20px;">
                    <?= $title; ?>
                </h2>
            </img>
        </div>
    </div>

    <div class="container">
        <div class="col-xs-12">
            <div class="text-center">
                <?php foreach ($links as $link): ?>
                    <?php
                    $isHighlight = isset($link['isHighlight']) && $link['isHighlight'];
                    ?>
                    <div style="padding-bottom: 30px;">
                        <a onclick="uebi.incrementLinkClickCount('<?= $link['name']; ?>');" href="<?= $link['url']; ?>" target="_blank" class="btn btn-outline-light <?= $isHighlight ? 'shake' : null; ?>" style="width: 80%; padding-top:10px; padding-bottom:10px; font-weight: <?= $isHighlight ? 800 : 600; ?>;">
                            <?= $link['name']; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a rel="nofollow" target="_blank" href="//www.ordermerch.net" style="color: #34312f;">
            powered by OrderMerch
        </a>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?= asset('/js/scripts.min.js'); ?>"></script>
<script>
    $(document).ready(function () {
        uebi.init({});
    });
</script>
</body>

</html>