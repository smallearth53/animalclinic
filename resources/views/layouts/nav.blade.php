
<nav class="navbar navbar-default">
            <div class='container'>
<!--                <div class="navbar-header">
                     responsive nav button 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                   
                    </button>
                
                    <div class="navbar-brand">
                        <a href="{{url('/')}}" >
                            <img class='logo' src="{{asset('img/logo.png')}}" height='40px'>
                        </a>
                       
                    </div>
                    
                </div>-->
                <!-- main menu -->
                <img class='logo' src="{{asset('img/logo.png')}}" height='150px'>
                
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="{{url('/')}}" >Home</a>
                                
                            </li>
                             <li class="">
                                <a  >/</a>
                                
                            </li>
                            <li><a href="{{url('/about')}}">Products</a></li>                     
                        
<!--                            <li><a href="{{url('/contact')}}">Contact</a></li>-->
                            @if (Auth::check())
                            <a href="{{url('/login')}}" class='navbar-text'>Welcome, {{ Auth::user()->name }}!</a>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
    
    
               
            
        </nav>
