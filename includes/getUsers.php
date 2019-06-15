<?php 

$usuariosNom = $db->select('usuarios', 'usr_nombre');
$usuariosApp = $db->select('usuarios', 'usr_appat');
$IDusuario = $db->select('usuarios', 'usr_id');
for ($i=0; $i < count($usuariosNom); $i++) 
	{ 
?>
    <option value="<?php echo $IDusuario[$i]; ?>" ><?php echo $usuariosNom[$i], ' ', $usuariosApp[$i]; ?></option>
    <?php 
    }
    ?>