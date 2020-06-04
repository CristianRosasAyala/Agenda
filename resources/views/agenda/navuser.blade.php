<nav class="navbar navbar-light">
<a href="{{route('agenda.index')}}" class="navbar-brand"><img id="icono" class="img-responsive"
    src="https://image.winudf.com/v2/image1/Y29tLndpZGVzb2Z0Lmd1aWF0ZWxlZm9uaWNhX2ljb25fMTU2NzAxNzM1N18wMjU/icon.png?w=170&fakeurl=1"></a>

    <ul class="nav flex-column text-center">
    <li class="nav-item">
    <span class="nav-link active">Bienvenido {{ Auth::user()->name }}</span> {{-- Accediendo al nombre del usuario ingresado --}}
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        Cerrar Sesión
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
    </li>
    </ul>

    </nav>

