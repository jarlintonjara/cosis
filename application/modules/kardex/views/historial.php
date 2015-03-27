<?php echo $this->load->view('cabecera'); ?>

    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Historial del articulo<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <div id="user-grid" class="grid-view" style="margin: auto;">
                <div class="clear">
                <table class="items table table-striped table-bordered table-condensed">

                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Tipo</a></th>
                        <th>Tipo Operación</th>
                        <th>Cantidad</a></th>
                        <th>Unidad Medida</a></th>
                        <th>Costo Unitario</th>
                        <th>Costo Total</a></th>
                    </tr>
                </thead>

                <tbody>
                <tr class="odd">
                    <td>10/03/2015</td>
                    <td>Factura</td>
                    <td>Ingreso</td>
                    <td>20</td>
                    <td>kg</td>
                    <td>200</td>
                    <td>4000</td>
                </tr>
                <tr class="odd">
                    <td>10/04/2015</td>
                    <td>Recibo Honorario</td>
                    <td>Salida</td>
                    <td>20</td>
                    <td>kg</td>
                    <td>10</td>
                    <td>200</td>
                </tr>
                </tbody>
                </table>
            </div>

         </div>
        </div>
    </div>


