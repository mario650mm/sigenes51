<div class="ui modal" id="showarea">
	<i class="close icon"></i>
	<div class="header">
		{{trans('career.showareas')}}
	</div>
	<div class="content">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
				<table class="table table-hover">
					<tr>
						<th>{{trans('career.key')}}</th>
						<th>{{trans('career.areadeep')}}</th>
						<th>{{trans('career.control')}}</th>
					</tr>
					<tr data-ng-repeat="area in dataarea">
						<td>@{{ area.key}}</td>
						<td>@{{ area.name}}</td>
						<td>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<a ng-click="editArea(area)" ><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="{{trans('career.ctrlareaedit')}}"></span></a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<a ng-click="deleteArea(area)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="{{trans('career.ctrldelearea')}}"></span></a>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>