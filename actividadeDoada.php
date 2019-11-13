<?php
    // BreoBeceiro:12/11/2019
    // PROXECTO 1º AVALIACIÓN | Versión 1.0

    // Arquivo que pode desaparecer:
    include('actividadeDoada_Utilidades.php');

    // Módulo de funcións de validación e saneamento:
    include('actividadeDoada_moduloFuncions.php');

    //var_dump(validaSilaba("LE", "LA")); // Mándaselle un LE, e ten que haber un LA -> Devolve FALSE
    //var_dump(sizeSilaba("L")); // Mándaselle un caracter e teñen que ser dous -> Devolve FALSE

    if(isset($_POST['enviar'])){
        if(!validaSilaba(strtoupper($_POST['silaba2']), "LE")){
            $erro2= "Tes que poñer LE...";
        }else{
            $silaba2= $_POST['silaba2'];
        }

        if(!validaSilaba(strtoupper($_POST['silaba1']), "LA")){
            $erro1= "Tes que poñer LA...";
        }else{
            $silaba1= $_POST['silaba1'];
        }

        if(!validaSilaba(strtoupper($_POST['silaba3']), "LI")){
            $erro3= "Tes que poñer LI...";
        }else{
            $silaba3= $_POST['silaba3'];
        }

        if(!validaSilaba(strtoupper($_POST['silaba4']), "LO")){
            $erro4= "Tes que poñer LO...";
        }else{
            $silaba4= $_POST['silaba4'];
        }

        if(!validaSilaba(strtoupper($_POST['silaba5']), "LU")){
            $erro5= "Tes que poñer LU...";
        }else{
            $silaba5= $_POST['silaba5'];
        }
/*
        $silabaLE= $_POST['silabaLE'];
        $silabaLI= $_POST['silabaLI'];
        $silabaLO= $_POST['silabaLO'];
        $silabaLU= $_POST['silabaLU'];
*/
        // HAI QUE VALIDALOS CAMPOS ANTES DE PASALOS AO VECTOR E COMPROBAR QUE NON TEÑAN UNHA LONXITUDE SUPERIOR A 2 CARACTERES
        //   (OS inputs VAN LIMITADOS A 2 CARACTERES NO HTML, PERO ESTE PODE SER MODIFICADO DENDE O CLIENTE, POLO QUE HAI QUE
        //   VALIDALO IGUALMENTE NO SERVIDOR).

        //$silabas= array("LA"=>$silabaLA, "LE"=>$silabaLE, "LI"=>$silabaLI, "LO"=>$silabaLO, "LO"=>$silabaLU);
    }
?>
<!doctype html>
<html lang="gl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="actividadeDoada.css">
        <script type="text/javascript" src=""></script>
        <title>
            Completar sílabas e palabras | Nivel 1
        </title>
    </head>

    <body>
        <div id="Contenedor">
            <h2>Completar Sílabas e Palabras<br />(Fácil)</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" name="silabaLA" id="" value="LA" readonly="readonly" />
                <input type="text" name="silabaLE" id="" value="LE" readonly="readonly" />
                <input type="text" name="silabaLI" id="" value="LI" readonly="readonly" />
                <input type="text" name="silabaLO" id="" value="LO" readonly="readonly" />
                <input type="text" name="silabaLU" id="" value="LU" readonly="readonly" />

                <br /><br />

                <?php
                    /*XERAR AS IMAXES COS inputs EMBAIXO.
                    for($i=1;$i<=5;$i++){
                        echo "<img src='Imaxes/ProxectoFacil_Imaxe". $i .".jpg' class='imaxesNivel1' /><br /><input type='text' name='silaba". $i ."' id='Silaba". $i ."' maxlength='2' /><input type='text' name='silabaFinal". $i ."' id='SilabaFinal". $i ."' value='". $silabasFinais[$i] ."' class='segundaSilaba' readonly='readonly' /><br />";
                    }*/

                    for($i=1;$i<=5;$i++){
                        ?>
                            <div class="caixa<?php echo $i; ?>">
                                <img src='Imaxes/ProxectoFacil_Imaxe<?php echo $i; ?>.jpg' class='imaxesNivel1' />
                                <br />
                                <input type='text' name='silaba<?php echo $i; ?>' id='Silaba<?php echo $i; ?>' maxlength='2' />
                                <input type='text' name='silabaFinal<?php echo $i; ?>' id='SilabaFinal<?php echo $i; ?>' value='<?php echo $silabasFinais[$i]; ?>' class='segundaSilaba' readonly='readonly' />
                                <br />
                                <?php if(isset($_POST['enviar']) && isset($erro1)){ echo $erro1; } ?>
                            </div>
                        <?php
                    }
                ?>

                <br /><br />

                <input type="submit" name="enviar" id="Enviar" value="Comprobar" />
            </form>
        </div>
    </body>
</html>