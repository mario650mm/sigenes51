<div class="ui modal" id="editcareer">
	<i class="close icon"></i>
	<div class="header">
		Edición  de la carrera @{{ career.name }} 
	</div>
	<div class="content">
		@include('templates.admin.careers.partials.careers')
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="updatecareer()"><i class="fa fa-refresh"></i> Actualiza periodo</button>
	</div>
</div>