<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> 
				<label class="label-control">Mes inicial</label>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<input type="text" id="monthInit" class="form-control" data-ng-model="period.month_init" placeholder="Mes inical del periodo" />
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> 
				<label class="label-control">Mes final</label>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<input type="text" id="monthEnd" class="form-control" data-ng-model="period.month_end" placeholder="Mes final del periodo" />
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> 
				<label class="label-control">Año</label>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<input type="text" id="year" class="form-control" data-ng-model="period.year" placeholder="Año del periodo"/>
				
			</div>
		</div>
	</div>
</div>
<br>

<fieldset class="scheduler-border">
	<legend class="scheduler-border">Tiempo para suspensiones:</legend>
	<div class="row">
		<div class="col-md-12">
			<div class='col-md-6'>
		        <div class="form-group">
		        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		        		<label class="label-control">Fecha inicial</label>
		        	</div>
		        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			            <div class='input-group date dtpicker'>
			                <input type='text' class="form-control" id="date_init" data-date-format="dd-mm-yyyy" data-ng-model="period.date_init" readOnly/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
		            </div>
		        </div>
		    </div>

		    <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
		        <div class="form-group">
		        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		        		<label class="label-control">Fecha final</label>
		        	</div>
		        	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			            <div class='input-group date dtpicker'>
			                <input type='text' class="form-control" id="date_end" data-date-format="dd-mm-yyyy" data-ng-model="period.date_end" readOnly/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
		            </div>
		        </div>
		    </div>
	    </div>
	</div>
</fieldset>
