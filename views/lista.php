<?php


$dados=new Dados();
$dado=$dados->Selecionar_Todos();



?>

 
       <?php
       
       
spl_autoload_register('class_pagination');
      
$params = array(
    'mode'       => 'Sliding',
    'perPage'    => 10,
 
    'itemData'   => $dado
);
$pager = & Pager::factory($params);
$data  = $pager->getPageData();

$d=new ArrayIterator($data);


    
    


       
       ?>

<script>
$(document).ready(function(){



 });

})
</script>



<div class="col-md-9">
      	
      <!-- column 2 -->	
      
     
       <hr>
      
	   
          
			  
              
       <div class="panel panel-default">

<div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-list-alt pull-right"></i>
            <h4 style="text-align: center">Lista de Dispositivos</h4>
          </div>
        </div>
        <div class="panel-body">
<table class="table  table-condensed table-hover table-striped table-bordered">
    
    <caption></caption>
    
    <thead>
        <tr>
 
    <th>Nome</th>
    <th>Empresa</th>
    <th>Contacto</th>
    <th>Maquina</th>
    <th>Marca</th>
    <th>Tipo</th>
    <th>Sistema</th>
    <th>Tecnico</th>
    <th>Data/Entrega</th>
    <th></th>

    
        </tr>
        
        
    </thead>
    <tbody>
        
        
        <?php
               while($d->valid()): 
        ?>
        <tr>
            
            <td><?php echo  $d->current()->Nome; ?></td>
            <td><?php echo  $d->current()->Empresa; ?></td>
            <td><?php echo  $d->current()->Contacto; ?></td>
            <td><?php echo  $d->current()->Nome_w; ?></td>
            <td><?php echo  $d->current()->Marca; ?></td>
            <td><?php echo  $d->current()->Tipo; ?></td>
            <td><?php echo  $d->current()->Nome_s; ?></td>
            <td><?php echo  $d->current()->Nome_t; ?></td>
            <td><?php echo  $d->current()->Data_Entrega; ?></td>
            <td><a href="views/relatorio.php?id=<?php echo  $d->current()->Id; ?>"> ver</a></td>
        </tr>
        
          <?php 
          $d->next();
      endwhile; 
      ?>
        
        
    </tbody>
    
</table>

            
           

        </div>


</div>
       
       
       
       <div>
           <ul class="pagination">
               <li>
            <?php    $links = $pager->getLinks(); 
          
            
            echo $links['all'];
            ?>
           </li>
</ul>
</div>  



