<div class="ui modal" id="editcareer">
	<i class="close icon"></i>
	<div class="header">
		{{trans('career.headeredit')}} @{{ career.name }} 
	</div>
	<div class="content">
		@include('templates.admin.careers.partials.careers')
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="updatecareer()">
			<i class="fa fa-refresh"></i> Actualizar carrera
		</button>
		<button type="button" class="btn btn-danger deny">
			<i class="fa fa-times"></i> Cancelar		
		</button>
	</div>
</div>