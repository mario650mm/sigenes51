<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <div class="col-lg-12 alert alert-warning alert-dismissible" role="alert">
        <strong>Los documentos a subir deben ser en su formato original, escaneados y con extensión pdf.</strong>
    </div>
    <form name="dinf" ng-submit="submitForm(dinf.$valid)" novalidate>
        {{-- Div 1--}}
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <ul class="list-group">
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.birth_certificate.$invalid, 'list-group-item-success':dinf.birth_certificate.$valid }">
                    <h1>{{ trans('admissions.birth_certificate') }}</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.birth_certificate.$invalid , 'btn-success':dinf.birth_certificate.$valid }">
                        <span ng-show="dinf.birth_certificate.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.birth_certificate.$valid">Archivo Adjuntado</span>
                        <input type="file" name="birth_certificate" ng-model="applicant.birth_certificate" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.birth_certificate.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>
                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.curp_file.$invalid, 'list-group-item-success':dinf.curp_file.$valid }">
                    <h1>{{ trans('admissions.curp') }}</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.curp_file.$invalid , 'btn-success':dinf.curp_file.$valid }">
                        <span ng-show="dinf.curp_file.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.curp_file.$valid">Archivo Adjuntado</span>
                        <input type="file" name="curp_file" ng-model="applicant.curp_file" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.curp_file.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>
                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.high_school_certificate.$invalid, 'list-group-item-success':dinf.high_school_certificate.$valid }">
                    <h1>{{ trans('admissions.high_school_certificate') }}</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.high_school_certificate.$invalid , 'btn-success':dinf.high_school_certificate.$valid }">
                        <span ng-show="dinf.high_school_certificate.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.high_school_certificate.$valid">Archivo Adjuntado</span>
                        <input type="file" name="high_school_certificate" ng-model="applicant.high_school_certificate" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.high_school_certificate.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>

                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.orderpayment.$invalid, 'list-group-item-success':dinf.orderpayment.$valid }">
                    <h1>Orden de pago</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.orderpayment.$invalid , 'btn-success':dinf.orderpayment.$valid }">
                        <span ng-show="dinf.orderpayment.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.orderpayment.$valid">Archivo Adjuntado</span>
                        <input type="file" name="orderpayment" ng-model="applicant.orderpayment" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.orderpayment.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>
                    </span>
                </li>
            </ul>
        </div>
        {{-- Div 2 --}}
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <ul class="list-group">
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.horario.$invalid, 'list-group-item-success':dinf.horario.$valid }">
                    <h1>Horario de clases</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.horario.$invalid , 'btn-success':dinf.horario.$valid }">
                        <span ng-show="dinf.horario.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.horario.$valid">Archivo Adjuntado</span>
                        <input type="file" name="horario" ng-model="applicant.horario" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.horario.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>
                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.letter_assignment.$invalid, 'list-group-item-success':dinf.letter_assignment.$valid }">
                    <h1>Carta de asignación</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.letter_assignment.$invalid , 'btn-success':dinf.letter_assignment.$valid }">
                        <span ng-show="dinf.letter_assignment.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.letter_assignment.$valid">Archivo Adjuntado</span>
                        <input type="file" name="letter_assignment" ng-model="applicant.letter_assignment" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.letter_assignment.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>
                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.dgae_document.$invalid, 'list-group-item-success':dinf.dgae_document.$valid }">
                    <h1>Acuse DGAE o Carta compromiso</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.dgae_document.$invalid , 'btn-success':dinf.dgae_document.$valid }">
                        <span ng-show="dinf.dgae_document.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.dgae_document.$valid">Archivo Adjuntado</span>
                        <input type="file" name="dgae_document" ng-model="applicant.dgae_document" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.dgae_document.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>

                    </span>
                </li>
                <li class="list-group-item" ng-class="{ 'list-group-item-default' : dinf.format_imss.$invalid, 'list-group-item-success':dinf.format_imss.$valid }">
                    <h1>Formato IMSS</h1>
                    <span class="btn btn-file" ng-class="{ 'btn-danger' : dinf.format_imss.$invalid , 'btn-success':dinf.format_imss.$valid }">
                        <span ng-show="dinf.format_imss.$invalid">Subir Archivo</span>
                        <span ng-show="dinf.format_imss.$valid">Archivo Adjuntado</span>
                        <input type="file" name="format_imss" ng-model="applicant.format_imss" accept=".pdf" maxsize="3000" base-sixty-four-input required>
                        <span ng-show="dinf.format_imss.$error.maxsize">El archivo que intentas subir pesa más de 3000 KB (3 MB)</span>
                    </span>
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <a class="btn btn-danger pull-right" data-ng-click="back()"> {{ trans('admissions.back') }}</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" ng-hide="dinf.$invalid" >
            <a class="btn btn-success  pull-left" ng-hide="dinf.$invalid" data-ng-click="saveApplicant(applicant)"> {{ trans('admissions.register') }}</a>
        </div>

    </form>
</div>

