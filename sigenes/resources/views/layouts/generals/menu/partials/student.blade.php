<div class="treemenu boxed">
	<div class="ui fluid styled accordion">
		<div class="title">
			<div class="header">
				<i class="glyphicon glyphicon-edit"></i> Tramites
        		<i class="dropdown icon"></i>
			</div>
		</div>
		<div class="content">
			<div class="subtitle">
				<div class="menu">
					<a class="item" href="{{ url('/student/low') }}">{{ trans('low.title') }}</a>
				</div>
				<div class="menu">
					<a class="item" href="{{ url('student/records') }}">{{ trans('schoolrecords.item') }}</a>
				</div>
				<div class="menu" style="display: none;">
					<a class="item" href="{{ route('extraordinary.create') }}">Examenes extraordinarios</a>
				</div>
			</div>
		</div>
	</div>
</div>
