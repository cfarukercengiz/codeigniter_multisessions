<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kullanıcı Girişi</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
<h3 class="text-center">Kullanıcı Girişi</h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6 well col-md-offset-3">
            <form action="<?php echo base_url("giris-yap"); ?>" method="post">
                <div class="form-group">
                    <label>E-posta Adresiniz</label>
                    <input type="email" name="eposta" class="form-control">
                    <?php if (isset($form_error)) { ?>
                        <small class="pull-right"><?php echo form_error("eposta"); ?></small>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label>Şifre</label>
                    <input type="password" name="sifre" class="form-control">
                    <?php if (isset($form_error)) { ?>
                        <small class="pull-right"><?php echo form_error("sifre"); ?></small>
                    <?php } ?>
                </div>
                <hr>
                <button type="submit" class="btn btn-success">Giriş</button>
                <button type="reset" class="btn btn-danger">Form Verilerini Temizle</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>