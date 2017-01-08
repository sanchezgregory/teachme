<ul class="nav navbar-nav">

    <li @if (Route::is('ticket.latest')) class="active" @endif><a href="{{ route('tickets.latest') }}">Recientes <span class="sr-only">(current)</span></a></li>
    <li @if (Route::is('ticket.popular')) class="active" @endif><a href="{{ route('tickets.popular') }}">Populares</a></li>
    <li @if (Route::is('ticket.open')) class="active" @endif><a href="{{ route('tickets.open') }}">Abiertas</a></li>
    <li @if (Route::is('ticket.closed')) class="active" @endif><a href="{{ route('tickets.closed') }}">Finalizadas</a></li>

</ul>