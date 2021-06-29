
<?php
$item='id';
$valor = $_GET["id"];
$ahorro = ControladorFormularios::ctrseleccionarunahorro($item,$valor);
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
          <h3 class="heading-3" style="text-align: center;">ACTUALIZAR AHORRO</h3><br>
         
          <form method="post" action="">
            <div class="row row-20 gutters-20">

              
               <div class="col-md-6 col-lg-6 oh-desktop">
                <div class="form-wrap wow slideInUp">
                  <label >Fecha del Ahorro*</label><br>
                  <input class="form-input" type="date" name="fecha" id="fecha" value="<?php echo $ahorro['fecha']; ?>" required oninvalid="setCustomValidity('Fecha del ahorro Obligatorio')" oninput="setCustomValidity('')">
                  <input type="hidden" name="id" id="id" value="<?php echo $ahorro['id']; ?>">
                 
                </div>
                 </div>
                
              <div class="col-md-6 col-lg-6 oh-desktop">
                <div class="form-wrap wow slideInDown">
                   <label >Valor de la Moneda (Pesos Colombianos) *</label><br>
              <select class="form-input" name="tipom" id="tipom"  required oninvalid="setCustomValidity('Valor de la Moneda Obligatorio')" oninput="setCustomValidity('')">
                    <option value="<?php echo $ahorro['tipom']; ?>"><?php echo $ahorro['tipom']; ?></option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="500">500</option>
                    <option value="1000">1000</option>                 
                    

                  </select>
                   </div>
              </div>
               <div class="col-md-6 col-lg-6 oh-desktop">
                <div class="form-wrap wow slideInUp">
                   <label >Cantidad de Monedas*</label><br>
                  <input class="form-input" type="number" name="cantidadm" id="cantidadm" value="<?php echo $ahorro['cantidadm']; ?>" required oninvalid="setCustomValidity('Cantidad Monedas Obligatorio')" oninput="setCustomValidity('')" >
                  
                </div>
              </div> 
               <div class="col-md-6 col-lg-6 oh-desktop">
                <div class="form-wrap wow slideInUp">
                   <label >Valor Ahorrado (Pesos Colombianos)*</label><br>
                  <input class="form-input" type="number" name="vahorrado" id="vahorrado" value="<?php echo $ahorro['vahorrado']; ?>" required readonly oninvalid="setCustomValidity('Valor ahorrado Obligatorio')" oninput="setCustomValidity('')" >
                  
                </div>
              </div>   
                            
            <?php
            $registrog = new ControladorFormularios();
            $registrog-> ctrlactualizarahorro();       

            ?>
           </div>
            <div class="group-custom-1 group-middle oh-desktop">
              <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Actualizar Ahorro</button>
              <!-- Quote Classic-->
             
            </div>
          </form>
        </div>
      </section>

