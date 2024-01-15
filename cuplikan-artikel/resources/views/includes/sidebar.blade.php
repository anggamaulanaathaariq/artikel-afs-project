  <!-- Sidebar -->
  <div class="sidebar sidebar-style-2">
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
              <div class="user">
                  <div class="avatar-sm float-left mr-2">
                      <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>
                  <div class="info">
                      <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                          <span>
                              Hizrian
                              <span class="user-level">Administrator</span>
                              <span class="caret"></span>
                          </span>
                      </a>
                      <div class="clearfix"></div>

                      <div class="collapse in" id="collapseExample">
                          <ul class="nav">
                              <li>
                                  <a href="#profile">
                                      <span class="link-collapse">My Profile</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#edit">
                                      <span class="link-collapse">Edit Profile</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#settings">
                                      <span class="link-collapse">Settings</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <ul class="nav nav-primary">
                  <li class="nav-item active">
                      <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                          <i class="fas fa-home"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li class="nav-section">
                      <span class="sidebar-mini-icon">
                          <i class="fa fa-ellipsis-h"></i>
                      </span>
                      <h4 class="text-section">Components</h4>
                  </li>

                  <ul class="nav">
                      <li class="nav-item active">
                          <a href="{{ route('category.index')}}">
                              <i class="fas fa-th-list"></i>
                              <p>Kategori</p>
                          </a>
                      </li>
                      <li class="nav-item active">
                        <a href="{{ route('artikel.index')}}">
                            <i class="far fa-newspaper	"></i>
                            <p>Artikel</p>
                        </a>
                    </li>

                      <li class="nav-item active">
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <i class="fas fa-sign-out-alt"></i>
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </ul>
          </div>
      </div>
  </div>
  <!-- End Sidebar -->
