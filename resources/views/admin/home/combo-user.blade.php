<ul class="dropdown-menu dropdown-menu-right">
    <li class="dropdown-header">
        <strong>{{ Auth::user()->member()->person->name . ' ' . Auth::user()->member()->person->lastname . ' ( ' . Auth::user()->user . ' )' }}</strong>
    </li>
    <li>
        <a href="#" class="profile">
            <i class="fa fa-pencil-square fa-fw pull-right"></i>
            Perfil
        </a>
    </li>
    <li>
        <a href="admin/logout" class="logout">
            <i class="fa fa-power-off fa-fw pull-right"></i>
            Cerrar Sesion
        </a>
    </li>
</ul>