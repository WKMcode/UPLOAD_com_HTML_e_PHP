<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/CSS/upload_PDF_style.css">
    <link rel="stylesheet" href="./public/CSS/reset.css">
    <link rel="stylesheet" href="./public/CSS/notificacoes.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

    <title>Uploading</title>
</head>

<body>

    <?php
    $upload_Dir = "./uploads_PDF/";
    $upload_file = $upload_Dir . basename($_FILES["arquivo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION));

    if ($imageFileType != "pdf") {
        $mensErro = "Desculpe, somente arquivos do tipo: pdf";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], $upload_file);
        $mensErro = "Arquivo válido e enviado com sucesso.";
    }
    ?>


    <div class="painel_imagem">
        <div class="painel_imagem2">
            <button class="button">
                <div class="text">
                    <i class="bi bi-arrow-left-short"></i>
                    <a href='index.php'>Voltar</a>
                </div>
            </button>

            <p class="mensagem"><?php echo $mensErro; ?></p>

            <a class="pdf" href='<?php echo $upload_file; ?>' target='_blank'><span>Teste</span> PDF</a>

        </div>
    </div>



</body>

</html>