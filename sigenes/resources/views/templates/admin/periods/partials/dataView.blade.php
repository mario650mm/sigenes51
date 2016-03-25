<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<table class="table table-hover">
		<tr>
			<th ng-click="sort('month_init')">
				{{trans('period.tblmonthinit')}}
				<span class="glyphicon sort-icon" ng-show="sortKey=='month_init'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('month_end')">
				{{trans('period.tblmonthend')}}
				<span class="glyphicon sort-icon" ng-show="sortKey=='month_end'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('year')">
				{{trans('period.tblyear')}}
				<span class="glyphicon sort-icon" ng-show="sortKey=='year'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('date_init')">
				{{trans('period.tbldateinit')}}
				<span class="glyphicon sort-icon" ng-show="sortKey=='date_init'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('date_end')">
				{{trans('period.tbldateend')}}
				<span class="glyphicon sort-icon" ng-show="sortKey=='date_end'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th>
				{{trans('period.control')}}
			</th>
		</tr>
		<tr data-dir-paginate="entity in entityPeriod | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
			<td>@{{ entity.month_init}}</td>
			<td>@{{ entity.month_end}}</td>
			<td>@{{ entity.year}}</td>
			<td>@{{ entity.	date_init}}</td>
			<td>@{{ entity.date_end}}</td>
			<td>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<a ng-click="editperiod(entity)" ><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="{{trans('period.editperiod')}}"></span></a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<a ng-click="deleteperiod(entity)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="{{trans('period.deleteperiod')}}"></span></a>
					</div>
				</div>
			</td>
		</tr>
	</table>
</div>