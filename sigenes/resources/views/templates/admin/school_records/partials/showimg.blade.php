<div class="ui modal" id="showimg" > <!-- width: 40% -->
    <i class="close icon"></i>
    <div class="header">
        <div ng-switch on="showima">
            <div ng-switch-when="1">Imagen de evidencia para la solicitud de la constancia @{{record.transact}}</div>
            <div ng-switch-when="2">Imagen de evidencia para recuperación de credencial del folio @{{record.folio}}</div>
            <div ng-switch-default>Sin datos</div>
        </div>
        
    </div>
    <br>
    <div class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-offset-1">
                <img class="img-responsive" ng-src="@{{imageMIME(record.evidence)}}" alt="Imagen de evidencia" data-toggle="tooltip" title="Imagen de evidencia" />
            </div>
        </div>
    </div>
    <div class="actions">
    </div>
</div>