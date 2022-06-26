<?php
    $nombre = "";
    $lenguaje = "";
    $chkphp = "";
    $chkhtml = "";
    $chkcss = "";
    $listanime = "";
    $comentario = "";
    if(isset($_POST)){
        $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
        $lenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
        $chkphp = ( isset($_POST['chkphp'])=="si" ) ? "checked" : "";
        $chkhtml = ( isset($_POST['chkhtml'])=="si" ) ? "checked" : "";
        $chkcss = ( isset($_POST['chkcss'])=="si" ) ? "checked" : "";
        $listanime = (isset($_POST['listanime'])) ? $_POST['listanime'] : "";
        $comentario = (isset($_POST['comentario'])) ? $_POST['comentario'] : "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_POST){  ?>
    <strong>Hola :</strong> <?php echo " " .$nombre; ?>
    <?php } ?>
    <form action="formulario.php" method="POST">
        <input value=<?php echo $nombre; ?> type="text" name="nombre">

        <div>Te gusta?</div>
        <div>lenguaje : <?php echo " " .$lenguaje; ?> </div>
        <p>PHP</p><input <?php echo ($lenguaje=="php")?"checked":"" ?> type="radio" name="lenguaje"  value="php" id="">
        <br>
        <p>javascrit</p><input <?php echo ($lenguaje=="js")?"checked":"" ?> type="radio" name="lenguaje" value="js" id="">
        <br>
        <p>python</p><input <?php echo ($lenguaje=="python")?"checked":"" ?> type="radio" name="lenguaje" value="python" id="">

        <br>
        <div>Estoy aprendiendo</div>
        <?php 
            if($chkphp=="checked"){ echo "PHP <br>"; }
            if($chkcss=="checked"){ echo "CSS <br>"; }
            if($chkhtml=="checked"){ echo "HTML <br>"; }
         ?>
        <p>PHP </p> <input type="checkbox" <?php echo $chkphp ?> name="chkphp" value="si" id="">
        <p>CSS </p> <input type="checkbox" <?php echo $chkcss ?> name="chkcss" value="si" id="">
        <p>HTML </p> <input type="checkbox" <?php echo $chkhtml ?> name="chkhtml" value="si" id="">
        <br>
        <div>Animes que me gustan</div>
        <?php 
             echo "$listanime <br>"; 
         ?>
        <select name="listanime" id="">
            <option value="ninguna" <?php echo ($listanime=="ninguna")?"selected":"" ?> >Ninguna Serie</option>
            <option value="hxh" <?php echo ($listanime=="hxh")?"selected":"" ?>>Hunter x Hunter</option>
            <option value="naruto" <?php echo ($listanime=="naruto")?"selected":"" ?>>Naruto</option>
            <option value="bleach" <?php echo ($listanime=="bleach")?"selected":"" ?>>Bleach</option>
        </select>
        <br>
        <div>mi comentario : </div>
        <?php echo $comentario ."<br>"; ?>

        <div>Comentario</div>
        <textarea name="comentario" id="" cols="30" rows="10"><?php echo $comentario; ?>
        </textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>