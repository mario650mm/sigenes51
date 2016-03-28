<div class="ui modal" id="editarea">
	<i class="close icon"></i>
	<div class="header">
		{{trans('career.headeditarea')}} @{{ area.name }} 
	</div>
	<div class="content">
		<div ng-init="getplansArea()"></div>
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
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<div class="form-group">
						<label class="label-control col-lg-2 col-sm-2 col-md-2 col-xs-2">Plan de estudio:</label>
						<div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
							<select class="form-control" id="planestudio" name="planestudio" ng-model="area.study_plan_id">
								<option ng-repeat="deep in deepending" value="@{{deep.id}}">@{{deep.name}}</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="updatearea()"><i class="fa fa-refresh"></i> {{trans('career.btneditarea')}}</button>
	</div>
</div>