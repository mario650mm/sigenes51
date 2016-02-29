<!DOCTYPE html>
<html lang="es" data-ng-app="Enes" ng-cloak>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
@include('layouts.generals.headers')
<script src="{{ asset('css/semantic/dist/semantic.min.js') }}"></script>
<style>
    .modal-backdrop {
        z-index: 250;
    }
</style>
<body>
    {!! csrf_field() !!}
    @if (! Auth::guest())

        <div class="col-lg-2 col-md-2 col-sm-2">
            @include('layouts.generals.menu.verticalmenu')
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="row">
                @include('layouts.generals.menu.general_menu')
            </div>
            <div class="row">
                @include('layouts.generals.errors')
                @include('layouts.generals.sessionMessage')
                @include('layouts.generals.content_template')
            </div>
        </div>
    @endif
    @include('layouts.generals.scripts')
</body>
</html>