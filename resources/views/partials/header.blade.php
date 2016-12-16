 <style>
 	li.active{
 		background: red;
 		color: #fff;
 		border-radius: 3px;
 		width: 80px;
 	}
 </style>
 <nav>
                <ul>
                    <li class="{{ (Request::segment(1) == '')? 'active' : '' }}">
                    <a href='/'>home</a></li>
                    <li class="{{ (Request::segment(1) == 'about-us')? 'active' : '' }}">
                    <a href={{ route('about') }}>about</a></li>
                    <li class="{{ (Request::segment(1) == 'contact-us')? 'active' : '' }}">
                    <a href={{ route('contact') }}>contact</a></li>
                    <li class="{{ (Request::segment(1) == 'video')? 'active' : '' }}">
                    <a href='/video'>video</a></li>
                </ul>
            </nav>