<div ng-init="initCareer()"></div>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-2 col-sm-2 col-md-2 col-xs-2">{{trans('career.key')}}:</label>
				<div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
					<input type="text" class="form-control" id="clave" name="clave" ng-model="career.key" placeholder="Clave de la carrera" />
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-2 col-sm-2 col-md-2 col-xs-2">{{trans('career.campus')}}:</label>
				<div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
					<input type="text" class="form-control" id="plantel" name="plantel" ng-model="career.campus" placeholder="Clave de plantel" />
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-2 col-sm-2 col-md-2 col-xs-2">{{trans('career.name')}}:</label>
				<div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
					<input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" ng-model="career.name" placeholder="Nombre de la carrera" />
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-2 col-sm-2 col-md-2 col-xs-2">{{trans('career.description')}}:</label>
				<div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
					<textarea class="form-control" row="5" id="descripcionCarrera" name="descrpcionCarrera" ng-model="career.description" placeholder="Ingrese una descripción de la carrera"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-2 col-sm-2 col-md-2 col-xs-2">Plan de estudio:</label>
				<div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
					<select class="form-control" id="planestudio" name="planestudio" ng-model="career.study_plan_id">
						<option ng-repeat="comun in tonco_comun" value="@{{comun.id}}">@{{comun.name}}</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>