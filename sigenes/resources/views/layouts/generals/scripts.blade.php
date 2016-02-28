
<!-- JavaScripts -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-resource.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-route.min.js') }}"></script>
<script src="{{ asset('js/script/lib/ui-bootstrap-112.min.js') }}"></script>
<script src="{{ asset('js/script/lib/angular-animate.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-advanced-searchbox/dist/angular-advanced-searchbox-tpls.min.js') }}"></script>
<script src="{{ asset('bower_components/angularUtils-pagination/dirPagination.js') }}"></script>
<script src="{{ asset('bower_components/angular-ui-notification/dist/angular-ui-notification.min.js') }}"></script>
<script src="{{ asset('js/script/app.js') }}"></script>
<script src="{{ asset('js/script/controllers/main/mainController.js') }}"></script>
<script src="{{ asset('js/script/extrasEnes.js') }}"></script>
<script src="{{ asset('bower_components/angular-base64-upload/dist/angular-base64-upload.js') }}"></script>


@if(Auth::user()->type == 'employee')
@endif
@if(Auth::user()->type == 'student')
	<script src="{{ asset('js/script/services/low/suspension.factories.js') }}"></script>
	<script src="{{ asset('js/script/controllers/low/suspensionCtrl.js') }}"></script>
	<script src="{{ asset('js/script/services/schoolrecord/schoolrecord.factories.js') }}"></script>
	<script src="{{ asset('js/script/controllers/schoolrecord/schoolrecordCtrl.js') }}"></script>
@endif
@if(Auth::user()->type == 'admin')
	<script src="{{ asset('js/script/controllers/users/usersCtrl.js') }}"></script>
	<script src="{{ asset('js/script/services/users/users.factories.js') }}"></script>
	<script src="{{ asset('js/script/services/schoolrecord/schoolrecord.factories.js') }}"></script>
	<script src="{{ asset('js/script/services/low/suspension.factories.js') }}"></script>
	<script src="{{ asset('js/script/controllers/low/suspencionsAdminCtrl.js') }}"></script>
	<script src="{{ asset('js/script/services/schoolrecord/schoolrecord.factories.js') }}"></script>
	<script src="{{ asset('js/script/controllers/schoolrecord/schoolrecordAdminCtrl.js') }}"></script>
@endif