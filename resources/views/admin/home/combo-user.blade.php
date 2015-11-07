<ul class="dropdown-menu dropdown-menu-right">
    <li class="dropdown-header">
        @if(auth()->user())
            <strong>{{ auth()->user()->email }}</strong>
        @endif

    </li>
    <li>
        <a href="admin/logout" class="logout">
            <i class="fa fa-power-off fa-fw pull-right"></i>
            Cerrar Sesion
        </a>
    </li>
</ul>