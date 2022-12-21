<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Inventario / Productos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Inventario / Productos</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Criterios de búsqueda</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div style="width: 100%; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">

              <div class="mx-1 ">
                <label for="iptCodigoBarras" class="form-label">Ingresar codigo:</label>
                <input class="form-control" type="text" id="iptCodigoBarras" class="form-control" placeholder="Ingresar codigo:" data-index="2" style="margin-top:8px; margin-bottom: 8px; height:50px;">
              </div>
              <div class="mx-1 ">
                <label for="iptCategoria" class="form-label">Ingresar Categoria:</label>
                <input type="text" id="iptCategoria" class="form-control" placeholder="Ingresar Categoria:" data-index="4" style="margin-top:8px; margin-bottom: 8px; height:50px;">
              </div>
              <div class="mx-1 ">
                <label for="iptProducto" class="form-label">Ingresar nombre del producto:</label>
                <input type="text" id="iptProducto" class="form-control" placeholder="Ingresar nombre del producto:" data-index="5" style="margin-top:8px; margin-bottom: 8px; height:50px;">
              </div>
              <div class="mx-1 ">
                <label for="iptPrecioVentaDesde" class="form-label">Ingresar venta desde:</label>
                <input type="text" id="iptPrecioVentaDesde" class="form-control" placeholder="Ingresar venta desde:" style="margin-top:8px; margin-bottom: 8px; height:50px;">
              </div>
              <div class="mx-1 ">
                <label for="iptPrecioVentaHasta" class="form-label">Ingresar venta hasta:</label>
                <input type="text" id="iptPrecioVentaHasta" class="form-control" placeholder="Ingresar venta hasta:" style="margin-top:8px; margin-bottom: 8px; height:50px;">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <table id="tbl_productos" class="table table-striped w-100 shadow">
        <thead class="bg-info">
          <tr>
            <th></th>
            <th>id</th>
            <th>Codigo</th>
            <th>Id Categoria</th>
            <th>Categoria</th>
            <th>Producto</th>
            <th>P. Compra</th>
            <th>P. Venta</th>
            <th>Utilidad</th>
            <th>Stock</th>
            <th>Min. Stock</th>
            <th>Ventas</th>
            <th>Fecha Creacion</th>
            <th>Fecha Actualizacion</th>
            <th class="text-center">Opciones</th>
          </tr>
        </thead>
        <tbody class="text-small">

        </tbody>
      </table>
    </div>
  </div>
