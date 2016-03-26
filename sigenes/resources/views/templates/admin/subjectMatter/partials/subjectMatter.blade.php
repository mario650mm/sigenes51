<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Nombre:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="text" class="form-control" id="subjectmattername" name="subjectmattername" placeholder="Nombre de la materia" ng-model="subjectmatter.name"/>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Clave:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="text" class="form-control" id="subjectmatterkey" name="subjectmatterkey" placeholder="Clave de la materia" ng-model="subjectmatter.key"/>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Creditos:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="number" class="form-control" id="subjectmattercredit" name="subjectmattercredit" placeholder="Creditos de la materia" ng-model="subjectmatter.credit"/>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Años:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<select class="form-control" ng-model="subjectmatter.half_year_id" id="subjectmatterhalf_year" name="subjectmatterhalf_year">
						<option ng-repeat="years in half_year" value="@{{years.key}}"> @{{ years.name }}</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Semestre:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<select class="form-control" ng-model="subjectmatter.half_year_id" id="subjectmatterhalf_year" name="subjectmatterhalf_year">
						<option ng-repeat="years in half_year" value="@{{years.key}}"> @{{ years.name }}</option>
					</select>
				</div>
			</div>
		</div>
		
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-offset-1">
		<div class="form-group">
			<div class="row">
				<input type="radio" id="isoptional" name="isoptional" ng-model="subjectmatter.isopctional" ng-init="subjectmatter.isopctional=false"/><label class="label-control">&nbsp;&nbsp;&nbsp;Asignatura opcional</label>
			</div>
			<div class="row">
				<input type="radio" id="isoptional" name="isoptional" ng-model="subjectmatter.isopctional" ng-init="subjectmatter.isopctional=false"/><label class="label-control">&nbsp;&nbsp;&nbsp;Asignatura obligatoria</label>
			</div>		
		</div>
	</div>
	<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3 ">
		<div class="form-group">
			<div class="row">
				<input type="radio" id="subjectmatter" name="study" ng-model="subjectmatter.iscomun_deep"  ng-click="changeComun()"/><label class="label-control">&nbsp;&nbsp;&nbsp;Tronco común</label>
			</div>
			<div class="row">
				<input type="radio" id="deepingarea" name="study" ng-model="subjectmatter.isdeepending" ng-init="subjectmatter.isdeepending=false" ng-click="change()"/><label class="label-control">&nbsp;&nbsp;&nbsp;Profundización</label> 
			</div>
			<div class="row">
				<input type="radio" id="technique" name="study" ng-model="subjectmatter.istechnique"ng-init="subjectmatter.istechnique=false" ng-click="changeComun()"/><label class="label-control">&nbsp;&nbsp;&nbsp;Carrera tecnica</label>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3 ">
		<div class="form-group">
			<div class="row">
				<input type="radio" name="optradio"><label class="label-control">&nbsp;&nbsp;&nbsp;Seriacion obligatoria</label>
			</div>
			<div class="row">
				<input type="radio" name="optradio"><label class="label-control">&nbsp;&nbsp;&nbsp;Seriacion indicativa</label>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Carrera:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<select class="form-control" id="subjectmattercareer" name="subjectmattercareer" ng-model="subjectmatter.career_id" ng-change="filterArea(subjectmatter.career_id)">
						<option ng-repeat="career in selectCareer" value="@{{career.id}}"> @{{ career.name }}</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Área de profundización:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<select class="form-control" id="subjectmattercareer" name="subjectmattercareer" ng-model="subjectmatter.study_area_id">
						<option ng-repeat="area in dataarea" value="@{{area.id}}">@{{area.name}}</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Semana inicio:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="number" class="form-control" />
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Semana fin:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="number" class="form-control" />
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Horas teoricas:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="number" class="form-control" />
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Horas practicas:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="number" class="form-control" />
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
			<div class="form-group">
				<label class="label-control col-lg-4 col-sm-4 col-md-4 col-xs-4">Horas clinica:</label>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
					<input type="number" class="form-control" />
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		
		
	</div>
</div>