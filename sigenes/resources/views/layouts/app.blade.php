
<!DOCTYPE html>
<html data-ng-app="EnesAuth" ng-cloak>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>SIGENES LEON</title>
    @include('layouts.generals.headers')
    <script src="{{ asset('css/semantic/dist/semantic.min.js') }}"></script>
</head>
<body>



<!-- Page Contents -->
<div class="pusher">
    <div class="ui vertical masthead center aligned segment">
        @yield('main')
        @yield('content')
    </div>
</div>

<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-resource.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-route.min.js') }}"></script>
<script src="{{ asset('js/script/lib/ui-bootstrap-112.min.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-animate.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-base64-upload/dist/angular-base64-upload.js') }}"></script>
<script src="{{ asset('js/script/app_auth.js') }}"></script>
<script src="{{ asset('bower_components/angular-ui-notification/dist/angular-ui-notification.min.js') }}"></script>
<script src="{{ asset('js/script/directives/directiveEnesAuth.js') }}"></script>
<script src="{{ asset('js/script/services/country/country.factories.js') }}"></script>
<script src="{{ asset('js/script/services/state/state.factories.js') }}"></script>
<script src="{{ asset('js/script/services/city/city.factories.js') }}"></script>
<script src="{{ asset('js/script/services/admission/admission.factories.js') }}"></script>
<script src="{{ asset('js/script/controllers/admissions/admissionsController.js') }}"></script>
</body>

</html>