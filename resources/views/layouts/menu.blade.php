<div class="menu">
    <ul class="list">
        <li class="header">PANEL DE NAVEGACION</li>
        <li class="active">
            <a href="#">
                <i class="material-icons">home</i>
                <span>INICIO</span>
            </a>
        </li>
        <li>
            <a href="{{ route('students.index') }}">
                <i class="material-icons">home</i>
                <span>ESTUDIANTES</span>
            </a>
        </li>
        <li>
            <li>
            <a href="{{ route('schools.index') }}">
                <i class="material-icons">home</i>
                <span>INSTITUCIONES</span>
            </a>
        </li> 
        
        <li>
            <a href="{{ route('teachers.index') }}">
                <i class="material-icons">info</i>
                <span>PROFESORES</span>
            </a>
        </li>  
    </ul>
</div>