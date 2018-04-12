@include('layouts.headertop')
@include('layouts.sidebarlogout')

        {{--<!-- Breadcrumbs-->--}}
        {{--<ol class="breadcrumb">--}}
            {{--<li class="breadcrumb-item">--}}
                {{--<a href="index.html">Dashboard</a>--}}
            {{--</li>--}}
            {{--<li class="breadcrumb-item active">Blank Page</li>--}}
        {{--</ol>--}}

        <div class="row">
            <div class="col-12 text-center">
                <h1> @yield( 'content_title')</h1>

                @yield('content')

            </div>
        </div>
    </div>


@include('layouts.footer')
@include('layouts.logoutmodal')