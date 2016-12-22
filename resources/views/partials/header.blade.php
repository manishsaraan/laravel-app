 <style>
 	/*li.active{
 		background: red;
 		color: #fff;
 		border-radius: 3px;
 		width: 80px;
 	}*/
 </style>
 <header>
 <nav class="navbar navbar-default">
 <div class="container">
                <a href='#' class="navbar-brand">My App</a>
                <ul class="nav navbar-nav">
                    <li class="{{ (Request::segment(1) == '')? 'active' : '' }}">
                    <a href='/'>home</a></li>
                    <li class="{{ (Request::segment(1) == 'about-us')? 'active' : '' }}">
                    <a href={{ route('about') }}>about</a></li>
                    <li class="{{ (Request::segment(1) == 'contact-us')? 'active' : '' }}">
                    <a href={{ route('contact') }}>contact</a></li>
                    <li class="{{ (Request::segment(1) == 'video')? 'active' : '' }}">
                    <a href='/video'>video</a></li>
                    <li class="{{ (Request::segment(1) == 'users')? 'active' : '' }}">
                    <a href='/users'>View Users</a></li>
                </ul>
</div>
            </nav>
</header>