<head>
  <link rel="stylesheet" type="text/css" href="teste_css.css">
</head>

<body style="background:#a37554">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <section style="background:#a37554" class="mx-auto ">
    <br>
    <h1 align=center style="color:white">Galins Game</h1><br>
    <pre>
    <?php

    if (isset($_GET['player'])) { ?>
      <form action="MJG.php?player1=true" method="post">
        <table align=center>
          <table align=center class="um">
            <?php
          if (isset($_GET['ids_zip'])) {
            if (!empty($_GET['ids_zip'])) {
              $ids_zip = urldecode($_GET['ids_zip']);
              $ids = unserialize($_GET['ids_zip']);

              $times = $_GET['times'];
              $times++;
              $player="player".($times%2+1);

            }
 /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------   */
         $letter="A";

             /*  if (isset($ids["AA") && isset("BB") && isset("CC"or"AC") && isset("BB") && isset("CA"])){
                 if(($ids["AA") && isset("BB") && isset("CC") && isset("AC") && isset("CA"])=="player1"){
                  $checkwinner=1;}
                 if(($ids["AA") && isset("BB") && isset("CC") && isset("AC") && isset("CA"])=="player2"){
                  $checkwinner=2;}} */


             /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------   */
          } else {

            $times = 0;
            $ids = [];


        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  */
          }



        if(empty($times))
            $player="player". $_GET['player'];
        if(isset($_GET['id'])){
            $ids[$_GET['id']]= $player;}
/*  print_r($ids); */
   /*  for($z=0;$z<3;$z++){
      print_r($player);
        if ((isset($ids["AA"]) && isset($ids["BB"]) && isset($ids["CC"])) or (isset($ids["AC"]) && isset($ids["BB"]) && isset($ids["CA"]))){
            if (($ids["AA"]=="player1" && $ids["BB"]=="player1" && $ids["CC"]=="player1") or ($ids["AC"]=="player1" && $ids["BB"]=="player1" && $ids["CA"])=="player1")
            print_r("ola");
            $checkwinner=1;
            if (($ids["AA"]=="player2" && $ids["BB"]=="player2" && $ids["CC"]=="player2") or ($ids["AC"]=="player2" && $ids["BB"]=="player2" && $ids["CA"]=="player2"))
            print_r("adeus");
            $checkwinner=2;
       }else{
        if ((isset($ids[$letter."A"]) && isset($ids[ $letter."B"]) && isset($ids[ $letter."C"])) or (isset($ids["A".$letter]) && isset( $ids["B".$letter]) && isset($ids["C".$letter]))){
            if(($ids[$letter."A"]=="player1" && $ids[ $letter."B"]=="player1" && $ids[ $letter."C"]=="player1") or ($ids["A".$letter]=="player1" && $ids["A".$letter]=="player1" && $ids["A".$letter]=="player1"))
            print_r("ola");
          $checkwinner=1;
            if(($ids[$letter."A"]=="player2" && $ids[ $letter."B"]=="player2" && $ids[ $letter."C"]=="player2") or ($ids["A".$letter]=="player2" && $ids["A".$letter]=="player2" && $ids["A".$letter]=="player2"))
            print_r("adeus");
          $checkwinner=2;}}
          $letter++;} */

       if ((isset($ids["AA"]) && isset($ids["BB"]) && isset($ids["CC"]))){

              if (($ids["AA"]=="player1" && $ids["BB"]=="player1" && $ids["CC"]=="player1")){

              $checkwinner=1;
              }

             if (($ids["AA"]=="player2" && $ids["BB"]=="player2" && $ids["CC"]=="player2")){
              $checkwinner=2;
            }
        }
        if ((isset($ids["AC"]) && isset($ids["BB"]) && isset($ids["CA"]))){

          if (($ids["AC"]=="player1" && $ids["BB"]=="player1" && $ids["CA"]=="player1")){

          $checkwinner=1;
          }

         if (($ids["AC"]=="player2" && $ids["BB"]=="player2" && $ids["CA"]=="player2")){
          $checkwinner=2;
        }
    }

      if(isset($ids["AA"])  && isset($ids["AB"])  && isset($ids["AC"])){
        echo "AAABAC";
          if($ids["AA"]=="player1" &&  $ids["AB"]=="player1" &&  $ids["AC"]=="player1"){
          $checkwinner=1;}
          if($ids["AA"]=="player2" && $ids["AB"]=="player2" &&  $ids["AC"]=="player2"){
            $checkwinner=2;}}
      if(isset($ids["BA"]) && isset($ids [ "BB"])&& isset($ids[ "BC"])){
          if($ids["BA"]=="player1" && $ids ["BB"]=="player1" && $ids ["BC"]=="player1"){
          $checkwinner=1;}
          if($ids["BA"]=="player2" && $ids ["BB"]=="player2" && $ids ["BC"]=="player2"){
            $checkwinner=2;}}
      if(isset($ids["CA"]) && isset( $ids ["CB"] ) && isset( $ids ["CC"])){
          if($ids["CA"]=="player1" && $ids["CB" ]=="player1" && $ids[ "CC"]=="player1"){
          $checkwinner=1;}
          if($ids["CA"]=="player2" && $ids["CB" ]=="player2" && $ids[ "CC"]=="player2"){
            $checkwinner=2;}}

      if(isset($ids["AA"]) && isset ($ids["BA"])&& isset ($ids["CA"])){
        echo "AABACA";
          if(($ids["AA"])=="player1" &&  $ids["BA"]=="player1" &&  $ids["CA"]=="player1"){
            $checkwinner=1;}
          if(($ids["AA"])=="player2" &&  $ids["BA" ]=="player2" &&  $ids["CA"]=="player2"){
              $checkwinner=2;}}
      if(isset($ids["AB"])&& isset ($ids["BB" ])&& isset ( $ids["CB"])){
          if(($ids["AB"] ) =="player1" && $ids["BB" ] =="player1"&&  $ids["CB"]=="player1"){
            $checkwinner=1;}
          if(($ids["AB"] )=="player2" &&  $ids["BB" ] =="player2" &&  $ids["CB"]=="player2"){
              $checkwinner=2;}}
      if(isset($ids["AC"])&& isset ($ids["BC"])&& isset ($ids["CC"])){
              if(($ids["AC"] ) =="player1" && $ids["BC" ] =="player1"&&  $ids["CC"]=="player1"){
            $checkwinner=1;}
            if(($ids["AC"] )=="player2" &&  $ids["BC" ] =="player2" &&  $ids["CC"]=="player2"){
              $checkwinner=2;}}

      if($times==9  && empty($checkwinner)){
      ?> <script>alert("WE HAVE A TIE!!"); // this is the message in ""
      </script>

    <?php }if(isset($checkwinner)){
        if($checkwinner==1){?>
    <script>alert("WE HAVE A WINNER\nPLAYER NUBMBER 1 CONGRATS!!"); // this is the message in ""
    </script>

    <?php }else{?>

    <script>alert("WE HAVE A WINNER\nPLAYER NUBMBER 2 CONGRATS!!"); // this is the message in ""
      </script>
      <?php }}

            $ids_zip = serialize($ids);
            $ids_zip = urlencode($ids_zip);

         ?>
    <!--  -->
        <!-- 1ªLayer -->
    <!--  -->
        <tr class="AA">
    <!-- 1AAA--> <?php $id='AA'?>      <td>
<input id="AA" type="checkbox" class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=AA&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['AA'])){ ?> checked disabled <?php }} ?>>
                    </td>
    <!-- 1AAB -->    <?php $id='AB'?>    <td>
