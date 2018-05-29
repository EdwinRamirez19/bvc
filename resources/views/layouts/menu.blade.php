<div class="menu">
    <ul class="list">
        <li class="header">PANEL DE NAVEGACION</li>
        <li class="active">
            <a href="{{route('inicio')}}">
                <i class="material-icons">home</i>
                <span>INICIO</span>
            </a>
        </li>

        @can('students.index')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('students.index') }}">
                <i class="material-icons">person_outline</i>
                <span>ESTUDIANTES</span>
            </a>
        </li>
        @endcan
        
        @can('schools.index')
        <li class="nav-item">
            <a class="nav-link"  href="{{ route('schools.index') }}">
                <i class="material-icons">business</i>
                <span>INSTITUCIONES</span>
            </a>
        </li> 
        @endcan
        
        @can('teachers.index')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('teachers.index') }}">
                <i class="material-icons">person</i>
                <span>PROFESORES</span>
            </a>
        </li>
        @endcan
        
        @can('questions.index')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('questions.index') }}">
                <i class="material-icons">more_vert</i>
                <span>ENCUESTA</span>
            </a>
        </li>
        @endcan

       @can('events.index')
        <li class="nav-item">
            <a class="nav-link"href="{{ route('events.index') }}">
                <i class="material-icons">event</i>
                <span>EVENTOS</span>
            </a>
        </li>
        @endcan

        @can('users.index')
        <li class="nav-item">
            <a class="nav-link"href="{{ route('users.index') }}">
                <i class="material-icons">person</i>
                <span>USUARIOS</span>
            </a>
        </li>
        @endcan

        @can('roles.index')
        <li class="nav-item">
            <a class="nav-link"href="{{ route('roles.index') }}">
                <i class="material-icons">person</i>
                <span>ROLES</span>
            </a>
        </li>
        @endcan
        </li>  
    </ul>
</div>