
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
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
                <td>Odontología</td>
                <td>
                    <div align="center" data-ng-show="changeShow(result)">
                        <div data-ng-show="showval(result)">
                            <a data-ng-click="showsuspen(result)"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="{{trans('low.ctrl_val_susp')}}"></span></a>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <a data-ng-click="deletesuspen(result)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="{{trans('low.ctrl_del_susp')}}"></span></a>
                        </div>
                    </div>
                    <div align="center"  data-ng-hide="showval(result)">
                        <a data-ng-click="showValidate(result)" ><span class="glyphicon glyphicon-check" data-toggle="tooltip" title="{{trans('low.ctrl_sho_susp')}}"></span></a>
                    </div>
                    <div data-ng-hide="changeShow(result)">
                        <div ng-switch on="result.status_id">
                            <div ng-switch-when="6">
                                <p align="justify">
                                    {{trans('low.textend')}}
                                </p>
                            </div>
                            <div ng-switch-when="4">
                                <p align="justify">
                                    {{trans('low.textcancel')}} 
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </td>
            </tr>
        </table>
    </div>
