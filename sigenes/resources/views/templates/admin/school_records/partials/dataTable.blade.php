
    <div class="col-lg-12" align="center">
        <table class="table table-hover">
            <thead>
            <tr>
               <th>{{trans('schoolrecords.folio')}}
                </th>
                <th>{{trans('schoolrecords.name')}}</th>
                <th>
                    {{trans('schoolrecords.account')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.tramint')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='tramint'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.typerecord')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='transact'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.status')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='estatus'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.date')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='date'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th>
                    {{trans('schoolrecords.career')}}
                </th>
                <th>
                    {{trans('schoolrecords.controller')}}
                </th>
            </tr>
            </thead>
            <tbody>
            <tr data-dir-paginate="result in showResult | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
                <td>@{{ result.folio }}</td>
                <td>@{{ result.fullname }}</td>
                <td>@{{ result.account_number }}</td>
                <td>@{{ (result.tramint) }}</td>
                <td>@{{ (result.transact) }}</td>
                <td>@{{ result.estatus }}</td>
                <td>@{{ result.date }}</td>
                <td>Odontología</td>
                <td>
                    <div align="center" data-ng-show="changeShow(result, 0)">
                        <div data-ng-show="showval(result)">
                            <a data-ng-click="showValidate(result)"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Validar tramite"></span></a>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <a data-ng-click="deletemodal(result)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Cancelar tramite"></span></a>
                        </div>
                    </div>
                    <div align="center"  data-ng-hide="showval(result)">
                        <a data-ng-click="showValidate(result)" ><span class="glyphicon glyphicon-check" data-toggle="tooltip" title="Ver tramite"></span></a>
                    </div>
                    <div data-ng-hide="changeShow(result, 0)">
                        <p align="justify">
                            Se ha cancelado el tramite de @{{ (result.tramint) }}
                        </p>
                    </div>
                    
                </td>
            </tr>
            </tbody>
        </table>
    </div>
