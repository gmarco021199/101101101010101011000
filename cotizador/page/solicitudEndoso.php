<?php
  include("header.php");
?>
    <div class="container">
      <div class="row align-items-center" style="text-align: center">
              <div class="col-md-4">
                  <img src="/cotizador/img/LogoBlanco.jpg" class="img-fluid" alt="max-width: 100%; height: auto;">
              </div>
              <div class="col-md-4">
                  <span style="font-weight: bold; font-size: 1.8em;">Solicitud de endoso</span>
              </div>
              <div class="col-md-4" >
                  <span id="reloj"  ></span> 
              </div>
      </div>
  </div>
  <br>
  <br>

   <div align="center">
      <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
      </svg>
    </a>
  </div>
    

    <div class="container">
      <div class="row align-items-start">
          <div class="col-md-4">
              <div class="form-group">
                <label>No. de póliza :</label>
                <select class="form-control" id="Ramo" name="Ramo"></select>                      
              </div>
          </div>
          <br>
            <div class="col-md-4">
             <div class="form-group">
                <label>Nombre completo / Razón social del asegurado  :</label>
                <select class="form-control" id="numCoti" name="numCoti"></select>                      
          </div>
        </div> 
    </div>

   <div class="container">
    <br>
    <br>
    <div class="container">
      <span class="barra">Tipo de endoso y/o modificación</span>
    <br>
    <div>
      <ol>
          <li><input type="checkbox" class="option-input checkbox"  />  Aumento de incisos (Anexar Relación de Incisos)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Aumento de unidades aseguradas (Anexar Relación de incisos)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Aumento de suma asegurada (Anexar nueva cotización)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Disminución de suma asegurada (Detallar motivo en observaciones)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Disminución de unidades aseguradas(Detallar motivo en observaciones)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Ampliación de vigencia (Detallar motivo en observaciones)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Cambio de beneficiario preferente (Anexar Conoce a tu cliente y documentaión Artículo 140</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Cambio de domicilio fiscal (Anexar comprobante de domicilio y Conoce a tu cliente actualizado)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Cancelación (Detallar motivo en observaciones)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Rehabilitación(Anexar comprobante de pago)</li>
          <li><input type="checkbox" class="option-input checkbox"  />  Otro (Detallar en observaciones)</li>
      </ol>
    </div>

    <br>
    <br>

    <span class="barra">Llenar la siguiente tabla en caso de aumento ó  disminución de unidades o suma asegurada: </span>
    <table class="table table-responsive table-striped">
          <thead>
              <tr>
                  <th></th>
                  <th>Datos actuales:</th>
                  <th>Datos de aumento o disminución:</th>
                  <th>Datos finales</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Unidades o superficie</td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
              </tr>
              <tr>
                  <td>Suma asegurada</td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
              </tr>
          </tbody>
    </table>

   <br>
    <span class="barra">Observaciones: </span>
   <br>
   
   <div class="col-sm-6 form-group">
      <textarea class="form-control" rows="10r"></textarea>
        </div>
                </div>
                    <div class="modal-footer">
                    <button type="button"  class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="Guardar" name="Guardar">Continuar</button>
                </div>

        </div>
    </div>

<?php
  include("footer.php");
?>