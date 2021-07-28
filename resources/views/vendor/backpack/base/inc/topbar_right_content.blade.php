<!-- This file is used to store topbar (right) items -->

{{-- <li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="la la-bell"></i><span class="badge badge-pill badge-danger">5</span></a></li>
<li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="la la-list"></i></a></li>
<li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="la la-map"></i></a></li> --}}

<li class="nav-item dropdown pr-4">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="{{ url('/images/languages.png') }}" width="25px" height="25px" alt="">
    </a>
    <div class="dropdown-menu {{ config('backpack.base.html_direction') == 'rtl' ? 'dropdown-menu-left' : 'dropdown-menu-right' }} mr-4 pb-1 pt-1">
        <a class="dropdown-item" href="{{ route('backpack.account.info') }}">
            <img src="{{ url('/images/en_lang.png') }}" width="20px" height="20px" alt="">
            English
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ backpack_url('logout') }}">
            <img src="{{ url('/images/ar_lang.png') }}" width="20px" height="20px" alt="">
            العربية
        </a>
    </div>
</li>