<div class="ui modal" id="edit">
	<i class="close icon"></i>
	<div class="header">
		Edición de asignatura  
	</div>
	<div class="content">
		@include('templates.admin.subjectMatter.partials.subjectMatter')
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="editAction()">
			<i class="fa fa-refresh"></i> Actualizar asignatura
		</button>
	</div>
</div>