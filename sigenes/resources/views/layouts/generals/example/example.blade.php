@extends('layouts.generals.main_template')
@section('page_title')
    {{trans('occupations.edit_occupation')}}
@endsection

@section('title')
    {{trans('occupations.edit_occupation')}}
@endsection

@section('filters')
    @include('backend.admins.occupations.partials.filters')
@endsection

@section('button_delete')
    @include('backend.admins.occupations.partials.delete')
@endsection

@section('buttons')
    {!! Form::model($occupation, ['route'=>['occupation.update',$occupation->id],'method'=>'PUT','files'=>true]) !!}
    <button type="submit" onclick="return confirm('Estás seguro de actualizar está ocupación?')" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>&nbsp;{{trans('general.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('occupation.index')}}"><i class="fa fa-times"></i>&nbsp;{{trans('general.cancel')}}</a>
    <a class="btn btn-success btn-sm" href="{{route('occupation.create')}}"><i class="fa fa-cogs"></i>&nbsp;{{trans('general.create')}}</a>
@endsection

@section('body_page')
    @include('backend.admins.occupations.partials.inputs')
    {!! Form::close() !!}
@endsection