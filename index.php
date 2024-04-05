<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./public/CSS/index_style.css">
    <link rel="stylesheet" href="./public/CSS/reset.css">

    <title>Uploading</title>
</head>

<body>


    <form class="form" action="upload.php" enctype="multipart/form-data" method="POST">
        <span class="form-title">Envie o seu arquivo</span>
        <p class="form-paragraph">
            O arquivo deve ser uma imagem
        </p>
        <label for="file-input" class="drop-container">

            <input class="up_archive" type="file" accept="image/*" name="arquivo" required />
            <button class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                </svg>
                <div class="text">
                    Enviar
                </div>
            </button>
        </label>

        <label for="file-input" class="drop-container">
            <span class="drop-title"></span>

    </form>

    <form action="upload_pdf.php" enctype="multipart/form-data" method="POST">
        <p class="form-paragraph">
            O arquivo deve ser um PDF
        </p>
        <label for="file-input" class="drop-container">
            <input class="up_archive" type="file" accept="application/pdf" name="arquivo" required />
            <button class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                </svg>
                <div class="text">
                    Enviar
                </div>
            </button>
        </label>

        
        
    </form>

</body>

</html>