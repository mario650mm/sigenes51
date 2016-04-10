<div class="ui basic modal" id="delete">
    
    <div class="header">
        {{trans('low.header_delete')}}
    </div>
    <div class="image content">
        <div class="image">
            <i class="user icon"></i>
        </div>
        <div class="description">
            <p>
                <h3>{{trans('low.body_delete')}}
                </h3>
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="actiondelete(result)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                {{trans('low.btnyes')}}
            </div>
        </div>
    </div>
</div>