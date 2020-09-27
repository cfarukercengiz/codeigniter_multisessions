<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Hoşgeldiniz<strong>, <?php echo $user->full_name; ?></strong></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach ($user_list as $item) { ?>
                    <?php if (md5($item->email) != md5($user->email)) { ?>
                        <li>
                            <a href="<?php echo base_url("anasayfa/" . md5($item->email)); ?>"
                               target="_blank"><strong><?php echo $item->full_name; ?></strong>
                                ile oturum aç</a>
                        </li>
                    <?php } ?>
                <?php } ?>
                <li><a href="<?php echo base_url("giris"); ?>" target="_blank"><strong>Farklı bir hesap</strong> ile
                        oturum aç</a></li>
                <li><a href="<?php echo base_url("cikis/" . md5($user->email)); ?>">Çıkış</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6 well col-md-offset-3">
            <h4>Eklediğiniz Ürünler</h4>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                <th>#id</th>
                <th>Ürün Adı</th>
                </thead>
                <tbody>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <td>#<?php echo $product->id; ?></td>
                        <td><?php echo $product->product_name; ?></td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?php base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
<script src="<?php base_url("assets/js/bootstrap.min.js"); ?>"></script>

</body>
</html>