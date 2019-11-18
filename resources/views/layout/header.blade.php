<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img class="img-fluid" src="{{asset('assets/img/logo.png')}}" width="50" height="50" alt="Logo Tojo RODIALSON"></a>
                <a class="navbar-brand logo_inner_page" href="/"><img src="{{asset('assets/img/logo.png')}}" width="50" height="50" alt="Logo Tojo RODIALSON"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item active"><a class="nav-link" href="/">@lang('menu.home')</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                    <div class="brand-logo btn-group pull-right">
                        <button class="btn btn-round primary_btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @foreach (Helpers::lang() as $l)
                                @if($l['value'] == Session::get('locale'))
                                    <img src="{{$l['flag']}}" class="m-1" width="24" height="24"/> {{$l['name']}}
                                @endif
                            @endforeach
                        </button>
                        <div class="dropdown-menu animated flipInX">
                            @foreach (Helpers::lang() as $l)
                                @if($l['value'] != Session::get('locale'))
                                    <a class="dropdown-item" href="{{'/lang?lang='.$l['value']}}"><img src="{{$l['flag']}}" class="m-3" width="24" height="24"/> <b>{{$l['name']}}</b></a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
