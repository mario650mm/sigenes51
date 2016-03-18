<div class="ui modal" id="editPeriod">
	<i class="close icon"></i>
	<div class="header">
		Edición de periodo 
	</div>
	<div class="content">
		@include('templates.admin.periods.partials.periods')
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="updateperiod()"><i class="fa fa-refresh"></i> Actualiza periodo</button>
	</div>
</div>