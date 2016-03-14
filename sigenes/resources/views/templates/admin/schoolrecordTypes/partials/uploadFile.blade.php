
<div class="row">
	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
		<div class="col-lg-6 col-md-6 col-xs-6">
			<div class="form-group">
				<label class="col-lg-2 col-md-2 col-xs-2 control-label">{{trans('schoolrecordTypes.name')}}:</label>
				<div class="col-lg-10 col-md-10 col-xs-10">
					<input type="text" id="name" class="form-control" name="name" data-ng-model="recordtype.name" placeholder="Ingrese el nombre de la constancia" />
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-6">
			<div class="form-group">
				<span class="file-input btn btn-default btn-file" ng-class="{'btn btn-danger': addrecord.records.$invalid, 'btn btn-success': addrecord.records.$valid}">
					<span ng-show="addrecord.records.$invalid">{{trans('schoolrecordTypes.upload')}}</span>
		            <span ng-show="addrecord.records.$valid">{{trans('schoolrecordTypes.uploaded')}}</span>
		            <input type="file" name="records" class="col-lg-6 col-md-6 col-xs-6" onload="onLoad" ng-model="records" accept=".pdf"  base-sixty-four-input required>          
				</span>
			</div>
		</div>
	</div>
	
</div>

<div class="row">
	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<div class="form-group">
				<label class="col-lg-2 col-md-2 col-xs-2 control-label">{{trans('schoolrecordTypes.description')}}:</label>
				<div class="col-lg-10 col-md-10 col-xs-10">
					<textarea class="form-control" id="descripcition" name="descripcition" data-ng-model="recordtype.description" row="5" placeholder="Ingrese la descripción de la constancia" required></textarea>
				</div>
			</div>
		</div>
	</div>
</div>