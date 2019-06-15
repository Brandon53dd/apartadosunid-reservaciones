<?php 
    include '_db.php';

    $accesorio = $db->select('accesorios', 'acc_nombre', ['acc_status'=>1]);
    $IDaccesorio = $db->select('accesorios', 'acc_id', ['acc_status'=>1]);
	for ($i=0; $i < count($accesorio); $i++) 
	{ 
?>
    <option value="<?php echo $IDaccesorio[$i]; ?>" ><?php echo $accesorio[$i]; ?></option>
    <?php 
    }
    ?>