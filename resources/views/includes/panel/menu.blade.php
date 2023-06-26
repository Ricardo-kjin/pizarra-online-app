{{-- MENU DEL DASHBOARD --}}
<h6 class="navbar-heading text-muted">
    @if (auth()->user()->role == 'admin')
        Gestión
    @else
        Menú
    @endif

</h6>
<ul class="navbar-nav">
    <li class="nav-item  active ">
        <a class="nav-link  active " href="/home">
            <i class="ni ni-tv-2 text-danger"></i> Dashboard
        </a>
    </li>
    @if (auth()->user()->role=='admin')
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/desarrolladores') }}">
                <i class="fas fa-users text-warning"></i> Desarrolladores
            </a>
        </li>

    @endif
    <li class="nav-item">
        <a class="nav-link " href="{{ url('/salas') }}">
            <i class="fas fa-door-closed text-success"></i> Salas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
            <i class="fas fa-sign-in-alt"></i> Cerrar Sesión
        </a>
        <form action="{{ route('logout') }}" method="POST" style="display: none" id="form-logout">
            @csrf
        </form>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted" style="display: none">Por si acaso</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3" style="display: none">
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
            <i class="ni ni-spaceship"></i> Getting started
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
            <i class="ni ni-palette"></i> Foundation
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
            <i class="ni ni-ui-04"></i> Components
        </a>
    </li>
</ul>
