
<?php 

$campusNom = $db->select('Campus', 'cps_nombre');
$IDcampus = $db->select('Campus', 'cps_id');
for ($i=0; $i < count($IDcampus); $i++) 
	{ 
?>
    <option value="<?php echo $IDcampus[$i]; ?>" ><?php echo $campusNom[$i];?></option>
    <?php 
    }
    ?>


