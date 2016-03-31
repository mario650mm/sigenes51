<div class="ui modal" id="showimg" > <!-- width: 40% -->
    <i class="close icon"></i>
    <div class="header">
        Imagen de evidencia para la solicitud de suspensión
    </div>
    <br>
    <div class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-offset-1">
                <img class="img-responsive" ng-src="@{{imageMIME(suspend.evidence)}}" alt="Imagen de evidencia" data-toggle="tooltip" title="Imagen de evidencia" />
            </div>
        </div>
    </div>
    <div class="actions">
    </div>
</div>