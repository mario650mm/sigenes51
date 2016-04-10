<div class="ui modal" id="editPeriod">
	<i class="close icon"></i>
	<div class="header">
		{{trans('period.headeredit')}} 
	</div>
	<div class="content">
		@include('templates.admin.periods.partials.periods')
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="updateperiod()">
			<i class="fa fa-refresh"></i> {{trans('period.btnedit')}}
		</button>
		<button type="button" class="btn btn-danger deny">
			<i class="fa fa-times"></i> Cancelar		
		</button>
	</div>
</div>