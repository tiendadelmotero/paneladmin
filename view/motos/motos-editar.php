<h1 class="page-header">
    <?php echo $motos->id != null ? $motos->marca : 'Nuevo Registro'; ?>
</h1>
<ol class="breadcrumb">
  <li><a href="?c=motos">Nuevo</a></li>
  <li class="active"><?php echo $motos->id != null ? $motos->marca : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-motos" action="?c=motos&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $motos->id; ?>" />

    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" value="<?php echo $motos->marca; ?>" class="form-control" placeholder="Ingrese la marca" required>
    </div>

    <div class="form-group">
        <label>referencia</label>
        <input type="text" name="referencia" value="<?php echo $motos->referencia; ?>" class="form-control" placeholder="Ingrese referencia" required>
    </div>

    <div class="form-group">
        <label>modelo</label>
        <input type="text" name="modelo" value="<?php echo $motos->modelo; ?>" class="form-control" placeholder="Ingrese modelo" required>
    </div>
     <div class="form-group">
        <label>DE 0 A 1 MES y 29 DIAS</label>
        <input type="text" name="soat_a" value="<?php echo $motos->soat_a; ?>" class="form-control" placeholder="DE 0 A 1 MES y 29 DIAS" required>
    </div>
    <div class="form-group">
        <label>DE 2 A 5 MESES Y 29 DIAS</label>
        <input type="text" name="soat_b" value="<?php echo $motos->soat_b; ?>" class="form-control" placeholder="DE 2 A 5 MESES Y 29 DIAS" required>
    </div>
    <div class="form-group">
        <label>DE 6 A 10 MESES Y 29 DIAS</label>
        <input type="text" name="soat_c" value="<?php echo $motos->soat_c; ?>" class="form-control" placeholder="DE 6 A 10 MESES Y 29 DIAS" required>
    </div>
    <div class="form-group">
        <label>DE 11 MESES A NUEVO</label>
        <input type="text" name="soat_d" value="<?php echo $motos->soat_d; ?>" class="form-control" placeholder="DE 11 MESES A NUEVO" required>
    </div>


    <hr />

    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-motos").submit(function(){
            return $(this).validate();
        });
    })
</script>
