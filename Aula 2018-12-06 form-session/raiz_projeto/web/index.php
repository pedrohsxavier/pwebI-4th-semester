<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</head>
<body>
<!-- Formulario de Cadastro -->
<div class="row container">
    <p>&nbsp;</p>
    <form action="add.php" method="POST" class="col s12">
        <fieldset class="formulario">
            
            <!--<legend><img src="imagens/avatar1.png" alt="[imagem]" width="100"> </legend> -->
            
            <h5 class="light center">Lista de Convidados </h5>
            <?php
                if(isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                endif;
            ?>
            <!--Campo nome -->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                <label for="nome">Nome do Cliente</label>
            </div>

            <!--Campo Sexo -->
            <label>
                <input name="sexo" type="radio" checked value="F" />
                <span>F</span>
            </label>
        </p>
        <p>
            <label>
                <input name="sexo" type="radio" value ="M" />
                <span>M</span>
            </label>
        </p>

        <!-- Submit -->
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
        </button>

    
        </fieldset>
    </form>
</div>
    
</body>
</html>