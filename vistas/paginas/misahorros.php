
<?php
$ahorros = ControladorFormularios::ctrmostrarahorros();
$tabla='ahorro';
$totalahorrado= ControladorFormularios::ctrtotalahorrado($tabla);
$cantidadm= ControladorFormularios::ctrtotalmonedas($tabla);
$totala=$totalahorrado['vahorrado'];
$totalm=$cantidadm['cantidadm'];

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
          <h3 class="heading-3" style="text-align: center;">MIS AHORROS</h3><br>
         
         <table class="table-bordered table-success" width="100%" style="font-size: 22px">
          <tr>
            <td>Num.</td>
            <td>Fecha</td>
            <td>Tipo de Moneda</td>
            <td>Cantidad de Monedas</td>
            <td>Valor Ahorrado</td>
            <td></td>
            <td></td>
          </tr>
           <?php foreach ($ahorros as $key => $value):?>
            <tr>
            <td><?php echo ($key +1); ?></td>
            <td><?php echo $value["fecha"]; ?></td>
            <td><?php echo $value["tipom"]; ?></td>
            <td><?php echo $value["cantidadm"]; ?></td>
            <td><?php echo $value["vahorrado"]; ?></td> 
            <td> <a href="index.php?pagina=editar&id=<?php echo $value["id"];  ?>" title="Editar" role="button" class="btn btn-success btn-sm" data-toggle="modal" ><i class=" fa fa-edit" ></i></a></td>
                            <td> <a href="#e<?php echo $value['id']; ?>" title="Agregar" role="button" class="btn btn-success btn-sm" data-toggle="modal" >
                              <i class=" fa fa-trash-o" ></i>
                            </a>

                            <div id="e<?php echo $value['id'];; ?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog ">
                                <div class="modal-content">
                                  <form name="fe" id="fe" method="post" action="">

                                 <input type="hidden" name="id" id="id" value="<?php echo $value['id']; ?>">
                                 <input type="text" name="rh" value="<?php echo $value['id']; ?>" style="display:none" ><br>

                                 <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                  </button>
                                  <h5 class="modal-title" id="myModalLabel2"><i class=" fa fa-trash-o" ></i> Eliminar registro de ahorro</h5>
                                </div>
                                <div class="modal-body">
                                  <h6>Confirma Eliminar registro de ahorro?</h6>

                                </div>
                                <?php
                                $registrog = new ControladorFormularios();
                                $registrog-> ctreliminarahorro();       

                                ?>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary"><i class=" fa fa-trash-o" ></i> Eliminar</button>
                                 <button type="button" class="btn btn-success" data-dismiss="modal"><i class=" fa fa-close" ></i> Cerrar</button>
                                 
                               </div>
                             </form>


                             </div>
                           </div>
                         </div>




                          </td>                           
            </tr>
            <?php endforeach ?> 
            </table>
        </div>
      </section>

      
                

