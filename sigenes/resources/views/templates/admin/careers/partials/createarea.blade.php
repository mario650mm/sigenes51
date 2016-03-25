<div class="ui modal" id="createarea">
	<i class="close icon"></i>
	<div class="header">
		{{trans('career.createareas')}} @{{ area.name }} 
	</div>
	<div class="content">
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
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="createareaaction()">
			<i class="fa fa-plus-square"></i>  {{trans('career.addarea')}}
		</button>
	</div>
</div>