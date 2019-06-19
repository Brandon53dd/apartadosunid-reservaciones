<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
    <script type="text/javascript">
    function showContent() {
        element = document.getElementById("accesory");
        check = document.getElementById("accesorychkbx");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <a href="./?mod=2" class="card card-hover" data-toggle="modal" data-target="#reservationModal" data-whatever="Reserva de proyector" data-type="proyector">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="fas fa-chart-line"></i></h1>
                    <h6 class="text-white">Reservar Proyector</h6>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <a class="card card-hover" data-toggle="modal" data-target="#reservationModal" data-whatever="Reserva de auditorio" data-type="auditorio">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="fas fa-chalkboard-teacher"></i></h1>
                    <h6 class="text-white">Reservar Auditorio</h6>
                </div>
            </a>
        </div>
            <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <a class="card card-hover" data-toggle="modal" data-target="#reservationModal" data-whatever="Reserva de cabina de radio" data-type="cabina">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="fas fa-microphone-alt"></i></h1>
                    <h6 class="text-white">Reservar cabina de radio</h6>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <a class="card card-hover" data-toggle="modal" data-target="#reservationModal" data-whatever="Reserva de otros recursos" data-type="otros">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                    <h6 class="text-white">Reservar otros</h6>
                </div>
            </a>
        </div>                                        
    </div>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">                        
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tus reservas</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Horario <sup>(24)</sup> </th>
                                    <th>Salon</th>
                                    <th>Status</th>
                                    <th>Cancelar</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                                                                     
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Horario <sup>(24)</sup> </th>
                                    <th>Salon</th>
                                    <th>Status</th>
                                    <th>Cancelar</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start Modal Content -->
    <!-- ============================================================== -->

    <div class="modal fade bd-example-modal-lg" data-target=".bd-example-modal-lg" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservationModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="card">
                    <div class="card-body wizard-content">                        
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" method="POST" class="m-t-40">
                            <div>
                                <h3>Fecha de Reserva</h3>
                                <section>
                                    <label for="week">Selecciona el dia de tu reserva</label>
                                    <div>                                        
                                        <div class="row">                                        
                                            <div class="col-md-4 offset-md-2">
                                                <h5>Fecha de inicio *</h5>
                                                <div class="input-group">
                                                    <input type="date" class="form-control" name="datepicker-autoclose-inicio" id="datepicker-autoclose-inicio" placeholder="mm/dd/yyyy" required="mm/dd/yyyy">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="col-md-4">
                                                <h5>Fecha de finalización *</h5>
                                                <div class="input-group">
                                                    <input type="date" class="form-control" name="datepicker-autoclose-fin" id="datepicker-autoclose-fin" placeholder="mm/dd/yyyy">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>                                          
                                    </div>
                                    <p>(*) Obligatorio</p>
                                </section>
                                <h3>Campus</h3>
                                <section>
                                    <label for="week">Selecciona la Sede donde Reservaras</label>
                                    <select id="campus" name="campus" class="select2 form-control m-t-15 required" style="height: 36px;width: 100%;" placeholder="Cancun, Merida, Monterrey, etc...">                                        
                                    <?php 
                                        include '../../includes/get_campus.php';
                                     ?>

                                    </select>
                                    <p>(*) Obligatorio</p>                                  
                                </section>
                                <h3>Horas</h3>
                                <section>
                                    <div>
                                        <div>
                                            <h3>Horas a Reservar</h3>
                                        </div>
                                        <div class="row">                                        
                                            <div class="col-md-3">
                                                <h5>Hora de inicio *</h5>
                                                <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                                    <input for="startHour" type="text" id="timeIn" name="timeIn" class="form-control" value="07:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                            </div>
                                           <div class="col-md-3">
                                                <h5>Hora de finalización *</h5>
                                                <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                                    <input for="finishHour" type="text" id="timeOut" name="timeOut" class="form-control" value="09:00">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                       
                                    </div>     
                                    <p>(*) Obligatorio</p>                                                                    
                                </section>
                                               
                                 <h3>Accesorios</h3>
                                 <section>
                                    <div>
                                    <h5>¿Necesitas un accesorio adicional?</h5>
                                        <label><input type="checkbox" id="accesorychkbx" value="accesorychkbx" onchange="javascript:showContent()"  />Agregar Accesorio</label>
                                    </div>
                                 <div id="accesory" style="display: none">
                                         <select name="accesor" id="accesor" class="select2 form-control m-t-1¨5" required style="height: 36px;width: 100%;">
                                    <?php 
                                      include '../../includes/get_accesorios.php';
                                      ?>
                                    </select>
                                </div>
                                </section>
                                <h3>Datos personales</h3>
                                <section>
                                    <div>
                                        <label>Reservacion Generada A Nombre De:</label>
                                    <select name="users" id="users" class="select2 form-control m-t-1¨5" required style="height: 36px;width: 100%;">
                                    <?php 
                                      include '../../includes/getUsers.php';
                                      ?>
                                    </select>
                                    </div>
                                    <p>(*) Obligatorio</p>
                                </section>
                            </div>
                            <button id="btngeneratersv" class="btn btn-primary">Reservar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </form>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== --> 
    <!-- End Modal Content -->
    <!-- ============================================================== -->
    
    
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
