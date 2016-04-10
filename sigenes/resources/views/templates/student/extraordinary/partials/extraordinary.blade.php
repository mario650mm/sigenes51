<div class="row">
	<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
			<div class="form-group">
				<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
					<label class="label-control">Fecha de solicitud:</label>
				</div>
				<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
					<input type="text" class="form-control" id="date_registration" name="date_registration" placeholder="Fecha de registro" ng-model="extraordinary.date_registration" readOnly />
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
			<div class="form-group">
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<label class="checkbox-inline lable-control">
						<input type="checkbox" ng-model="extraordinary.isapply">Asignaturas solicitadas extras
					</label>
				</div>
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<label class="checkbox-inline label-control">
						<input type="checkbox" ng-model="extraordinary.isoptional">Asignaturas optativas
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
		<fieldset>
			<legend><h4>Asignaturas a presentar por derecho</h4></legend>
			<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
				<div class="form-group">
					<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
						<label class="label-control ">Asignatura 1:</label>
					</div>
					<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
						<select class="form-control" id="subject_1" name="subject_1" ng-model="extraordinary.legal_subject_1">
							<option ng-repeat="ca in careers" value="@{{ca.id}}"> @{{ca.name}}</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
				<div class="form-group">
									<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
						<label class="label-control ">Asignatura 2:</label>
					</div>
					<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
						<select class="form-control" id="subject_2" name="subject_2" ng-model="extraordinary.legal_subject_2">
							<option ng-repeat="ca in careers" value="@{{ca.id}}"> @{{ca.name}}</option>
						</select>
					</div>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<br>
<div ng-if="extraordinary.isapply">
	<div class="row">
		<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
			<fieldset>
				<legend><h4>Asignaturas sujetas a revisión</h4></legend>
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<div class="form-group">
						<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
							<label class="label-control ">Asignatura 1:</label>
						</div>
						<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
							<select class="form-control" id="subject_3" name="subject_3" ng-model="extraordinary.apply_subject_1">
								<option ng-repeat="ca in careers" value="@{{ca.id}}"> @{{ca.name}}</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<div class="form-group">
										<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
							<label class="label-control ">Asignatura 2:</label>
						</div>
						<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
							<select class="form-control" id="subject_4" name="subject_4" ng-model="extraordinary.apply_subject_2">
								<option ng-repeat="ca in careers" value="@{{ca.id}}"> @{{ca.name}}</option>
							</select>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
</div>
<br>
<div ng-if="extraordinary.isoptional">
	<div class="row">
		<div class="col-lg-12 col-ms-12 col-md-12 col-xs-12">
			<fieldset>
				<legend><h4>Asignaturas optativas</h4></legend>
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<div class="form-group">
						<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
							<label class="label-control ">Optativa 1:</label>
						</div>
						<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
							<select class="form-control" id="Optativa_1" name="subject_3" ng-model="extraordinary.optional_subject_1">
								<option ng-repeat="ca in careers" value="@{{ca.id}}"> @{{ca.name}}</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<div class="form-group">
						<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
							<label class="label-control ">Optativa 2:</label>
						</div>
						<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
							<select class="form-control" id="subject_4" name="subject_4" ng-model="extraordinary.optional_subject_2">
								<option ng-repeat="ca in careers" value="@{{ca.id}}"> @{{ca.name}}</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-ms-6 col-md-6 col-xs-6">
					<div class="form-group">
						<div class="col-lg-4 col-ms-4 col-md-4 col-xs-4">
							<label class="label-control ">Optativa 3:</label>
						</div>
						<div class="col-lg-8 col-ms-8 col-md-8 col-xs-8">
							<select class="form-control" id="subject_4" name="subject_4" ng-model="extraordinary.optional_subject_3">
								<option ng-repeat="ca in careers" value="@{{ca.id}}"> @{{ca.name}}</option>
							</select>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
</div>
