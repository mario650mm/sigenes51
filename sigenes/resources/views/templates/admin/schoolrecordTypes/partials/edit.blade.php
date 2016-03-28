<div class="ui modal" id="showedit">
	<i class="close icon"></i>
	<div class="header">
		Constancia de @{{ entity.name}} 
	</div>
	<div class="content">
		<form name="addrecord" ng-submit="submitForm(addrecord.$valid)" novalidate>
			@include('templates.admin.schoolrecordTypes.partials.uploadFile')
		</form>
	</div>
	<div class="actions">
		<button type="button" class="btn btn-primary" ng-click="updateperiod()">
			<i class="fa fa-refresh"></i> {{trans('period.btnedit')}}
		</button>
	</div>
</div>