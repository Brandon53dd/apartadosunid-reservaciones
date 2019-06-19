<?php 
require_once '_db.php';

if ($_SERVER['REQUEST_METHOD']== 'POST') {
$fechaServ =$_POST['datepicker-autoclose-inicio'];
$horaserv_inicio =$_POST['timeIn'];
$horaserv_fin=$_POST['timeOut'];
$accesorio =$_POST['accesor'];
$users=$_POST['users'];
$cpsid=$_POST['campus'];

$db->insert('reservaciones', [ 'cps_id'=>$cpsid, 'usr_id'=>$users, 'fecha_serv'=>$fechaServ, 'hora_serv'=>$horaserv_inicio, 'acc_id'=>$accesorio, 'sal_id'=>'', 'active_rsv'=>'1', 'pro_id'=>'2' ]);
}
 ?>
