<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-danger" >
            <div class="panel-heading" >
                <span class="glyphicon glyphicon-chevron-down" data-ng-click="chanceView()"></span>
                <b>* {{trans('low.note')}}</b>
            </div>
            <div class="panel-body" data-ng-show="viewNote">
                <p align="justify" >
                    <div ng-switch="textNote">
                        <div ng-switch-when="0">{{trans('low.body_note')}}</div>
                        <div ng-switch-when="1"><h3>{{trans('low.body_note_err')}}</h3></div>
                    </div>
<!--                    En este apartado unicamente podras dar inicio al tramite
                    que escojas; para darle contimunidad es necesario que acudas
                    a servicios escolares con el documento que se te generará,
                    y los debidos sellos de no adeudo de los departamentos. -->
                </p>
            </div>
        </div>
    </div>
</div>