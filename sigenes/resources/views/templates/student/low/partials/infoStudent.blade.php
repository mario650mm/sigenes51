<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nombre" class="col-lg-2 control-label">{{trans('low.name')}}: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" data-ng-model="userSusp.nombre" id="nombre" placeholder="Nombre del alumno" readonly>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="cuenta" class="col-lg-2 control-label">{{trans('low.account')}}: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="cuenta" data-ng-model="userSusp.account_number" placeholder="No. Cuenta" readonly>
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">


        <div class="col-lg-6">
            <div class="form-group">
                <label class="col-lg-2 control-label">{{trans('low.phone')}}:</label>
                <div class="col-lg-10">
                    <input type="tel" id="telefono" placeholder="Telefono" data-ng-model="userSusp.telephone" class="form-control input" readonly>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">{{trans('low.career')}}: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="carrera" data-ng-model="carrera" placeholder="Carrera" readonly>
                </div>
            </div>
        </div>
        

    </div>
</div>
<br>
<div class="row">
    <div class=" col-lg-10 col-lg-offset-1">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="col-lg-2 control-label">{{trans('low.cell')}}:</label>
                <div class="col-lg-10">
                    <input type="tel" id="telefono" placeholder="Celular" data-ng-model="userSusp.celphone" class="form-control input" readonly>
                </div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">{{trans('low.email')}}: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="nombre" data-ng-model="userSusp.email" placeholder="Correo del alumno" readonly>
                </div>
            </div>
        </div>
    </div>
</div>