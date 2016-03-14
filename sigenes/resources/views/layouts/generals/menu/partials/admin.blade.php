<div class="item">
    <div class="header"><i class="fa fa-users"></i> {{ trans('users.title') }}</div>
    <div class="menu">
        <a class="item" href="{{ route('users.index') }}">{{ trans('users.title') }}</a>
    </div>
</div>
<div class="item">
    <div class="header"><i class="treatment icon"></i> {{ trans('applicants.title') }}</div>
    <div class="menu">
        <a class="item" href="{{ route('applicants.index') }}">{{ trans('applicants.title') }}</a>
    </div>
</div>
<div class="item">
	<div class="header"> <i class="browser icon"></i> {{ trans('low.header') }}</div>
	<div class="menu">
		<a class="item" href="{{ route('admin.low.index') }}">{{ trans('low.title') }}</a>
	</div>
	<div class="menu">
		<a class="item" href="{{ route('admin.records.index')}}"> School records</a>
	</div>
</div>
<div class="item">
    <div class="header"> <i class="browser icon"></i>Management</div>
    <div class="menu">
        <a class="item" href="{{ route('schooltype.index')}}"> School records</a>
    </div>
    <div class="menu">
        <a class="item" href="{{ route('period.index')}}"> Periods</a>
    </div>
</div>