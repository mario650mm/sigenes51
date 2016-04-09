<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" name="name" placeholder="Name" type="text" data-ng-model="user.name" class="form-control">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="rfc">RFC</label>
            <input id="rfc" name="rfc" placeholder="RFC" type="text" data-ng-model="user.rfc" class="form-control">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" placeholder="Email" type="text" data-ng-model="user.email" class="form-control">
        </div>
    </div>
    <div class="col-lg-6" data-ng-if="!edit">
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" name="name" placeholder="Password" type="text" data-ng-model="user.password" class="form-control">
        </div>
    </div>
</div>
