<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-danger" >
            <div class="panel-heading" >
                <span class="glyphicon glyphicon-chevron-down" data-ng-click="chanceView()"></span>
                <b>* {{trans('low.note')}}</b>
            </div>
            <div class="panel-body" data-ng-show="viewNote">
                <p align="justify" >
                    {{trans('low.body_note')}}
<!--                    En este apartado unicamente podras dar inicio al tramite
                    que escojas; para darle contimunidad es necesario que acudas
                    a servicios escolares con el documento que se te generará,
                    y los debidos sellos de no adeudo de los departamentos. -->
                </p>
            </div>
        </div>
    </div>
</div>