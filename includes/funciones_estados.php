<?php  

    require_once '_db.php';
    if(isset($_POST["accion"])){
	    switch ($_POST["accion"]) {
            case 'insertar_estados':
                insertar_estados();
            break;                
            case 'consultar_estados':
                consultar_estados($_POST["id"]);
            break;
            case 'eliminar_estados':
                eliminar_estados($_POST["id"]);
            break;   
            case 'editar_estados':
                editar_estados();
            break;  
            case 'mostrar_estados':
                mostrar_estados();
            break;                  
            
        }
    }

    function insertar_estados(){
        global $db;
        extract($_POST);

        $insertar=$db ->insert("Estados",[
                                        "est_nombre"=>$name,
                                        "est_abrev"=>$abrev,
                                        "est_status"=>$status,
                                        ],["est_id"=>$id]);
        if($insertar){
            echo "Registro existoso";
        }else{
            echo "Se ocasiono un error";
	    }
        return;
    }

    function consultar_estados($id){
        global $db;
        
        $consultar = $db -> get("Estados","*",["AND" => [ "est_id"=>$id]]);
        echo json_encode($consultar);

    }

    function eliminar_estados($id){
        global $db;
        $eliminar = $db->delete("Estados",["est_id" => $id]);
        if($eliminar){
            echo "Registro eliminado";
        }else{
            echo "registro eliminado";
        }
    }

   function editar_estados(){
        global $db;
        extract($_POST);
        
         $editar=$db ->update("Estados",["est_nombre"=>$name,
                                        "est_abrev"=>$abrev,
                                        "est_status"=>$status,
                                        ],["est_id"=>$id]);
        if($editar){
            echo "Edicion completada";
        }else{
            echo "Se ocasiono un error";
        } 
    }

    function mostrar_estados(){

        global $db;
        $estados = $db->select("Estados","*");
         
        
                    
        echo json_encode($estados);                                                                                                                                                              
                                
    }
?>

