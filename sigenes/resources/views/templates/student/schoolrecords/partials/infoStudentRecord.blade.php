<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nombre" class="col-lg-2 control-label">Nombre: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" data-ng-model="student.nombre" id="nombre" placeholder="Nombre del alumno" readOnly>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="cuenta" class="col-lg-2 control-label">No. Cuenta: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="cuenta" data-ng-model="student.account_number" placeholder="No. Cuenta" readOnly>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class=" col-lg-10 col-xs-offset-1">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="telefono" class="col-lg-2 control-label">Telefono: </label>
                <div class="col-lg-10">
                    <input type="tel" id="telefono" placeholder="Teléfono" data-ng-model="student.telephone" class="form-control input" readOnly>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="carrera" class="col-lg-2 control-label">Carrera: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="carrera" data-ng-model="carrera" placeholder="Carrera" readOnly>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="celular" class="col-lg-2 control-label">Célular: </label>
                <div class="col-lg-10">
                    <input type="tel" id="celular" placeholder="Celular" data-ng-model="student.celphone" class="form-control input" readOnly>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Correo: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="email" data-ng-model="student.email" placeholder="Correo del alumno" readOnly>
                </div>
            </div>
        </div>
    </div>
</div>
<br>