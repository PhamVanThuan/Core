    {{-- Ce template n'est pas utilisé pour le moment --}}
    <nav role="navigation" class="menu menu-languages">
        <ul class="nav nav-pills">
            @foreach ($languagesMenu as $item)
                <li class="{{ $item->class }}">
                    <a href="{{ URL::to($item->lang) }}">{{ $item->lang }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
