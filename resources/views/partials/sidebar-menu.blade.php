@if (Auth::guest())
        <!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
        <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
@else
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">


        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">প্রোডাক্ট</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/product') }}">প্রোডাক্ট তালিকা</a></li>
            </ul>
        </li>

</ul>
@endif