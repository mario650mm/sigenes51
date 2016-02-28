<div class="item">
    <div class="header"><i class="fa fa-users"></i> {{ trans('users.title') }}</div>
    <div class="menu">
        <a class="item" href="{{ route('users.index') }}">{{ trans('users.title') }}</a>
    </div>
    <div class="header"><i class="fa fa-user-secret"></i> @lang('teachers.title')</div>
    <div class="menu">
        <a class="item" href="{{ route('teachers.index') }}">   @lang('teachers.title')</a>
    </div>
</div>
