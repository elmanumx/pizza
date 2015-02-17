<div class="panel panel-default text-center">
                        <div class="panel-body">


<div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="30%"></th>
                                            <th width="70%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NOMBRE DEL PRODUCTO</td>
                    <td><input type="text" class = "form-control" name="nombre_pro" placeholder="Escriba el nombre del producto"/>
                    </td>
                </tr>
                <tr>
                    <td>DESCRIPCION DEL PRODUCTO</td>
                    <td><input type="text" class ="form-control" name="descripcion_pro" id="descripcion_pro"  placeholder="escriba una descripcion del producto "/>
                    </td>
                </tr>
                <tr>
                    <td>PRECIO DE COMPRA</td>
                    <td><input type="number" min="1" step="0.01" class ="form-control" name="precio_compra" id="precio_compra" placeholder="precio de compra" onfocus="validar(this.id)"/ onkeypress="numero()">
                    </td>
                </tr>
                <tr>
                    <td>PRECIO DE VENTA</td>
                    <td><input type="number" min="1" step="0.01" class ="form-control" name="precio_venta" id="precio_venta"  placeholder="precio de venta" onfocus="validar(this.id)" onkeypress="numero()"/>
                    </td>
                </tr>
                <tr>
                    <td>EXISTENCIA ACTUAL</td>
                    <td><input type="number" min="1"  class ="form-control" name="existencia_act" id="existencia"  placeholder="cantidad actual" onfocus="validar(this.id)" onkeypress="numero()"/>
                    </td>
                </tr>
                <tr>
                    <td>EXISTENCIA MINIMA</td>
                    <td><input type="number" min="1" class ="form-control" name="existencia_min"  placeholder="cantidad minima" id="cantidad minima"  onfocus="validar(this.id)" onkeypress="numero()"/>
                    </td>
                </tr>
                <tr>
                    <td>IMAGEN DEL PRODUCTO</td>
                    <td><input type="file" name="img_pro" required />
                    </td>
                </tr>
               
            </tbody>
            </table>
</div>
</div>