<input id="AB" type="checkbox"  class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=AB&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['AB'])){ ?> checked disabled <?php }} ?>>
                    </td>
    <!-- 1AAC -->  <?php $id='AC'?>      <td>
<input id="AC" type="checkbox"  class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=AC&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['AC'])){ ?> checked disabled <?php }} ?>>
                    </td>
                </tr>
                <tr class="AB">
    <!-- 1ABA -->   <?php $id='BA'?>     <td>
<input id="BA" type="checkbox" class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=BA&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['BA'])){ ?> checked disabled <?php }} ?>>
                    </td>
    <!-- 1ABB -->  <?php $id='BB'?>      <td>
<input id="BB" type="checkbox"  class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=BB&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['BB'])){ ?> checked disabled <?php }} ?>>
                    </td>
    <!-- 1ABC -->    <?php $id='BC'?>    <td>
<input id="BC" type="checkbox"  class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=BC&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['BC'])){ ?> checked disabled <?php }} ?>>
                    </td>
                </tr>
                <tr class="AC">
    <!-- 1ACA -->     <?php $id='CA'?>   <td>
<input id="CA" type="checkbox"  class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=CA&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['CA'])){ ?> checked disabled <?php }} ?>>
                    </td>
    <!-- 1ACB -->     <?php $id='CB'?>   <td>
<input id="CB" type="checkbox"  class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=CB&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['CB'])){ ?> checked disabled <?php }} ?>>
                    </td>
                    <?php $id='CC'?>     <td>
<input id="CC" type="checkbox"  class="<?php
            if(isset($ids[$id])){
                echo $ids[$id];
            }else{
                 echo "a";} ?>" onclick='window.location=
("http://localhost/Codes/Mega_Jogo_do_Galins/MJG.php?player=<?php $player?>&times=<?php echo $times; ?>&id=CC&ids_zip=<?php echo $ids_zip;?>")'
<?php if (isset($_GET['id'])) { if (isset($ids['CC'])){ ?> checked disabled <?php }} ?>>
                    </td>
                </tr>
  </table>
</table>
<div style="display: flex; justify-content: center;">
        <form action="MJG.php?player=1" method="post">
          <input type="submit" class="btn btn-primary" value="Start Galins Game">
</form>
</div><?php
 /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------   */

} else { ?>
      <div style="display: flex; justify-content: center;">
        <form action="MJG.php?player=1" method="post">
          <input type="submit" class="btn btn-primary" value="Start Galins Game">
        </form>
      </div>

    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9Gkcclass=slK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </form>
      </div>
</body>

</html>