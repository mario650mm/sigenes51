<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<table class="table table-hover">
		<tr>
			<th ng-click="sort('key')">
				Clave:
				<span class="glyphicon sort-icon" ng-show="sortKey=='key'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('name')">
				Nombre
				<span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('credit')">
				Creditos
				<span class="glyphicon sort-icon" ng-show="sortKey=='credit'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('career')">
				Carrera
				<span class="glyphicon sort-icon" ng-show="sortKey=='career'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('plan')">
				Plan de estudios 
				<span class="glyphicon sort-icon" ng-show="sortKey=='plan'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th>
				Controles
			</th>
		</tr>
		<tr data-dir-paginate="data in datatableView | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
			<td>@{{ data.key}}</td>
			<td>@{{ data.name}}</td>
			<td>@{{ data.credit}}</td>
			<td>@{{ data.career}}</td>
			<td>@{{ data.plan}}</td>
			<td>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<a ng-click="showedit(data.entity, data.deep, data.tronco)" ><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Editar asignatura"></span></a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<a ng-click="showdelete(data)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Eliminar asignatura"></span></a>
					</div>
				</div>
			</td>
		</tr>
	</table>
</div>