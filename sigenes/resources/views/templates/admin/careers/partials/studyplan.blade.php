<div class="row">
	<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
		<div class="form-group">
			<div class="well" align="center"><!-- well, page-header, jumbotron-->
				<label class="label-control"><h2> {{trans('career.areatitle')}} @{{ career.name }} </h2></label>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-ms-4 col-md-4 col-xs-4">{{trans('career.createarea')}}:</label>
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<select class="form-control">
						<option data-ng-repeat="area in selectArea" value="@{{ area.area_id }}">@{{ area.name }}</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6" data-ng-show="true">
			<div class="form-group">
				<label class="label-control col-lg-2 col-ms-2 col-md-2 col-xs-2">{{trans('career.careername')}}:</label>
				<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
					<input type="text" id="Carreraplan" class="form-control" name="Carreraplan"ng-model="career.name" placeholder="Carrera del plan" readOnly />
					<input type="hidden" ng-model="area.career_id" >
				</div>
			</div>
		</div>
		
		<!-- Flujo normal-->
		<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-2 col-ms-2 col-md-2 col-xs-2">{{trans('career.key')}}:</label>
				<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
					<input type="text" class="form-control" id="claveArea" name="claveArea" ng-model="area.key" required placeholder="Clave del área de profundización" />
				</div>
			</div>
		</div>
	</div>

</div>
<br>
<div class="row">
	<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-2 col-ms-2 col-md-2 col-xs-2">{{trans('career.name')}}:</label>
				<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
					<input type="text" class="form-control" required id="nombreArea" name="nombreArea" ng-model="area.name" placeholder="Nombre del área de profundización" />
				</div>
			</div>
		</div>
	</div>
</div>