</div><!-- /.container-fluid -->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-gray py-1 align-items-center">
        <h5 class="modal-title">Registrar nuevo producto</h5>
        <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
          <i class="far fa-times-circle"></i>
        </button>
      </div>
      <div class="modal-body">
        <form action="" class="needs-validation" novalidate>
          <div class="row">
            <!--Input Codigo de barras-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mb-2">
                <label for="iptCodigoReg">
                  <i class="fas fa-barcode fs-6"></i>
                  <span class="small">Código de barras</span><span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control form-control-sm" id="iptCodigoReg" name="iptCodigoReg" placeholder="Ingrese el Código de barras" required>
                <div class="invalid-feedback">Debe ingresar el codigo de barras</div>
              </div>
            </div>
            <!--Input Categorias-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mb-2">
                <label for="selCategoriaReg">
                  <i class="fas fa-dumpster fs-6"></i>
                  <span class="small">Categoría</span><span class="text-danger">*</span>
                </label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selCategoriaReg" required></select>
                <div class="invalid-feedback">Debe seleccionar una categoría</div>
              </div>
            </div>
            <!--Input descripcion del producto-->
            <div class="col-12">
              <div class="form-group mb-2">
                <label for="iptDescripcionReg">
                  <i class="fas fa-file-signature fs-6"></i>
                  <span class="small">Descripcion del producto</span><span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control form-control-sm" id="iptDescripcionReg" name="" placeholder="Ingrese la descripcion del producto" required>
                <div class="invalid-feedback">Debe ingresar una descripcion para el producto</div>
              </div>
            </div>
            <!--Input precio de compra-->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="form-group mb-2">
                <label for="iptPrecioCompraReg">
                  <i class="fas fa-dollar-sign fs-6"></i>
                  <span class="small">Precio de compra</span><span class="text-danger">*</span>
                </label>
                <input type="number" step=".01" min="0" class="form-control form-control-sm" id="iptPrecioCompraReg" placeholder="Ingrese el precio de compra" required>
                <div class="invalid-feedback">Debe ingresar un precio de compra</div>
              </div>
            </div>
            <!--Input precio de venta-->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="form-group mb-2">
                <label for="iptPrecioVentaReg">
                  <i class="fas fa-dollar-sign fs-6"></i>
                  <span class="small">Precio de venta</span><span class="text-danger">*</span>
                </label>
                <input type="number" step=".01" min="0" class="form-control form-control-sm" id="iptPrecioVentaReg" placeholder="Ingrese el precio de venta" required>
                <div class="invalid-feedback">Debe ingresar un precio de venta</div>
              </div>
            </div>
            <!--Input utilidad-->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="form-group mb-2">
                <label for="iptUtilidadReg">
                  <i class="fas fa-dollar-sign fs-6"></i>
                  <span class="small">Utilidad</span>
                </label>
                <input type="number" min="0" class="form-control form-control-sm" id="iptUtilidadReg" placeholder="Utilidad" disabled>
              </div>
            </div>
            <!--Input stock-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mb-2">
                <label for="iptStockReg">
                  <i class="fas fa-plus-circle fs-6"></i>
                  <span class="small">Stock</span><span class="text-danger">*</span>
                </label>
                <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg" placeholder="Ingrese el stock existente" required>
                <div class="invalid-feedback">Debe ingresar el stock del producto</div>
              </div>
            </div>
            <!--Input stock minimo-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mb-2">
                <label for="iptMinimoStockReg">
                  <i class="fas fa-minus-circle fs-6"></i>
                  <span class="small">Stock mínimo</span><span class="text-danger">*</span>
                </label>
                <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg" placeholder="Stock mínimo" required>
                <div class="invalid-feedback">Debe ingresar el stock minimo</div>
              </div>
            </div>
            <!--Botones-->
            <button type="button" class="btn btn-danger mt-3 mx-2" style="width: 170px;" data-bs-dismiss="modal" id="btnCancelarRegistro">
              Cancelar
            </button>
            <button type="button" class="btn btn-primary mt-3 mx-2" style="width: 170px;" id="btnGuardarProducto">
              Guardar producto
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->

