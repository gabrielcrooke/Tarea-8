<?php

$mensaje= "";
if($_POST){

$sql= "select * from Usuarios where Correo= ? and Clave= ?";

$CI =& get_instance();
$correo= $_POST['email'];
$clave= md5 ($_POST ['clave']);
$rs= $CI->db->query($sql, array($correo, $clave));

$rs= $rs->result();
if(count($rs)>0){

$_SESSION['gale_user']= $rs[0];
  redirect ('Admin');
}else{
$mensaje= "Usuario o clave no validos";

}

}
plantilla::inicio();


 ?>

<div class= "row">
  <div class="col col-sm-4 col-sm-offset-4">
    <form method="post" action="">
    <center><h3>Ingresa al sistema</h3></center>
      <div class="form-group input-group">
        <lable class="input-group-addon">Email:</label>
          <input type="text" name="email" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <lable class="input-group-addon">Clave:</label>
          <input type="password" name="clave" class="form-control"/>
        </div>
        <div>
        <div style= "color:red">

          <?php echo $mensaje; ?>

      </div>
      </div>
      <div class="text-center">
        <button class="btn btn-primary">Ingresar</button>
            </div>
      </from>
  </div>
    </div>
