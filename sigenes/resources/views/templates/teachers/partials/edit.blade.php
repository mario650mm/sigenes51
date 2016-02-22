<div class="ui modal" id="edit">
    <i class="close icon"></i>
    <div class="header">
        @{{ teacher.name }}
    </div>
    <div class="content">
        @include('templates.teachers.partials.inputs')
    </div>
    <div class="actions">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6">
                <a class="btn btn-danger deny"><i class="fa fa-times"></i> Cancelar</a>
                <a class="btn btn-info" data-ng-click="editTeacher(teacher)"><i class="fa fa-floppy-o"></i> Guardar</a>
            </div>
        </div>
    </div>
</div>