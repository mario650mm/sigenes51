<div class="ui basic modal" id="deletecareer">
    <div class="header">
        {{trans('career.headerdelete')}}
    </div>
    <div class="image content">
        <div class="image">
            <i class="fa fa-trash-o fa-5x"></i>
        </div>
        <div class="description">
            <p>
                <h3>{{trans('career.bodydelete')}}</h3>
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="actiondelete(career.id)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                {{trans('career.btnyes')}}
            </div>
        </div>
    </div>
</div>