<li class="nav-header">Main Navigation</li>
    @if(auth()->user()->level == 1)

          <li class="nav-item">
            <a href="/guru" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">guru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/siswa" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>siswa</p>
            </a>
          </li>

      @elseif(auth()->user()->level == 2)
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>user</p>
            </a>
          </li>
          
       @elseif(auth()->user()->level == 3)
          <li class="nav-item">
            <a href="/pelanggan" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>pelanggan</p>
            </a>
          </li>

      @endif