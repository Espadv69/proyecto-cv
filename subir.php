<?php 

    $formatos = array('.jpeg', '.jpg', '.png', '.pdf', '.sql', '.webp');
    $directorio = 'documentos';

    if(isset($_POST['subir'])) {
        $nombreDocumento = $_FILES['documento']['name'];
        $nombreTmpDocumento = $_FILES['documento']['tmp_name'];
        $ext = substr($nombreDocumento, strrpos($nombreDocumento,'.'));

        if(in_array($ext, $formatos)) {
            if(move_uploaded_file($nombreTmpDocumento, "$directorio/$nombreDocumento")) {

            } else {
                echo "ocurrió un error";
            }

        } else {
            echo "la extension del archivo no es la adecuada";
        }

    }

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style2.css">
    </head>


    <body>
        <h1>SUBIR DOCUMENTO CV.pdf</h1>



        <div
    class="container"
>
    <h2></h2>

</div>

<div
    class="container2"
>
    <div class="card">

        <div class="card-header">
            Documentos enviados:
        </div>

        <div class="card-block">
            <div class="row">

            <?php
                if($dir = opendir($directorio)) {
                    while($documento = readdir($dir)) {
                        if($documento != "." && $documento != "..") {
                            echo "<p> Su documento se ha subido-><strong>$documento</strong><p><hr>";
                        }
                    }
                }

            ?>
            
             </div>
        </div>
    </div>

</div> 

<!---------------------------------------------------------------------------->
        
    <div class="files">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="documento" class="form-control-file">Documento</label>
                <input type="file" class="form-control-file" id="documento" name="documento">
            </div>
            <button type="submit" name="subir">Subir Documento</button>
        </form>
    </div>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
