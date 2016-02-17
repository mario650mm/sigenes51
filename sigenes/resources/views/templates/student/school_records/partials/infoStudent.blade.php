<div class="row">
    <div class=" col-xs-11 col-xs-offset-3">
        <div class="col-xs-11">
            <div class="form-group">
                <label for="nombre" class="col-xs-1 control-label">Nombre: </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" data-ng-model="nombre" id="nombre" placeholder="Nombre del alumno">
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
                    <input type="text" class="form-control" id="cuenta" data-ng-model="cuenta" placeholder="No. Cuenta">
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputEmail" class="col-xs-4 control-label">Carrera: </label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" id="carrera" data-ng-model="carrera" placeholder="Carrera">
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
                    <input type="tel" id="telefono" placeholder="Telefono" data-ng-model="telefono" class="form-control input">
                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label class="col-xs-4 control-label">Célular:</label>
                <div class="col-xs-8">
                    <input type="tel" id="telefono" placeholder="Celular" data-ng-model="celular" class="form-control input">
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
                    <input type="text" class="form-control" id="nombre" data-ng-model="correo" placeholder="Correo del alumno" value="{{ Auth::user()->email }}">
                </div>
            </div>
        </div>
    </div>
</div>