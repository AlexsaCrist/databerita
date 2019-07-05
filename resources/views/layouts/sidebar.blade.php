<ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                @if(Auth::user()->gambar == '')

                  <img src="{{asset('images/user/default.png')}}" alt="profile image">
                @else

                  <img src="{{asset('images/user/'. Auth::user()->gambar)}}" alt="profile image">
                @endif
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Auth::user()->name}}</p>
                  <div>
                    <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">{{ Auth::user()->level }}</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item {{ setActive(['/', 'home']) }}">
            <a class="nav-link" href="{{url('/')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          @if(Auth::user()->level == 'admin')
          <li class="nav-item {{ setActive(['anggota*', 'berita*', 'redaksi*', 'jenis*', 'user*']) }}">
            <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ setShow(['anggota*', 'berita*','redaksi*', 'jenis*', 'user*']) }}" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['redaksi*']) }}" href="{{route('redaksi.index')}}">Data Redaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['jenis*']) }}" href="{{route('jenis.index')}}">Jenis Berita</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item {{ setActive(['indexberita*']) }}">
            <a class="nav-link" href="{{route('indexberita.index')}}">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Berita</span>
            </a>
          </li>
          @endif

          @if(Auth::user()->level == 'madmin')
          <li class="nav-item {{ setActive(['anggota*', 'berita*', 'redaksi*', 'jenis*', 'user*']) }}">
            <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ setShow(['anggota*', 'berita*','redaksi*', 'jenis*', 'user*']) }}" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['anggota*']) }}" href="{{route('anggota.index')}}">Data Anggota</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['redaksi*']) }}" href="{{route('redaksi.index')}}">Data Redaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['jenis*']) }}" href="{{route('jenis.index')}}">Jenis Berita</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link {{ setActive(['user*']) }}" href="{{route('user.index')}}">Data User</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item {{ setActive(['indexberita*']) }}">
            <a class="nav-link" href="{{route('indexberita.index')}}">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Berita</span>
            </a>
          </li>
          @endif
        </ul>
