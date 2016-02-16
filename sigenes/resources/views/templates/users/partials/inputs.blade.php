<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" placeholder="Name" type="text" data-ng-model="user.name" class="form-control">
        </div>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
        <div class="form-group">
            <label for="rfc">RFC</label>
            <input id="rfc" placeholder="Name" type="text" data-ng-model="user.rfc" class="form-control">
        </div>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" placeholder="Name" type="text" data-ng-model="user.email" class="form-control">
        </div>
    </div>
    <div class="col-lg-10 col-lg-offset-1" data-ng-if="!edit">
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" placeholder="Name" type="text" data-ng-model="user.password" class="form-control">
        </div>
    </div>
</div>
