@extends('layouts.generals.main_template')

@section('body_page')

    <div class="container-fluid">
        @include('templates.admin.school_records.partials.filter')
        <br>
        @include('templates.admin.school_records.partials.dataTable')
    </div>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection