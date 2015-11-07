<!-- Login Container -->
<div id="login-container">
    <!-- Login Header -->
    <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
        <i class="fa fa-cube"></i> <strong>Seguridad y Poder</strong>
    </h1>
    <!-- END Login Header -->

    <!-- Login Block -->
    <div class="block animation-fadeInQuickInv">
        <!-- Login Title -->
        <div class="block-title">
            <h2>Iniciar Sesion</h2>
        </div>
        <!-- END Login Title -->

        <!-- Login Form -->
        {{ Form::open(['url'=>'admin/login','id'=>'form-login','class'=>'form-horizontal']) }}
            @if(Session::has('error_message'))
                <div class="alert alert-danger margin-bottom">
                    {{ Session::get('error_message') }}
                </div>
            @endif

            @if(Session::has('logout_message'))
                <div class="alert alert-info margin-bottom">
                    {{ Session::get('logout_message') }}
                </div>
            @endif

            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" name="user" class="form-control" placeholder="Usuario">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-8">
                    <label class="csscheckbox csscheckbox-primary">
                        {{ Form::checkbox('remember', true) }}
                        <span></span>
                    </label>
                    Recuerdame?
                </div>
                <div class="col-xs-4 text-right">
                    <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Ingresar</button>
                </div>
            </div>
        {{ Form::close() }}
        <!-- END Login Form -->
    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center animation-pullUp">
        <small><span id="year-copy"></span> &copy; <a href="#" target="_blank">GTechnology</a></small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->