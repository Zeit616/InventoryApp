<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Carga masiva de productos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Carga masiva de productos</li>
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
            <h3 class="card-title">Seleccionar archivo de carga (Documento Excel)</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form action="POST" enctype="multipart/form-data" id="form_carga_productos">
              <div class="row">
                <div class="col-lg-10">
                  <input type="file" name="fileProductos" id="fileProductos" class="form-control" accept=".xls, .xlsx"></input>
                </div>
                <div class="col-lg-2">
                  <input type="submit" value="Cargar archivo" class="btn btn-primary" id="btnCargar">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mx-0">
      <div class="col-lg-12 text-center mx-0">
        <img id="img_carga" src="vistas/assets/imagenes/loading.gif" alt="" style="display: none;">
      </div>
    </div>

  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
  $(document).ready(function() {

    $("#form_carga_productos").on("submit", function(e) {
      e.preventDefault();

      if ($("#fileProductos").get(0).files.length == 0) {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Debe seleccionar un archivo (Excel).",
          showConfirmButton: false,
          timer: 2500
        })
      } else {
        var extensiones_permitidas = [".xls", ".xlsx"];
        var input_file_productos = $("#fileProductos");
        var exp_reg = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + extensiones_permitidas.join("|") + ")$");

        if (!exp_reg.test(input_file_productos.val().toLowerCase())) {
          Swal.fire({
            position: "center",
            icon: "warning",
            title: "Debe seleccionar un archivo con las extensiones .xls o .xlsx (Excel).",
            showConfirmButton: false,
            timer: 2500
          })

          return false;

        }

        var datos = new FormData($(form_carga_productos)[0]);

        $("#btnCargar").prop("disabled", true);
        $("#img_carga").attr("style", "display:block");
        $("#img_carga").attr("style", "height:200px");
        $("#img_carga").attr("style", "width:200px");

        $.ajax({

          url: "ajax/productos.ajax.php",
          type: "POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          dataType: "json",

          success: function(respuesta) {

            if (respuesta["totalCategorias"] > 0 && respuesta["totalProductos"] > 0) {
              Swal.fire({
                position: "center",
                icon: "success",
                title: "Se registraron " + respuesta["totalCategorias"] + " categorias y " + respuesta["totalProductos"] + " productos correctamente",
                showConfirmButton: false,
                timer: 2500
              })
              $("#btnCargar").prop("disabled", false);
              $("#img_carga").attr("style", "display:none");
            } else {
              Swal.fire({
                position: "center",
                icon: "error",
                title: "Se presento un error al momento de realizar el registro",
                showConfirmButton: false,
                timer: 2500
              })
              $("#btnCargar").prop("disabled", false);
              $("#img_carga").attr("style", "display:none");
            }

          }





        });

      }
    })

  });
</script>