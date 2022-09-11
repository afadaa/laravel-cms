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
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('videos.index') }}"
       class="nav-link {{ Request::is('videos*') ? 'active' : '' }}">
        <p>Videos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('galeris.index') }}"
       class="nav-link {{ Request::is('galeris*') ? 'active' : '' }}">
        <p>Galeris</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('announcements.index') }}"
       class="nav-link {{ Request::is('announcements*') ? 'active' : '' }}">
        <p>Announcements</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('slides.index') }}"
       class="nav-link {{ Request::is('slides*') ? 'active' : '' }}">
        <p>Slides</p>
    </a>
</li>


