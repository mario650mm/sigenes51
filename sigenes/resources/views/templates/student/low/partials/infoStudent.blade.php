<div class="row">
    <div class=" col-xs-11 col-xs-offset-3">
        <div class="col-xs-11">
            <div class="form-group">
                <label for="nombre" class="col-xs-1 control-label">Nombre: </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" data-ng-model="userSusp.nombre" id="nombre" placeholder="Nombre del alumno" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class=" col-xs-12 col-xs-offset-3">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="cuenta" class="col-xs-4 control-label">No. Cuenta: </label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" id="cuenta" data-ng-model="userSusp.account_number" placeholder="No. Cuenta" readonly>
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputEmail" class="col-xs-4 control-label">Carrera: </label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" id="carrera" data-ng-model="carrera" placeholder="Carrera" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class=" col-xs-12 col-xs-offset-3">
        <div class="col-xs-3">
            <div class="form-group">
                <label class="col-xs-4 control-label">Telefono:</label>
                <div class="col-xs-8">
                    <input type="tel" id="telefono" placeholder="Telefono" data-ng-model="userSusp.telephone" class="form-control input" readonly>
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label class="col-xs-4 control-label">Célular:</label>
                <div class="col-xs-8">
                    <input type="tel" id="telefono" placeholder="Celular" data-ng-model="userSusp.celphone" class="form-control input" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class=" col-xs-11 col-xs-offset-3">
        <div class="col-xs-11">
            <div class="form-group">
                <label for="inputEmail" class="col-xs-1 control-label">Correo: </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" id="nombre" data-ng-model="userSusp.email" placeholder="Correo del alumno" readonly>
                </div>
            </div>
        </div>
    </div>
</div>