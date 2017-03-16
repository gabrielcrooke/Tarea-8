<?php

plantilla::inicio();

$CI =& get_instance();

$sql= "select * from imagenes where id= ?";

$rs= $CI->db->query($sql, array($cod));



$rs= $rs->result();
if(count($rs)== 0){

  redirect('web');
}


$imagen = $rs[0];


 ?>
 <div class="text-center">
<h1><?php echo $imagen->nombre ?></h1>
<img class= "img-responsive" src=<?php echo base_url("fotos/{$imagen->id}.jpg""); ?>"/>
<h3>
<?php echo $imagen->comentario; ?>
</h3>
 </div>
