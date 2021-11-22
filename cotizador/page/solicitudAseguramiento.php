<?php
  include("header.php");
?>

  <div class="container">
      <div class="row align-items-center" style="text-align: center">
              <div class="col-md-4">
                  <img src="/cotizador/img/LogoBlanco.jpg" class="img-fluid" alt="max-width: 100%; height: auto;">
              </div>
              <div class="col-md-4">
                  <span style="font-weight: bold; font-size: 1.8em;">Solicitud de aseguramiento</span>
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
    

   <div class="container" >
   <div class="row align-items-start">

    <div class="col-md-4">
         <div class="form-group">
            <label>Ramo :</label>
            <select class="form-control" id="Ramo" name="Ramo"></select>                      
        </div>
    </div>

    <div class="col-md-4">
         <div class="form-group">
            <label>Numero de cotizacion :</label>
            <select class="form-control" id="numCoti" name="numCoti"></select>                      
        </div>
    </div> 
    <div class="col-md-4"> 
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="subshcp" >
        <label class="form-check-label" for="subshcp">Subsidio SHCP:</label>
      </div>
    </div>
   <div class="col-md-4">
         <div class="form-group">
            <label>Subramo :</label>
            <select class="form-control" id="subRamo" name="subRamo"></select>                      
        </div>
    </div>
   <div class="col-md-4">
            <div class="col-sm-12 form-group">
              <label>Fecha de Inspeccion :</label>
              <input type="date" name="" class="form-control">
            </div>
    </div>
   <div class="col-md-4"> 
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="otroApoyo">
        <label class="form-check-label" for="otroApoyo">Otros Apoyos:</label>
      </div>
    </div>
  
   <div class="col-md-4">
         <div class="form-group">
            <label>Producto :</label>
            <select class="form-control" id="Producto" name="Producto"></select>                      
        </div>
    </div>
    <div class="col-md-4">
         <div class="form-group">
            <label>Forma de Pago :</label>
            <select class="form-control" id="formaPago" name="formaPago"></select>                      
        </div>    
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="row align-items-start">
    <div class="col-sm-12">
        <span  class="barra">INFORMACION DEL ASEGURADO</span>
        <br>
        <br>
    </div>

    <div class="row" align="center">
        <div class="col-sm-6">
          <div class="col-sm-8 form-group" > 
              <label>Nombre/Razon Social:</label> 
              <input type="text" name="" class="form-control">
          </div>
        </div>
      <br>
      <br>
        <div class="col-sm-5 form-group" > 
              <label>RFC:</label> 
              <input type="text" name="" class="form-control">
                </div>
              </div>
          <br>
          <div align="center">
              <div class="col-sm-6">
                <div class="col-sm-10 form-group" > 
                    <label>Direccion: (Calle, No.Exterior/Interior, Colonia, Estado, Municipio) </label> 
                    <input type="text" name="" class="form-control">
                </div>
              </div>
          </div>
          <br>
          <br>
        <div class="row" align="center">
            <div class="col-sm-2">
              <div class="col-sm-6 form-group" > 
                  <label>CP:</label> 
                  <input type="text" name="" class="form-control">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="col-sm-6 form-group" > 
                  <label>Lada Telefono:</label> 
                  <input type="text" name="" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-sm-5">
              <div class="col-sm-6 form-group" > 
                  <label>Correo Electronico:</label> 
                  <input type="text" name="" class="form-control">
                </div>
            </div>
       </div>

      <br>
      <br>
      <span  class="barra">BENEFICIARIO REFERENTE</span>
      <br>
      <br>

        <div class="row">
          <div class="col-sm-3">Nombre/Razon Social:</div>
          <div class="col-sm-6">Total:</div>
        </div>

      <br>
      <span class="barra">DATOS PARA FACTURACION</span>
      <br>

      <div class="row">
          <div class="col-sm-4">
            <label><input type="checkbox" class="option-input checkbox" checked />Mismo Contratante</label>
          </div>
        <div class="col-sm-4">
          <label><input type="checkbox" class="option-input checkbox" checked />Otro Especificar</label>
        </div>
        <div class="col-sm-4">
          <div class="col-sm-6 form-group" >
            <label>RFC:</label><input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="col-sm-6 form-group" >
            <label>Nombre/Razon Social:</label><input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="col-sm-6 form-group" >
            <label>Correo Electronico:</label><input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="col-sm-6 form-group" ><label>Codigo Postal:</label><input type="text" name="" class="form-control">
          </div>
        </div> 
    </div>
    <br>
     <span class="barra">DATOS DEL CULTIVO</span>   
        <table class="table table-responsive" id="tablaCultivo">
              <thead>
                  <tr>
                      <th>Ciclo</th>
                      <th>Modalidad</th>
                      <th>Metodo de evaluacion</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                        <label><input type="checkbox" class="option-input checkbox" checked />Primavera-Verano</label>
                      </td>
                      <td>
                        <label><input type="checkbox" class="option-input checkbox" checked />Riego</label>
                      </td>
                      <td>
                        <label><input type="checkbox" class="option-input checkbox" checked />Daño Directo</label>
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <label><input type="checkbox" class="option-input checkbox" checked />Otoño-Invierno</label>
                      </td>
                      <td>
                        <label><input type="checkbox" class="option-input checkbox" checked />Temporal</label>
                      </td>
                      <td>
                        <label><input type="checkbox" class="option-input checkbox" checked />Recoleccion</label>
                      </td>
                  </tr>
                  <tr>
                      <td>
                        <label><input type="checkbox" class="option-input checkbox" checked />Perennes</label>
                      </td>
                      <td>
                        <div class="col-sm-11">
                          <div class="col-sm-6 form-group" ><label>Otro:</label><input type="text" name="" class="form-control">
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="col-sm-11">
                          <div class="col-sm-6 form-group" ><label>Cultivo:</label><input type="text" name="" class="form-control">
                          </div>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-sm-15"><div class="col-sm-6 form-group" ><label>Estado:</label><input type="text" name="" class="form-control">
                      </div>
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-15">
                        <div class="col-sm-6 form-group" ><label>Unidad de Riesgo:</label><input type="text" name="" class="form-control">
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-sm-15">
                        <div class="col-sm-6 form-group" ><label>Municipio:</label><input type="text" name="" class="form-control">
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-16">
                        <div class="col-sm-6 form-group" ><label>Superficie:</label><input type="text" name="" class="form-control">
                        </div>
                      </div>
                    </td>
                  </tr>
            </tbody>
      </table>
          <br>
          <br>
           <span class="barra">DATOS DE COTIZACION</span>
           <table class="table table-responsive" id="tblCotizacion">
            <thead>
                <tr>
                    <th>Suma asegurada por ha.</th>
                    <th>Tarifa</th>
                    <th>Rendimiento (kg. / ha.)</th>
                    <th>Precio por kg. / planta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
               
            </tbody>
        </table>
        <br>
        <br>

         <span class="barra">COSTOS</span>
          <table class="table table-responsive" id="tablCostos">
            <thead>
                <tr>
                    <th>Prima por hectaria</th>
                    <th>Prima total</th>
                    <th>Suma asegurada total</th>
                    <th>Gastos de emision</th>
                </tr>
            </thead>
            <tbody>
               <tr>
                 <td></td>
               </tr>
               
            </tbody>
      </table>
          <h2 align="center">Solicitud de aseguramiento</h2>
          <span class="barra">RIESGOS CUBIERTOS</span>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th></th>
                    <th>Riesgos Cubiertos</th>
                    <th>Deducible</th>
                    <th>Participacion a perdida</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Riesgos antes de la nacencia</td> 
                    <td></td>
                </tr>
                <tr>
                    <td>Bajas temperaturas</td>
                    <td><label><input type="checkbox" class="option-input checkbox"  /></label></td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>
                      Falta de piso para cosechar
                    </td>
                    <td>
                      <label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                   <td>
                   Granizo
                   </td>
                   <td>
                    <label><input type="checkbox" class="option-input checkbox"  /></label>
                   </td>
                   <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                   </td>
                   <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                   </td>
                </tr>
                <tr>
                    <td>
                    Incendio
                  </td>
                    <td>
                      <label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                  <td>
                    Inundacion
                  </td>
                    <td>
                      <label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                     <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>Lluvia</td>
                    <td><label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>Onda Calida</td>
                    <td><label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>Sequia</td>
                    <td><label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>Vientos</td>
                    <td>
                      <label><input type="checkbox" class="option-input checkbox" align="center"/></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>Falta de piso para cosechar</td>
                    <td><label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td>Riesgos antes de la nacencia</td>

                </tr>
                <tr>
                    <td>Enfermedades</td>
                     <td><label><input type="checkbox" class="option-input checkbox"  /></label>
                     </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                </tr>
                <tr>
                    <td>Plagas y depredadores</td>
                    <td>
                      <label><input type="checkbox" class="option-input checkbox"  /></label>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                    </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                </tr>
                <br>
                <br>
                <tr>
                  <td>Riesgos antes de la nacencia </td>
                </tr>
                <tr>
                  <td>Imposibilidad para realizar la siembra</td>
                  <td>
                    <label><input type="checkbox" class="option-input checkbox"  /></label>
                  </td>
                  <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                  </td>
                  <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                  </td>
                </tr>
                <tr>
                  <td>No nacencia</td>
                  <td>
                    <label><input type="checkbox" class="option-input checkbox"  /></label>
                  </td>
                  <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                  </td>
                    <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                </tr>
                <tr>
                  <td>Taponamiento</td>
                   <td>
                    <label><input type="checkbox" class="option-input checkbox"  /></label>
                  </td>
                  <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                  </td>
                  <td>
                      <div class="col-sm-11 form-group" > 
                      <input type="text" name="" class="form-control">
                      </div>
                  </td>
                </tr>
            </tbody>
      </table>
        <span class="barra">OBSERVACIONES</span>
        <div class="col-sm-3 form-group" > 
                <label>Franquicia:</label> 
                <input type="text" name="" class="form-control">
        </div>
        <div class="modal-footer">
               <button type="button"  class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
               <button type="button" class="btn btn-primary" data-dismiss="modal" id="Guardar" name="Guardar">Continuar</button>
        </div>
     </div>
    </div>
 </div>
</div>

<?php
  include("footer.php");
?>