<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('beritas.index') }}"
       class="nav-link {{ Request::is('beritas*') ? 'active' : '' }}">
        <p>Beritas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('agendas.index') }}"
       class="nav-link {{ Request::is('agendas*') ? 'active' : '' }}">
        <p>Agendas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pengumumen.index') }}"
       class="nav-link {{ Request::is('pengumumen*') ? 'active' : '' }}">
        <p>Pengumumen</p>
    </a>
</li>


