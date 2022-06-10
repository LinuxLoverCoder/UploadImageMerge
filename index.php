<?php
session_start();


?>
<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.css">
</head>
<body>


<div class="card">
    <div class="card-body">
        <h2>Upload Imagem</h2>
        <p class="card-description">
        <form enctype="multipart/form-data" class=" forms-sample" action="upload_file.php" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">

            <div class="form-group">
                <label>Faça o upload de sua imagem</label>
                <br/>
                <label for="files" class="btn btn-primary">Selecione o Arquivo  </label>
                <input id="files" style="visibility:hidden;" type="file" name="userfile">

                <button type="submit" value="enviar_arquivos" name="upload" class="btn btn-primary me-2">Enviar</button>
                <button class="btn btn-light">Cancelar</button>
            </div>
        </form>
    </div>
</div>
</body>
<link rel="script" href="js/bootstrap.bundle.js">
<link rel="script" href="js/bootstrap.esm.js">
<link rel="script" href="js/bootstrap.js">
</html>