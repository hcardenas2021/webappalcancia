
<?php
$tabla='ahorro';

$totalahorrado= ControladorFormularios::ctrtotalahorrado($tabla);
$cantidadm= ControladorFormularios::ctrtotalmonedas($tabla);

$totalahorrado50= ControladorFormularios::ctrtotalahorrado50($tabla);
$cantidadm50= ControladorFormularios::ctrtotalmonedas50($tabla);

$totalahorrado100= ControladorFormularios::ctrtotalahorrado100($tabla);
$cantidadm100= ControladorFormularios::ctrtotalmonedas100($tabla);

$totalahorrado200= ControladorFormularios::ctrtotalahorrado200($tabla);
$cantidadm200= ControladorFormularios::ctrtotalmonedas200($tabla);

$totalahorrado500= ControladorFormularios::ctrtotalahorrado500($tabla);
$cantidadm500= ControladorFormularios::ctrtotalmonedas500($tabla);

$totalahorrado1000= ControladorFormularios::ctrtotalahorrado1000($tabla);
$cantidadm1000= ControladorFormularios::ctrtotalmonedas1000($tabla);

$totala=$totalahorrado['vahorrado'];
$totalm=$cantidadm['cantidadm'];

$totala50=$totalahorrado50['vahorrado50'];
$totalm50=$cantidadm50['cantidadm50'];

$totala100=$totalahorrado100['vahorrado100'];
$totalm100=$cantidadm100['cantidadm100'];

$totala200=$totalahorrado200['vahorrado200'];
$totalm200=$cantidadm200['cantidadm200'];

$totala500=$totalahorrado500['vahorrado500'];
$totalm500=$cantidadm500['cantidadm500'];

$totala1000=$totalahorrado1000['vahorrado1000'];
$totalm1000=$cantidadm1000['cantidadm1000'];
?>
 <script type="text/javascript">  
   $(document).ready(function(){
    $("#vahorrado").click(function(){
       var tipom = $("#tipom").val();
       var cantidadm = $("#cantidadm").val();
       var vahorrado=Math.round(tipom*cantidadm);
       $("#vahorrado").val(vahorrado);
       
});


      });  
</script>
 <section class="section section-sm section-first bg-default">
        <div class="container">
          <h3 class="heading-3" style="text-align: center;">RESUMEN DE MIS AHORROS</h3><br>
         
         <table class="table-bordered table-success" width="100%" style="font-size: 22px">
          <tr>
            <td>Valor total Ahorrado (Pesos Colombianos)</td>
            <td><b>$ <?php echo $totala; ?></b></td>            
          </tr>
          <tr>
            <td>Valor total Ahorrado en Monedas de 50 (Pesos Colombianos)</td>
            <td>$ <?php echo $totala50; ?></td>            
          </tr>
           <tr>
            <td>Valor total Ahorrado en Monedas de 100 (Pesos Colombianos)</td>
            <td>$ <?php echo $totala100; ?></td>            
          </tr>
          <tr>
            <td>Valor total Ahorrado en Monedas de 200 (Pesos Colombianos)</td>
            <td>$ <?php echo $totala200; ?></td>            
          </tr>
          <tr>
            <td>Valor total Ahorrado en Monedas de 500 (Pesos Colombianos)</td>
            <td>$ <?php echo $totala500; ?></td>            
          </tr>
           <tr>
            <td>Valor total Ahorrado en Monedas de 1000 (Pesos Colombianos)</td>
            <td>$ <?php echo $totala1000; ?></td>            
          </tr>
          <tr>
            <td>Cantidad de Monedas Ahorradas</td>
            <td><b><?php echo $totalm; ?></b></td>            
          </tr>
          
          <tr>
            <td>Cantidad de Monedas de 50 Ahorradas</td>
            <td><?php echo $totalm50; ?></td>            
          </tr>
          
          <tr>
            <td>Cantidad de Monedas de 100 Ahorradas</td>
            <td><?php echo $totalm100; ?></td>            
          </tr>
           
          <tr>
            <td>Cantidad de Monedas de 200 Ahorradas</td>
            <td><?php echo $totalm200; ?></td>            
          </tr>
          
          <tr>
            <td>Cantidad de Monedas de 500 Ahorradas</td>
            <td><?php echo $totalm500; ?></td>            
          </tr>
         
           <tr>
            <td>Cantidad de Monedas de 1000 Ahorradas</td>
            <td><?php echo $totalm1000; ?></td>            
          </tr>
          
         </table>
        </div>
      </section>

