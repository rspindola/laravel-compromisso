<li class="header-notification lng-dropdown">
    <a href="#" id="dropdown-active-item">
        <i class="flag-icon flag-icon-gb m-r-5"></i> English
    </a>
    <ul class="show-notification">
        <li>
            <a href="#" data-lng="en">
                <i class="flag-icon flag-icon-gb m-r-5"></i> English
            </a>
        </li>
        <li>
            <a href="#" data-lng="es">
                <i class="flag-icon flag-icon-es m-r-5"></i> Spanish
            </a>
        </li>
        <li>
            <a href="#" data-lng="pt">
                <i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
            </a>
        </li>
        <li>
            <a href="#" data-lng="fr">
                <i class="flag-icon flag-icon-fr m-r-5"></i> French
            </a>
        </li>
    </ul>
</li>

@if(count(config('panel.available_languages', [])) > 1)
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif