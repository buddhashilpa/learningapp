<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="menu">
            <ul>
                <li>{!! link_to_action('WelcomeController@index', $title = 'Home') !!}</li>
                <li>{!! link_to_action('ArticleController@create', $title = 'New Article') !!}</li>
                <li>{!! link_to_action('ArticleController@index', $title = 'Articles') !!}</li>
            </ul>
        </div>
        @section('sidebar')
            <div class="sidebar">
                <p>This is the master sidebar.</p>
                <p>test</p>
            </div>
        @show
        

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
