<div class="ui basic modal" id="delete">
    <div class="header">
        Eliminación de la asignatura @{{subjectmatter.name}}
    </div>
    <div class="image content">
        <div class="image">
            <i class="fa fa-trash fa-5x"></i><!-- fa-spin-->
        </div>
        <div class="description">
            <p>
                <h3><div align="justify">S procederá con la eliminación de la asigantura @{{subjectmatter.name}}, perteneciente a la carrera @{{subjectmatter.career}}, 
                    con el plan de estudios de @{{subjectmatter.plan}}. ¿Desea continuar con la operación?</div></h3>
            </p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button deny">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" data-ng-click="deleteaction(subjectmatter.id)"><!-- data-ng-click="deleteUser(user)"-->
                <i class="checkmark icon"></i>
                Si
            </div>
        </div>
    </div>
</div>