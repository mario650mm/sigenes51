
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th ng-click="sort('name')">
						{{trans('schoolrecordTypes.name')}}
						<span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
					</th>
					<th ng-click="sort('description')">
						{{trans('schoolrecordTypes.description')}}
						<span class="glyphicon sort-icon" ng-show="sortKey=='description'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
					</th>
					<th ng-click="sort('date')">
						{{trans('schoolrecordTypes.date')}}
						<span class="glyphicon sort-icon" ng-show="sortKey=='date'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
					</th>
					<th>{{trans('schoolrecordTypes.control')}}</th>
				</tr>
			</thead>
			<tbody>
				<tr data-dir-paginate="entity in entityrecord | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
					<td>@{{ entity.name}}</td>
					<td>@{{ entity.description}}</td>
					<td>@{{ entity.created_at}}</td>
					<td>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<a data-ng-click="editview(entity)"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="{{trans('schoolrecordTypes.ctrledit')}}"></span></a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<a data-ng-click="delete(entity)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="{{trans('schoolrecordTypes.ctrldelete')}}"></span></a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<a data-ng-click="showView(entity)"><span class="glyphicon glyphicon-check" data-toggle="tooltip" title="{{trans('schoolrecordTypes.ctrlshow')}}"></span></a>
							</div>
						</div>
					</td>
				</tr>	
			</tbody>
		</table>
	</div>