<h1 class="page-header">Panel de control <br>La tienda del motero</h1>


    <a class="btn btn-primary pull-right" href="?c=motos&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        
            <th style="width:100px; background-color: #5DACCD; color:#fff">MARCA</th>
            <th style="width:100px; background-color: #5DACCD; color:#fff">REFERENCIA</th>
            <th style="width:80px; background-color: #5DACCD; color:#fff">MODELO</th>
            <th style="width:100px; background-color: #5DACCD; color:#fff">DE 0 A 1 MES y 29 DIAS</th>
            <th style="width:100px; background-color: #5DACCD; color:#fff">DE 2 A 5 MESES Y 29 DIAS</th>
            <th style="width:100px; background-color: #5DACCD; color:#fff">DE 6 A 10 MESES Y 29 DIAS</th>
            <th style="width:100px; background-color: #5DACCD; color:#fff">DE 11 MESES A NUEVO</th>
            <th style="width:40px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:40px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            
            <td><?php echo $r->marca; ?></td>
            <td><?php echo $r->referencia; ?></td>
            <td><?php echo $r->modelo; ?></td>
            <td><?php echo $r->soat_a; ?></td>
            <td><?php echo $r->soat_b; ?></td>
            <td><?php echo $r->soat_c; ?></td>
            <td><?php echo $r->soat_d; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=motos&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=motos&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
<script  src="assets/js/datatable.js">

</script>


</html>
