
    <div class="col-lg-12" align="center">
        <table class="table table-hover">
            <thead>
            <tr>
               <th class="text-center">{{trans('schoolrecords.folio')}}
                </th>
                <th class="text-center">{{trans('schoolrecords.name')}}</th>
                <th class="text-center">
                    {{trans('schoolrecords.account')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='account_number'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th class="text-center">
                    {{trans('schoolrecords.tramint')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='tramint'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th class="text-center">
                    {{trans('schoolrecords.typerecord')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='transact'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th class="text-center">
                    {{trans('schoolrecords.status')}}
                    <span class="glyphicon sort-icon" ng-show="sortKey=='estatus'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th class="text-center">
                    {{trans('schoolrecords.date')}}
                     <span class="glyphicon sort-icon" ng-show="sortKey=='date'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
                </th>
                <th class="text-center">
                    {{trans('schoolrecords.career')}}
                </th>
                <th class="text-center">
                    {{trans('schoolrecords.controller')}}
                </th>
            </tr>
            </thead>
            <tbody>
            <tr data-dir-paginate="result in showResult | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:15">
                <td class="text-center">@{{ result.folio }}</td>
                <td class="text-center">@{{ result.fullname }}</td>
                <td class="text-center">@{{ result.account_number }}</td>
                <td class="text-center">@{{ (result.tramint) }}</td>
                <td class="text-center">@{{ (result.transact) }}</td>
                <td class="text-center">@{{ result.estatus }}</td>
                <td class="text-center">@{{ result.date }}</td>
                <td class="text-center">@{{ result.careerN }}</td>
                <td>
                    <div align="center" data-ng-show="changeShow(result, 0)">
                        <div data-ng-show="showval(result)">
                            <a data-ng-click="showValidate(result)"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="{{trans('schoolrecords.ctrl_val_tra')}}"></span></a>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <a data-ng-click="deletemodal(result)"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="{{trans('schoolrecords.ctrl_del_tra')}}"></span></a>
                        </div>
                    </div>
                    <div align="center"  data-ng-hide="showval(result)">
                        <div ng-switch="genconst">
                            <div ng-switch-when="0">{{trans('schoolrecords.processend')}}</div>
                            <div ng-switch-when="1">
                                <a ng-click="showconstan(result)"><span class="fa fa-file-word-o" data-toggle="tooltip" title="Generar constancía"></span></a>
                            </div>
                        </div>                        
                        
                    </div>
                    <div data-ng-hide="changeShow(result, 0)">
                        <p align="justify">
                            {{trans('schoolrecords.processcancel')}}
                        </p>
                    </div>
                    
                </td>
            </tr>
            </tbody>
        </table>
    </div>
