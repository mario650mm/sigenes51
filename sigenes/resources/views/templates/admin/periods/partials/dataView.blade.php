<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<table class="table table-hover">
		<tr>
			<th ng-click="sort('month_init')">
				Mes de inicio de periodo
				<span class="glyphicon sort-icon" ng-show="sortKey=='month_init'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('month_end')">
				Mes de fin de periodo
				<span class="glyphicon sort-icon" ng-show="sortKey=='month_end'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('year')">
				Año del periodo
				<span class="glyphicon sort-icon" ng-show="sortKey=='year'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('date_init')">
				Fecha de inicio para suspensión
				<span class="glyphicon sort-icon" ng-show="sortKey=='date_init'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('date_end')">
				Fecha fin para suspensión
				<span class="glyphicon sort-icon" ng-show="sortKey=='date_end'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th>
				Controles
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
						<a ng-click="editperiod(entity)" ><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Editar constancia"></span></a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<a ng-click="deleteperiod(entity)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Eliminar constancia"></span></a>
					</div>
				</div>
			</td>
		</tr>
	</table>
</div>