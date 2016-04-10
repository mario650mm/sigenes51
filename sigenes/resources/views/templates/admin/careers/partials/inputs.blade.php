<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	<div class="form-group">
		<button class="btn btn-primary" id="generarCarrera" name="generarCarrera" data-ng-show="btncareer" data-ng-click="agregar()">
			<i class="fa fa-plus-square"></i>  {{trans('career.addcareer')}} 
		</button>
		<button class="btn btn-primary" data-ng-show="btnstudyarea" id="generaplanstudio" name="generaplanstudio" data-ng-click="registrararea()">
			<i class="fa fa-plus-square"></i>  {{trans('career.addarea')}}
		</button>
		<a class="btn btn-danger" href="{{ route('career.index')}}"><i class="fa fa-times"></i> Cancelar</a>
	</div>
</div>