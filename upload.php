<?php

// $upload_Dir = "./uploads/";
// $upload_file = $upload_Dir . basename( $_FILES["arquivo"] ["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION));

// //o formato do arquivo - jpg,jpeg,bmp,gif,png,svg
//  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "svg" && $imageFileType != "gif" && $imageFileType != "jpeg" && $imageFileType != "bmp"){
//     echo "Desculpe, somente arquivos do tipo: jpg, jpeg, bmp, gif, png, svg";
//     $uploadOk = 0;
//  }

// //se o arquivo tem 500kb - 500000
// if($_FILES["arquivo"]["size"] > 500000){
//     echo "Arquivo muito grande acima de 500Kb";
//     $uploadOK = 0;
//  }
// //se existe
// if(file_exists($upload_file)){
//     echo "Esse arquivo já existe";
//     $uploadOk = 0;
// }

// if($uploadOk == 1){
//     move_uploaded_file($_FILES["arquivo"]["tmp_name"], $upload_file);
//     echo "<p>Arquivo válido e enviado com sucesso.</p>";
// }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./public/CSS/index_style.css">
    <link rel="stylesheet" href="./public/CSS/upload_style.css">
    <link rel="stylesheet" href="./public/CSS/reset.css">
    <link rel="stylesheet" href="./public/CSS/notificacoes.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Uploading</title>
    <script src="./public/js/showImg.js" defer></script>
</head>

<body>

    <?php
    $upload_Dir = "./uploads/";
    $upload_file = $upload_Dir . basename($_FILES["arquivo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION));

    //o formato do arquivo - jpg,jpeg,bmp,gif,png,svg
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "svg" && $imageFileType != "gif" && $imageFileType != "jpeg" && $imageFileType != "bmp") {
        $mensErro = "Desculpe, somente arquivos do tipo: jpg, jpeg, bmp, gif, png, svg";
        $uploadOk = 0;
    }

    //se o arquivo tem 500kb - 500000
    if ($_FILES["arquivo"]["size"] > 500000) {
        $mensErro = "Arquivo muito grande acima de 500Kb";
        $uploadOK = 0;
    }
    //se existe
    if (file_exists($upload_file)) {
        $mensErro = "Esse arquivo já existe";
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

            <button class="Show_Image" onclick="show()">
                <p class="text">Mostrar Imagem</p>
            </button>

            <img class='hidden' style='display: none; max-width: 90%;height: auto;max-height:50%;' src='<?php echo $upload_file; ?>'>
        </div>
    </div>

</body>

</html>