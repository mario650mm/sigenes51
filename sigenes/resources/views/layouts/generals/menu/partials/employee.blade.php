<div class="item">
    <div class="header"> <i class="browser icon"></i> {{ trans('low.header') }}</div>
    <div class="menu">
        <a class="item" href="{{ route('admin.low.index') }}">{{ trans('low.title') }}</a>
    </div>
    <div class="menu">
        <a class="item" href="{{ route('admin.records.index')}}"> School records</a>
    </div>
    <div class="header"><i class="fa fa-user-secret"></i> Empleados</div>
    <div class="menu">
        <a class="item" href="{{ route('teachers.index') }}">   @lang('teachers.title')</a>
    </div>
</div>