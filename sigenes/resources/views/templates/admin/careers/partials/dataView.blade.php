<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<table class="table table-hover">
		<tr>
			<th >
				ENES clave
			</th>
			<th ng-click="sort('campus')">
				Plantel
				<span class="glyphicon sort-icon" ng-show="sortKey=='campus'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('key')">
				Clave de carrera
				<span class="glyphicon sort-icon" ng-show="sortKey=='key'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('name')">
				Carrera
				<span class="glyphicon sort-icon" ng-show="sortKey=='name'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th ng-click="sort('description')">
				Descripción
				<span class="glyphicon sort-icon" ng-show="sortKey=='description'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
			</th>
			<th>
				Controles
			</th>
		</tr>
		<tr data-dir-paginate="entity in datacareer | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
			<td>@{{ entity.father_campus}}</td>
			<td>@{{ entity.campus}}</td>
			<td>@{{ entity.key}}</td>
			<td>@{{ entity.	name}}</td>
			<td>@{{ entity.description}}</td>
			<td>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a ng-click="editCareer(entity)" ><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Editar carrera"></span></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a ng-click="filtroArea(entity.id)"><span class="fa fa-eye" data-toggle="collapse" data-target="#especialización" title="Ver áreas de la carrera"></span></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a ng-click="deleteCareer(entity)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Eliminar carrera"></span></a>
					</div>
				</div>
			</td>
		</tr>
		
	</table>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
	<div id="especialización" class="collapse">
		<table class="table table-hover">
			<tr>
				<th></th>
				<th></th>
				<th>Clave</th>
				<th>Área de profundización</th>
				<th></th>
				<th>Controles</th>
			</tr>
			<tr data-ng-repeat="area in dataarea">
				<td></td>
				<td></td>
				<td>@{{ area.key}}</td>
				<td>@{{ area.name}}</td>
				<td></td>
				<td>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<a ng-click="editArea(area)" ><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Editar área"></span></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        	<a data-ng-click="createArea(area.career_id)" ><span class="fa fa-plus-circle" data-toggle="tooltip" title="Crear área"></span></a>
                    	</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<a ng-click="deleteArea(area)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Eliminar área"></span></a>
						</div>

					</div>
				</td>
			</tr>
		</table>
	</div>
</div>