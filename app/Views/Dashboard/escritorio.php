<?= $this->extend('Views/Dashboard/plantilla'); ?>

<?= $this->section('menu'); ?>


<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="#" onclick="cerrarSesion();" class="nav-link">
              <i class="fas fa-sign-out-alt text-danger"></i>
              <p>Salir</p>
            </a>
          </li>
        </ul>
      </nav>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" >
    function cerrarSesion(){
        Swal.fire({
            title: '¿Estas seguro de cerrar la sesion?',
            text: "La sesion actual se cerrara",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, cerrar sesion'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '<?php echo base_url('cerrarSesion'); ?>'
            }
        })
    };
</script>

<?= $this->endSection(); ?>

<!--FINAL PRIMEEA SECCION-->


<?= $this->section('contenido'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('crear') ?> ">Tus imagenes</a></li>
              <li class="breadcrumb-item active">Escritorio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

</section>

<?= $this->endSection(); ?>