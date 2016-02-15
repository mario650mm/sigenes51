<div class="row">
    <div class="">
        <div>
            <h3>
                @yield('title')
            </h3>
            <div class="row" style="margin-left: 3px">
                <div class="col-lg-4 pull-left">
                    <div class="row">
                        <div class="pull-right">
                            @yield('button_delete')
                        </div>
                        <div class="pull-left">
                            @yield('buttons')
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pull-right">
                    @yield('filters')
                </div>
            </div>
        </div>
        <br/>
        <div>
            @yield('body_page')
        </div>
    </div>
</div>