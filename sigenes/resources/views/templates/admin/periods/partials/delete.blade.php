<div class="ui basic modal" id="deleteperiod">
    <div class="header">
        {{trans('period.headerdelete')}}
    </div>
    <div class="image content">
        <div class="image">
            <i class="fa fa-calendar-times-o fa-5x"></i><!-- fa-spin-->
        </div>
        <div class="description">
            <p>
                <h3>{{trans('period.bodydelete')}}</h3>
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="actiondelete(period.id)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                {{trans('period.btnyes')}}
            </div>
        </div>
    </div>
</div>