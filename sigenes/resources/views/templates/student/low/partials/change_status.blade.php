<script type="text/ng-template" id="change_status.html">
    <div class="ui-notification custom-template">
        <h3>@{{ notificateTitle }}</h3>
        <div class="message" ng-bind-html="message"></div>
        <div class="message" align="justify">
            @{{ elementText }}
        </div>
        <div class="message">
            <a class="btn btn-small btn-primary close-notification glyphicon glyphicon-ok-circle" ng-click="verification(information)">Aceptar</a>
            <a class="btn btn-small btn-warning close-notification glyphicon glyphicon-remove-circle" ng-click="cancelveri(information)">Cancelar</a>
            </div>
        </div>
</script>