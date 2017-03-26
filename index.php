<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <title>Movimientos ajedrez</title>
     <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
     <link rel="stylesheet" type="text/css" href="css/style.css"/>
     <script type="text/javascript" src="js/prefixfree.min.js"></script>
</head>
<body>
     <header>
          MOVIMIENTOS-AJEDREZ
     </header>
     <?php
	 error_reporting(E_ERROR | E_PARSE);
     if(!isset($_POST['ver'])){
     ?>
          <form method="POST" action="index.php">
          <div id="datos">
          <fieldset>
              <legend>
                  Figura
              </legend>
               <div>
                    <select name="figura">
                                   <option  value="peon">Peón</option>
                                   <option  value="torre">Torre</option>
                                   <option  value="caballo">Caballo</option>
                                   <option  value="arfil">Arfil</option>
                                   <option  value="rey">Rey</option>
                                   <option  value="reina">Reina</option>
                              </select>
               </div>
               <div>
                    <span class="etiqueta">Color: </span>
                    <div class="rigth"><input type="radio" name="colorF" value="b" id="b" checked="true">Blanca</div>
                    <div class="rigth"><input type="radio" name="colorF" value="n" id="n">Negra</div>
               </div>
               <div id="f"><span class="etiqueta">Fila:</span> <span><input type="number" name="fila" min="1" max="8" id="" required></div>
               <div><span class="etiqueta">Columna:</span> <span id="c"><input type="number" name="columna" min="1" max="8" id="" required></div>
               <div><input type="submit" value="Ver" name="ver" id="boton"/></div>
          </fieldset>
          </div>
          <div id="contorno"></div>
          <div id="numeros">
               <div class="num">8</div>
               <div class="num">7</div>
               <div class="num">6</div>
               <div class="num">5</div>
               <div class="num">4</div>
               <div class="num">3</div>
               <div class="num">2</div>
               <div class="num">1</div>
          </div>
          <div id="letras">
               ABCDEFGH
          </div>
          <div id="tablero" align="center">
               <?php
                    
                    for($fila = 0; $fila < 8; $fila++){
                         $left = 135;
                         if($fila % 2 != 0){
                              $left= 20;
                         }
                         $style="margin-left: " . ($left+100) ."px";
               ?>
                         <div id="fila" style = '<?php echo $style ?>'>
                         <?php
                              for($columna = 0; $columna < 4; $columna++){
                         ?>
                              <div  id="casilla" align="center">
                              </div>
                         <?php
                              }
                         ?>
                         </div>
               <?php
                    }
               ?>
          
          </div>
     </form>
     <?php
     }
     else{
          $figura= $_POST['figura'];
          $color=$_POST['colorF'];
     ?>
          <form method="POST" action="index.php">
               <div id="datos">
               <fieldset>
               <legend>
                   Figura
               </legend>
                    <div>
                         <?php if($figura == "peon"){ ?>
                         <select name="figura">
                                        <option  selected='selected' value="peon">Peón</option>
                                        <option  value="torre">Torre</option>
                                        <option  value="caballo">Caballo</option>
                                        <option  value="arfil">Arfil</option>
                                        <option  value="rey">Rey</option>
                                        <option  value="reina">Reina</option>
                                   </select>
                         <?php } ?>
                         <?php if($figura == "torre"){ ?>
                         <select name="figura">
                                        <option  value="peon">Peón</option>
                                        <option  selected='selected' value="torre">Torre</option>
                                        <option  value="caballo">Caballo</option>
                                        <option  value="arfil">Arfil</option>
                                        <option  value="rey">Rey</option>
                                        <option  value="reina">Reina</option>
                                   </select>
                         <?php } ?>
                         <?php if($figura == "caballo"){ ?>
                         <select name="figura">
                                        <option  value="peon">Peón</option>
                                        <option  value="torre">Torre</option>
                                        <option  selected='selected' value="caballo">Caballo</option>
                                        <option  value="arfil">Arfil</option>
                                        <option  value="rey">Rey</option>
                                        <option  value="reina">Reina</option>
                                   </select>
                         <?php } ?>
                          <?php if($figura == "arfil"){ ?>
                         <select name="figura">
                                        <option  value="peon">Peón</option>
                                        <option  value="torre">Torre</option>
                                        <option  value="caballo">Caballo</option>
                                        <option  selected='selected' value="arfil">Arfil</option>
                                        <option  value="rey">Rey</option>
                                        <option  value="reina">Reina</option>
                                   </select>
                         <?php } ?>
                         <?php if($figura == "rey"){ ?>
                         <select name="figura">
                                        <option  value="peon">Peón</option>
                                        <option  value="torre">Torre</option>
                                        <option  value="caballo">Caballo</option>
                                        <option  value="arfil">Arfil</option>
                                        <option  selected='selected' value="rey">Rey</option>
                                        <option  value="reina">Reina</option>
                                   </select>
                         <?php } ?>
                         <?php if($figura == "reina"){ ?>
                         <select name="figura">
                                        <option  value="peon">Peón</option>
                                        <option  value="torre">Torre</option>
                                        <option  value="caballo">Caballo</option>
                                        <option  value="arfil">Arfil</option>
                                        <option  value="rey">Rey</option>
                                        <option  selected='selected' value="reina">Reina</option>
                                   </select>
                         <?php } ?>
                         <?php if($color == "b"){ ?>
                              </div>
                              <div>
                                   <span class="etiqueta">Color: </span>
                                   <div class="rigth"><input type="radio" name="colorF" value="b" id="b" checked="true">Blanca</div>
                                   <div class="rigth"><input type="radio" name="colorF" value="n" id="n">Negra</div>
                              </div>
                         <?php } ?>
                         <?php if($color == "n"){ ?>
                              </div>
                              <div>
                                   <span class="etiqueta">Color: </span>
                                   <div class="rigth"><input type="radio" name="colorF" value="b" id="b">Blanca</div>
                                   <div class="rigth"><input type="radio" name="colorF" value="n" id="n" checked="true">Negra</div>
                              </div>
                         <?php } ?>
                    <div id="f"><span class="etiqueta">Fila:</span> <span><input type="number" name="fila" min="1" max="8" id="" value="<?php if(isset($_POST["fila"])) echo $_POST["fila"];?>" required></div>
                    <div><span class="etiqueta">Columna:</span> <span id="c"><input type="number" name="columna" min="1" max="8" id="" value="<?php if(isset($_POST["columna"])) echo $_POST["columna"]; ?>" required></div>
                    <div><input type="submit" value="Ver" name="ver" id="boton"/></div>
               </fieldset>
               </div>
               <div id="contorno"></div>
               <div id="numeros">
                    <div class="num">8</div>
                    <div class="num">7</div>
                    <div class="num">6</div>
                    <div class="num">5</div>
                    <div class="num">4</div>
                    <div class="num">3</div>
                    <div class="num">2</div>
                    <div class="num">1</div>
               </div>
               <div id="letras">
                    ABCDEFGH
               </div>
               <div id="tablero" align="center">
                    <?php
                         
                         for($fila = 0; $fila < 8; $fila++){
                              $left = 135;
                              if($fila % 2 != 0){
                                   $left= 20;
                              }
                              $style="margin-left: " . ($left+100) ."px";
                    ?>
                              <div id="fila" style = '<?php echo $style ?>'>
                              <?php
                                   for($columna = 0; $columna < 4; $columna++){
                              ?>
                                   <div  id="casilla" align="center">
                                   </div>
                              <?php
                                   }
                              ?>
                              </div>
                    <?php
                         }
                    ?>
               
               </div>
     <?php
          $fila= $_POST['fila'];
          $columna= $_POST['columna'];

          if($figura == 'peon' && $color == 'n' && $fila == 8){
               echo "<script type=\"text/javascript\">alert(\"". "Fila no válida para el peón de color negro." . "\");</script>";
          }
          else if($figura == 'peon' && $color == 'b' && $fila == 1){
               echo "<script type=\"text/javascript\">alert(\"". "Fila no válida para el peón de color blanco." . "\");</script>";
          }
          else{
          $style="margin-left: " . (622+($columna*58)) ."px;"
          . "margin-top: " . (-1-($fila*49)) ."px;"//. "margin-top: " . (-442+($fila*49)) ."px;"
          . "background : url(\"img/". $figura . "_" . $color . ".png\");";
     ?>
          <div  id="ficha"  style = '<?php echo $style ?>' align="center">
          </div>
     <?php
          $movimientos = array();
          $movimientos_matar = array();
          if($figura == "reina"){
               ///DIGAONALES
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila <= 7 && $c_columna <= 7){
                    $c_fila++;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila >= 2 && $c_columna >= 2){
                    $c_fila--;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila <= 7 && $c_columna >= 2){
                    $c_fila++;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila >= 2 && $c_columna <= 7){
                    $c_fila--;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               /////LADOS
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila <= 7){
                    $c_fila++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila >= 2){
                    $c_fila--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_columna >= 2){
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_columna <= 7){
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
          }
          /////////////////////////////////////////////////////////////////
          if($figura == "rey"){
               ///DIGAONALES
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila <= 7 && $c_columna <= 7){
                    $c_fila++;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila >= 2 && $c_columna >= 2){
                    $c_fila--;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila <= 7 && $c_columna >= 2){
                    $c_fila++;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila >= 2 && $c_columna <= 7){
                    $c_fila--;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               /////LADOS
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila <= 7){
                    $c_fila++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila >= 2){
                    $c_fila--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_columna >= 2){
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_columna <= 7){
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
          }
          /////////////////////////////////////////////////////////////////
          if($figura == "torre"){
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila <= 7){
                    $c_fila++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila >= 2){
                    $c_fila--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_columna >= 2){
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_columna <= 7){
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
          }
          /////////////////////////////////////////////////////////////////
          if($figura == "arfil"){
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila <= 7 && $c_columna <= 7){
                    $c_fila++;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila >= 2 && $c_columna >= 2){
                    $c_fila--;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila <= 7 && $c_columna >= 2){
                    $c_fila++;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               while($c_fila >= 2 && $c_columna <= 7){
                    $c_fila--;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
          }
          /////////////////////////////////////////////////////////////////
          if($figura == "caballo"){
               ////derecha arriba
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila >= 3 && $c_columna <= 7){
                    $c_fila-=2;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila >= 2 && $c_columna <= 6){
                    $c_fila--;
                    $c_columna+=2;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               ////derecha abajo
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila <= 6 && $c_columna <= 7){
                    $c_fila+=2;
                    $c_columna++;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila <= 7 && $c_columna <= 6){
                    $c_fila++;
                    $c_columna+=2;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }

               ////izquierda arriba
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila >= 3 && $c_columna >= 2){
                    $c_fila-=2;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }

               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila >= 2 && $c_columna >= 3){
                    $c_fila--;
                    $c_columna-=2;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }

               ////izquierda abajo
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila <= 6 && $c_columna >= 2){
                    $c_fila+=2;
                    $c_columna--;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
               $c_fila=$fila;
               $c_columna=$columna;
               if($c_fila <= 7 && $c_columna >= 3){
                    $c_fila++;
                    $c_columna-=2;
                    array_push($movimientos,  $c_fila . "," . $c_columna);
               }
          }
          /////////////////////////////////////////////////////////////////
          if($figura == "peon"){
               if($color == "b"){
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila <= 7){
                         $c_fila++;
                         array_push($movimientos,  $c_fila . "," . $c_columna);
                    }
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila <= 7 && $c_columna <= 7){
                         $c_fila++;
                         $c_columna++;
                         array_push($movimientos_matar,  $c_fila . "," . $c_columna);
                    }
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila <= 7 && $c_columna >= 2){
                         $c_fila++;
                         $c_columna--;
                         array_push($movimientos_matar,  $c_fila . "," . $c_columna);
                    }
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila == 2){
                         $c_fila+=2;
                         array_push($movimientos,  $c_fila . "," . $c_columna);
                    }
               }
               if($color == "n"){
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila >= 2){
                         $c_fila--;
                         array_push($movimientos,  $c_fila . "," . $c_columna);
                    }
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila >= 2 && $c_columna >= 2){
                         $c_fila--;
                         $c_columna--;
                         array_push($movimientos_matar,  $c_fila . "," . $c_columna);
                    }
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila >= 2 && $c_columna <= 7){
                         $c_fila--;
                         $c_columna++;
                         array_push($movimientos_matar,  $c_fila . "," . $c_columna);
                    }
                    $c_fila=$fila;
                    $c_columna=$columna;
                    if($c_fila == 7){
                         $c_fila-=2;
                         array_push($movimientos,  $c_fila . "," . $c_columna);
                    }
               }
          }
          //echo "<script type=\"text/javascript\">alert(\"". $movimientos[1] . "\");</script>";  

          $arrlength = count($movimientos);

          for($i = 0; $i < $arrlength; $i++) {
              list($fila, $columna) = split('[,.-]', $movimientos[$i]);
              $style="margin-left: " . (622+($columna*58)) ."px;"
              . "margin-top: " . (-1-($fila*49)) ."px;";
               //. "margin-top: " . (-442+($fila*49)) ."px;";
     ?>
          <div  id="movimiento"  style = '<?php echo $style ?>' align="center">
               <div  id="mov" >
               </div>
          </div>
     <?php
          }
          $arrlength = count($movimientos_matar);

          for($i = 0; $i < $arrlength; $i++) {
              list($fila, $columna) = split('[,.-]', $movimientos_matar[$i]);
              $style="margin-left: " . (622+($columna*58)) ."px;"
              . "margin-top: " . (-1-($fila*49)) ."px;";
               //. "margin-top: " . (-442+($fila*49)) ."px;";
     ?>
          <div  id="movimiento"  style = '<?php echo $style ?>' align="center">
               <div  id="movm" >
               </div>
          </div>
     <?php
          }
     }
     }
     ?>
     </form>
     <div></div>
</body>
</html>
<table>
     
</table>  
<div>
     
</div>    