<div class="modal fade" id="mdlGestionarStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-gray py-2">
        <h6 class="modal-title" id="titulo_modal_stock">Adicionar Stock</h6>
        <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalStock"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 mb-3">
            <label for="" class="form-label text-primary d-block">Codigo: <span id="stock_codigoProducto" class="text-secondary"></span></label>
            <label for="" class="form-label text-primary d-block">Producto: <span id="stock_Producto" class="text-secondary"></span></label>
            <label for="" class="form-label text-primary d-block">Stock: <span id="stock_Stock" class="text-secondary"></span></label>
          </div>
          <div class="col-12">
            <div class="form-group mb-2">
              <label for="iptStockSumar"><i class="fas fa-plus-circle fs-6"></i> <span class="small" id="titulo_modal_label">Agregar al Stock</span></label>
              <input type="number" min="0" class="form-control form-control-sm" id="iptStockSumar" placeholder="Ingrese la cantidad a agregar al Stock">
            </div>
          </div>
          <div class="col-12">
            <label for="" class="form-label text-danger">Nuevo Stock: <span id="stock_NuevoStock" class="text-secondary"></span></label><br>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" id="btnCancelarRegistroStock">Cancelar</button>
        <button type="button" class="btn btn-primary btn-sm" id="btnGuardarNuevorStock">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script>
  var accion;
  var table;
  var operacion_stock = 0; // permitar definir si vamos a sumar o restar al stock (1: sumar, 2:restar)

  /*===================================================================*/
  //INICIALIZAMOS EL MENSAJE DE TIPO TOAST (EMERGENTE EN LA PARTE SUPERIOR)
  /*===================================================================*/
  var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
  });

  $(document).ready(function() {


    /*===================================================================*/
    //PRUEBAS AJAX
    /*===================================================================*/
    // $.ajax({
    //     url: "ajax/productos.ajax.php",
    //     type: "POST",
    //     data: {
    //         'accion': 1 //1: LISTAR PRODUCTOS
    //     },
    //     dataType: 'json',
    //     success: function(respuesta) {
    //         console.log("respuesta", respuesta);
    //     }
    // });

    /*===================================================================*/
    //SOLICITUD AJAX PARA CARGAR SELECT DE CATEGORIAS
    /*===================================================================*/
    $.ajax({
      url: "ajax/categorias.ajax.php",
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(respuesta) {

        var options = '<option selected value="">Seleccione una categoría</option>';

        for (let index = 0; index < respuesta.length; index++) {
          options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][
            1
          ] + '</option>';
        }

        $("#selCategoriaReg").append(options);
      }
    });

    /*===================================================================*/
    // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
    /*===================================================================*/
    table = $("#tbl_productos").DataTable({
      dom: 'Bfrtip',
      buttons: [{
          text: 'Agregar Producto',
          className: 'addNewRecord',
          action: function(e, dt, node, config) {
            $("#mdlGestionarProducto").modal('show');
            accion = 2; //registrar
          }
        },
        'excel', 'print', 'pageLength'
      ],
      pageLength: [5, 10, 15, 30, 50, 100],
      pageLength: 10,
      ajax: {
        url: "ajax/productos.ajax.php",
        dataSrc: '',
        type: "POST",
        data: {
          'accion': 1 //1: LISTAR PRODUCTOS
        },
      },
      responsive: {
        details: {
          type: 'column'
        }
      },
      columnDefs: [{
          targets: 0,
          orderable: false,
          className: 'control'
        },
        {
          targets: 1,
          visible: false
        },
        {
          targets: 3,
          visible: false
        },
        {
          targets: 9,
          createdCell: function(td, cellData, rowData, row, col) {
            if (parseFloat(rowData[9]) <= parseFloat(rowData[10])) {
              $(td).parent().css('background', '#FF5733')
              $(td).parent().css('color', '#ffffff')
            }
          }
        },
        {
          targets: 11,
          visible: false
        },
        {
          targets: 12,
          visible: false
        },
        {
          targets: 13,
          visible: false
        },
        {
          targets: 14,
          orderable: false,
          render: function(data, type, full, meta) {
            return "<center>" +
              "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-pencil-alt fs-5'></i>" +
              "</span>" +
              "<span class='btnAumentarStock text-success px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-plus-circle fs-5'></i>" +
              "</span>" +
              "<span class='btnDisminuirStock text-warning px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-minus-circle fs-5'></i>" +
              "</span>" +
              "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-trash fs-5'></i>" +
              "</span>" +
              "</center>"
          }
        }

      ],
      language: {
        url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
      }
    });

    /*===================================================================*/
    // EVENTOS PARA CRITERIOS DE BUSQUEDA (CODIGO, CATEGORIA Y PRODUCTO)
    /*===================================================================*/
    $("#iptCodigoBarras").keyup(function() {
      table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptCategoria").keyup(function() {
      table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptProducto").keyup(function() {
      table.column($(this).data('index')).search(this.value).draw();
    })

    /*===================================================================*/
    // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
    /*===================================================================*/
    $("#iptPrecioVentaDesde, #iptPrecioVentaHasta").keyup(function() {
      table.draw();
    })

    $.fn.dataTable.ext.search.push(

      function(settings, data, dataIndex) {

        var precioDesde = parseFloat($("#iptPrecioVentaDesde").val());
        var precioHasta = parseFloat($("#iptPrecioVentaHasta").val());

        var col_venta = parseFloat(data[7]);

        if ((isNaN(precioDesde) && isNaN(precioHasta)) ||
          (isNaN(precioDesde) && col_venta <= precioHasta) ||
          (precioDesde <= col_venta && isNaN(precioHasta)) ||
          (precioDesde <= col_venta && col_venta <= precioHasta)) {
          return true;
        }

        return false;
      }
    )

    /*===================================================================*/
    // EVENTO PARA LIMPIAR INPUTS DE CRITERIOS DE BUSQUEDA
    /*===================================================================*/
    $("#btnLimpiarBusqueda").on('click', function() {

      $("#iptCodigoBarras").val('')
      $("#iptCategoria").val('')
      $("#iptProducto").val('')
      $("#iptPrecioVentaDesde").val('')
      $("#iptPrecioVentaHasta").val('')

      table.search('').columns().search('').draw();
    })

    $("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {

      $("#validate_codigo").css("display", "none");
      $("#validate_categoria").css("display", "none");
      $("#validate_descripcion").css("display", "none");
      $("#validate_precio_compra").css("display", "none");
      $("#validate_precio_venta").css("display", "none");
      $("#validate_stock").css("display", "none");
      $("#validate_min_stock").css("display", "none");

      $("#iptCodigoReg").val("");
      $("#selCategoriaReg").val(0);
      $("#iptDescripcionReg").val("");
      $("#iptPrecioCompraReg").val("");
      $("#iptPrecioVentaReg").val("");
      $("#iptUtilidadReg").val("");
      $("#iptStockReg").val("");
      $("#iptMinimoStockReg").val("");

    })

    /*===================================================================*/
    //EVENTO PARA CALCULAR LA UTILIDAD AL DIGITAR SOBRE LOS INPUT'S
    /*===================================================================*/
    $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function() {
      calcularUtilidad();
    });

    /*===================================================================*/
    //EVENTO PARA CALCULAR LA UTILIDAD AL CAMBIAR EL CONTENIDO (PERDER FOCUS)
    /*===================================================================*/
    $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function() {
      calcularUtilidad();
    });

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON AUMENTAR STOCK
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnAumentarStock', function() {

      operacion_stock = 1; //sumar stock
      accion = 3;

      $("#mdlGestionarStock").modal('show'); //MOSTRAR VENTANA MODAL

      $("#titulo_modal_stock").html('Aumentar Stock'); // CAMBIAR EL TITULO DE LA VENTANA MODAL
      $("#titulo_modal_label").html('Agregar al Stock'); // CAMBIAR EL TEXTO DEL LABEL DEL INPUT PARA INGRESO DE STOCK
      $("#iptStockSumar").attr("placeholder", "Ingrese cantidad a agregar al Stock"); //CAMBIAR EL PLACEHOLDER 

      var data = table.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE

      $("#stock_codigoProducto").html(data[2]) //CODIGO DEL PRODUCTO DEL DATATABLE
      $("#stock_Producto").html(data[5]) //NOMBRE DEL PRODUCTO DEL DATATABLE
      $("#stock_Stock").html(data[9]) //STOCK ACTUAL DEL PRODUCTO DEL DATATABLE

      $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

    })

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON DISMINUIR STOCK
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnDisminuirStock', function() {

      operacion_stock = 2; //restar stock
      accion = 3;
      $("#mdlGestionarStock").modal('show'); //MOSTRAR VENTANA MODAL

      $("#titulo_modal_stock").html('Disminuir Stock'); // CAMBIAR EL TITULO DE LA VENTANA MODAL
      $("#titulo_modal_label").html('Disminuir al Stock'); // CAMBIAR EL TEXTO DEL LABEL DEL INPUT PARA INGRESO DE STOCK
      $("#iptStockSumar").attr("placeholder", "Ingrese cantidad a disminuir al Stock"); //CAMBIAR EL PLACEHOLDER 


      var data = table.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE

      $("#stock_codigoProducto").html(data[2]) //CODIGO DEL PRODUCTO DEL DATATABLE
      $("#stock_Producto").html(data[4]) //NOMBRE DEL PRODUCTO DEL DATATABLE
      $("#stock_Stock").html(data[9]) //STOCK ACTUAL DEL PRODUCTO DEL DATATABLE

      $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

    })

    /* ======================================================================================
    EVENTO QUE LIMPIA EL INPUT DE INGRESO DE STOCK AL CERRAR LA VENTANA MODAL
    =========================================================================================*/
    $("#btnCancelarRegistroStock, #btnCerrarModalStock").on('click', function() {
      $("#iptStockSumar").val("")
    })

    /* ======================================================================================
    EVENTO AL DIGITAR LA CANTIDAD A AUMENTAR O DISMINUIR DEL STOCK
    =========================================================================================*/
    $("#iptStockSumar").keyup(function() {

      // console.log($("#iptStockSumar").val());

      if (operacion_stock == 1) {

        if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

          var stockActual = parseFloat($("#stock_Stock").html());
          var cantidadAgregar = parseFloat($("#iptStockSumar").val());

          $("#stock_NuevoStock").html(stockActual + cantidadAgregar);

        } else {

          Toast.fire({
            icon: 'warning',
            title: 'Ingrese un valor mayor a 0'
          });
          $("#iptStockSumar").val("")
          $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

        }

      } else {

        if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

          var stockActual = parseFloat($("#stock_Stock").html());
          var cantidadAgregar = parseFloat($("#iptStockSumar").val());

          $("#stock_NuevoStock").html(stockActual - cantidadAgregar);

          if (parseInt($("#stock_NuevoStock").html()) < 0) {

            Toast.fire({
              icon: 'warning',
              title: 'La cantidad a disminuir no puede ser mayor al stock actual (Nuevo stock < 0)'
            });

            $("#iptStockSumar").val("");
            $("#iptStockSumar").focus();
            $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
          }
        } else {

          Toast.fire({
            icon: 'warning',
            title: 'Ingrese un valor mayor a 0'
          });

          $("#iptStockSumar").val("")
          $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
        }
      }

    })

    /* ======================================================================================
    EVENTO QUE REGISTRA EN BD EL AUMENTO O DISMINUCION DE STOCK
    =========================================================================================*/
    $("#btnGuardarNuevorStock").on('click', function() {

      if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

        var nuevoStock = parseFloat($("#stock_NuevoStock").html()),
          codigo_producto = $("#stock_codigoProducto").html();

        var datos = new FormData();

        datos.append('accion', accion);
        datos.append('nuevoStock', nuevoStock);
        datos.append('codigo_producto', codigo_producto);

        $.ajax({
          url: "ajax/productos.ajax.php",
          method: "POST",
          data: datos,
          processData: false,
          contentType: false,
          dataType: 'json',
          success: function(respuesta) {

            $("#stock_NuevoStock").html("");
            $("#iptStockSumar").val("");

            $("#mdlGestionarStock").modal('hide');

            table.ajax.reload();

            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Se actualizó el stock correctamente.!',
              showConfirmButton: false,
              timer: 1500
            })

          }
        });

      } else {
        Toast.fire({
          icon: 'warning',
          title: 'Debe ingresar la cantidad a aumentar'
        });
      }

    })

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnEditarProducto', function() {

      accion = 4; //seteamos la accion para editar

      $("#mdlGestionarProducto").modal('show');

      var data = table.row($(this).parents('tr')).data();

      if (table.row(this).child.isShown()) { //cuando esta en tamaño responsivo
        var data = table.row(this).data();
      }
      
      console.log("🚀 ~ file: productos.php ~ line 751 ~ $ ~ data", data)

      $("#iptCodigoReg").val(data["codigo_producto"]);
      $("#selCategoriaReg").val(data[3]);
      $("#iptDescripcionReg").val(data[5]);
      $("#iptPrecioCompraReg").val(data[6]);
      $("#iptPrecioVentaReg").val(data[7]);
      $("#iptUtilidadReg").val(data[8]);
      $("#iptStockReg").val(data[9].replace(' Und(s)', '').replace(' Kg(s)', ''));
      $("#iptMinimoStockReg").val(data[10].replace(' Und(s)', '').replace(' Kg(s)', ''));

    })

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnEliminarProducto', function() {

      accion = 5; //seteamos la accion para editar

      var data = table.row($(this).parents('tr')).data();

      var codigo_producto = data["codigo_producto"];

      Swal.fire({
        title: 'Está seguro de eliminar el producto?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, deseo eliminarlo!',
        cancelButtonText: 'Cancelar',
      }).then((result) => {

        if (result.isConfirmed) {

          var datos = new FormData();

          datos.append("accion", accion);
          datos.append("codigo_producto", codigo_producto); //codigo_producto               

          $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {

              if (respuesta == "ok") {

                Toast.fire({
                  icon: 'success',
                  title: 'El producto se eliminó correctamente'
                });

                table.ajax.reload();

              } else {
                Toast.fire({
                  icon: 'error',
                  title: 'El producto no se pudo eliminar'
                });
              }

            }
          });

        }
      })
    })


  });

  // CALCULA LA UTILIDAD
  function calcularUtilidad() {

    var iptPrecioCompraReg = $("#iptPrecioCompraReg").val();
    var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();
    var Utilidad = iptPrecioVentaReg - iptPrecioCompraReg;

    $("#iptUtilidadReg").val(Utilidad.toFixed(2));

  }

  /*===================================================================*/
  //EVENTO QUE GUARDA LOS DATOS DEL PRODUCTO, PREVIA VALIDACION DEL INGRESO DE LOS DATOS OBLIGATORIOS
  /*===================================================================*/
  document.getElementById("btnGuardarProducto").addEventListener("click", function() {

    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {

      if (form.checkValidity() === true) {

        console.log("Listo para registrar el producto")

        Swal.fire({
          title: 'Está seguro de registrar el producto?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, deseo registrarlo!',
          cancelButtonText: 'Cancelar',
        }).then((result) => {

          if (result.isConfirmed) {

            var datos = new FormData();

            datos.append("accion", accion);
            datos.append("codigo_producto", $("#iptCodigoReg").val()); //codigo_producto
            datos.append("id_categoria_producto", $("#selCategoriaReg").val()); //id_categoria_producto
            datos.append("descripcion_producto", $("#iptDescripcionReg").val()); //descripcion_producto
            datos.append("precio_compra_producto", $("#iptPrecioCompraReg").val()); //precio_compra_producto
            datos.append("precio_venta_producto", $("#iptPrecioVentaReg").val()); //precio_venta_producto
            datos.append("utilidad", $("#iptUtilidadReg").val()); //utilidad
            datos.append("stock_producto", $("#iptStockReg").val()); //stock_producto
            datos.append("minimo_stock_producto", $("#iptMinimoStockReg").val()); //minimo_stock_producto  
            datos.append("ventas_producto", 0); //ventas_producto

            if (accion == 2) {
              var titulo_msj = "El producto se registró correctamente"
            }

            if (accion == 4) {
              var titulo_msj = "El producto se actualizó correctamente"
            }

            $.ajax({
              url: "ajax/productos.ajax.php",
              method: "POST",
              data: datos,
              cache: false,
              contentType: false,
              processData: false,
              dataType: 'json',
              success: function(respuesta) {

                if (respuesta == "ok") {

                  Toast.fire({
                    icon: 'success',
                    title: titulo_msj
                  });

                  table.ajax.reload();

                  $("#mdlGestionarProducto").modal('hide');

                  $("#iptCodigoReg").val("");
                  $("#selCategoriaReg").val(0);
                  $("#iptDescripcionReg").val("");
                  $("#iptPrecioCompraReg").val("");
                  $("#iptPrecioVentaReg").val("");
                  $("#iptUtilidadReg").val("");
                  $("#iptStockReg").val("");
                  $("#iptMinimoStockReg").val("");

                } else {
                  Toast.fire({
                    icon: 'error',
                    title: 'El producto no se pudo registrar'
                  });
                }

              }
            });

          }
        })
      } else {
        console.log("No paso la validacion")
      }

      form.classList.add('was-validated');

    });
  });


  /*===================================================================*/
  //EVENTO QUE LIMPIA LOS MENSAJES DE ALERTA DE INGRESO DE DATOS DE CADA INPUT AL CANCELAR LA VENTANA MODAL
  /*===================================================================*/
  document.getElementById("btnCancelarRegistro").addEventListener("click", function() {
    $(".needs-validation").removeClass("was-validated");
  })
</script>