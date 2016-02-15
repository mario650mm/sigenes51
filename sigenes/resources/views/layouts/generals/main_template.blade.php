<!DOCTYPE html>
<html lang="es" data-ng-app="Enes">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
@include('layouts.generals.headers')
<script src="{{ asset('css/semantic/dist/semantic.min.js') }}"></script>

<body>
    @if (! Auth::guest())

        <div class="col-lg-2 col-md-2 col-sm-2" style="padding-right: 0px; margin-right: 0px;">
            <div class="row" style="padding-right: 0px; margin-right: 0px;">
                @include('layouts.generals.menu.verticalmenu')
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10" style="padding-left: 0px; margin-left: 0px;">
            <div class="row">
                @include('layouts.generals.menu.general_menu')
            </div>
            <div class="row">
                <div class="container">
                    @include('layouts.generals.errors')
                    @include('layouts.generals.sessionMessage')
                    @include('layouts.generals.content_template')
                </div>
            </div>
        </div>
    @endif
    @include('layouts.generals.scripts')
</body>
</html>