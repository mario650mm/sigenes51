
    <div class="col-lg-10 col-lg-offset-1">
        <table class="table table-hover">
            <tr>
                <th>{{trans('low.name')}}
                </th>
                <th ng-click="sort('account')">{{trans('low.account')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th ng-click="sort('status')">{{trans('low.status')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='status'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th ng-click="sort('period')">{{trans('low.period')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='period'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th ng-click="sort('date')">{{trans('low.date')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='date'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th ng-click="sort('career')">{{trans('low.career')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='career'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th >{{trans('low.control')}}</th>
            </tr>
            <tr data-dir-paginate="result in showResult | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
                <td>@{{ result.fullname }}</td>
                <td>@{{ result.account_number }}</td>
                <td>@{{ result.estatus }}</td>
                <td>@{{ result.name_period }}</td>
                <td>@{{ result.date_init }}</td>
                <td>78</td>
                <td>
                    <div align="center">
                        <a data-ng-click="showsuspen(result)"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Validar suspensión"></span></a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <a data-ng-click="deletesuspen(result)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Eliminar tramite"></span></a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
