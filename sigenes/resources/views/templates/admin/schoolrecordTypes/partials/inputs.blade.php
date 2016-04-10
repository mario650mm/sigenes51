<div class="row">
	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<button class="btn btn-primary" data-ng-click="saveRecord()">
				<span class="glyphicon glyphicon-plus-sign"></span> {{trans('schoolrecordTypes.addrecord')}}
				<!--Agregar constancia-->
			</button>
			<a class="btn btn-danger" href="{{ route('schooltype.index')}}"><i class="fa fa-times"></i> Cancelar</a>
		</div>
	</div>
</div>