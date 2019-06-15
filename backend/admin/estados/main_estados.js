$(document).ready(function(){    
    //inicializar el plugin de datatable        
    Mostrar();
    
    tablaestados=$("#tablaestados").DataTable({
       
        
        //Para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
    //inicializar accion del boton para mostrar el modal
    $("#btnNuevo").click(function(){         
        $("#formulario").trigger("reset");
        $(".modal-header").css("background-color","#28a745"); 
        $(".modal-header").css("color","white"); 
        $(".modal-title").text("Agregar estados");  
        $("#btnGuardarEst").text("Guardar");  
        $("#modalestados").modal("show");   
    });
    //Obtener los parametros
    $("#btnGuardarEst").click(function(){
        console.log("en formulario")            
        
        /*"est_abrev" => $abrev,
        "est_status" => $status,
        ], ["est_id" => $id]);*/
        name=$("#name_est").val();
        status=$("#lista").val();        
        abrev=$("#abrev_est").val();
            
        obj={
                accion: "insertar_estados",                
                name: name,
                abrev: abrev,
                status: status                
            }            
        if($(this).data("edicion")==1){
            obj["accion"]="editar_estados";
            obj["id"]=$(this).data("id");
            $(this).removeData("edicion").removeData("id");
        }
        
        if(name=="" || abrev==""){
            alert("No dejes campos vacios");
            return;
        }else{
            $.ajax({
                url: "../../includes/funciones_estados.php",
                type: "POST",
                dataType: "json",
                data: obj,
                success: function(data){
                    console.log(data);
                }
            })
            $("#modalestados").modal("hide");
            location.reload();
        }
    });
    
    //Eliminar
    $(document).on("click", ".eliminar_estados", function(){
        id=$(this).data("id");
        
          if(id <=3){
            alert("No se puede eliminar este estados");
            return;
        }
        $.ajax({
            url: "../../includes/funciones_estados.php",
            type: "POST",
            dataType: "json",
            data: {
                accion: "eliminar_estados",
                id: id
            },
            success: function(data){
                console.log(data);
            }
        })
        location.reload();
    });

    //Editar
    $(document).on("click", ".editar_estados", function(){
        id=$(this).data("id");
    
        
        obj={
            "accion" : "consultar_estados",
            "id" : $(this).data("id")
        }
        $.post("../../includes/funciones_estados.php", obj, function(data){       
            $("#name_est").val(data.est_nombre);
            $("#abrev_est").val(data.est_abrev);            
            $("#lista").val(data.est_status);                    
        }, "JSON");
        
       
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar estados"); 
        $("#btnGuardarEst").text("Actualizar").data("edicion", 1).data("id", id);    
        $("#modalestados").modal("show");  

        
    });

    function Mostrar(){
        
        let obj={
            "accion" : "mostrar_estados"
            
        }
        let template = ``; 
        
         $.post("../../includes/funciones_estados.php", obj, function(data){       
             $.each(data,function(i,e){
                 console.log(i,e);
                 template += `           
                    <tr>
                        <td>${i+1}</td>
                        <td>${e.est_nombre}</td>
                        <td>${e.est_abrev}</td>
                        <td>${e.est_status}</td>
                           
                        <td>
                            <a href="#" class="editar_estados" data-id="${e.est_id}" ><i  class="fas fa-edit"></i></a>
                        </td>
                        <td>
                            <a href="#" class="eliminar_estados" data-id="${e.est_id}" ><i class="fas fa-trash"></i></a>
                        </td>  
                    </tr>`; 
                 
             });
             $("#tablaestados tbody").html(template);
             tablaestados.trigger("update");
        }, "JSON");
        
                                    
    }
});