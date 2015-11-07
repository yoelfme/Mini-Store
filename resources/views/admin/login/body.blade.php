<!-- Login Container -->
<div id="login-container">
    <!-- Login Header -->
    <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
        <i class="fa fa-cube"></i> <strong>{{ config('store.title') }}</strong>
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
        {!! Form::open(['url'=> 'auth/login', 'id'=>'form-login', 'class'=>'form-horizontal']) !!}

            @if (count($errors) > 0)
                <div class="alert alert-danger margin-bottom">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <div class="col-xs-12">
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Clave']) !!}
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-8">
                    <label class="csscheckbox csscheckbox-primary">
                        {!! Form::checkbox('remember', true) !!}
                        <span></span>
                    </label>
                    Recuerdame?
                </div>
                <div class="col-xs-4 text-right">
                    <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Ingresar</button>
                </div>
            </div>
        {!! Form::close() !!}
        <!-- END Login Form -->
    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center animation-pullUp">
        <small><span id="year-copy"></span> &copy; <a href="#" target="_blank">{{ config('store.author.name') }}</a></small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->