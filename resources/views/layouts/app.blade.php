<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <ul>
                <li>
                    <a href="{{ route('home') }}">{{ __('menu.home') }}</a>
                </li>
                <li>
                    <a href="{{ route('contatti') }}">{{ __('menu.contact') }}</a>
                </li>
            </ul>
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['menu_label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>
