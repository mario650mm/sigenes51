<div class="ui steps" >
    <a class="step" data-ng-class="{active: step == 1}">
        <i class="book icon" data-ng-class="{blue: step == 1}"></i>
        <div class="content">
            <div class="title">{{ trans('admissions.general_information') }}</div>
        </div>
    </a>
    <a class="step" data-ng-class="{active: step == 2}">
        <i class="user icon" data-ng-class="{blue: step == 2}"></i>
        <div class="content">
            <div class="title">{{ trans('admissions.personal_information') }}</div>
        </div>
    </a>
    <a class="step" data-ng-class="{active: step == 3}">
        <i class="building icon" data-ng-class="{blue: step == 3}"></i>
        <div class="content">
            <div class="title">{{ trans('admissions.address') }}</div>
        </div>
    </a>
    <a class="step" data-ng-class="{active: step == 4}">
        <i class="student icon" data-ng-class="{blue: step == 4}"></i>
        <div class="content">
            <div class="title">{{ trans('admissions.school_graduation') }}</div>
        </div>
    </a>
    <a class="step" data-ng-class="{active: step == 5}">
        <i class="file pdf outline icon" data-ng-class="{blue: step == 5}"></i>
        <div class="content">
            <div class="title">{{ trans('admissions.documentation') }}</div>
        </div>
    </a>
</div>