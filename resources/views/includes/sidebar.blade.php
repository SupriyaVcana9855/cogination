  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background-color:#0476b4">
      <!-- Brand Logo -->
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="image">
              <img src="{{ asset('assets/images/New-logo.png') }}" alt="User Image" style="    width: 188px;">
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard*') ? 'active' : ''}}">
                          <i class="nav-icon fas fa-tachometer-alt" style="color:white"></i>
                          <p style="color:white">
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('header.index')}}" class="nav-link {{request()->is('header*') ? 'active' : ''}}">
                          <i class="nav-icon far fa-plus-square" style="color:white"></i>
                          <p style="color:white">
                              Header
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('home.index')}}" class="nav-link {{request()->is('home*') ? 'active' : ''}}">
                          <i class="nav-icon fa fa-home" style="color:white"></i>
                          <p style="color:white">
                              Hero Section
                          </p>
                      </a>
                  </li>
                  <li class="nav-item {{ request()->is('whychooseus*') || request()->is('bringinghealthcare*') || request()->is('faqs*') || request()->is('appointment*') || request()->is('our-services*') ? 'menu-open' : '' }}"">
    <a href=" #" class="nav-link">
                      <i class="nav-icon fa fa-home" style="color:white"></i>
                      <p style="color:white">
                          Home Section
                          <i class="fas fa-angle-left right"></i>
                      </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{route('appointment')}}"
                                  class="nav-link {{ request()->is('appointment*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon" style="color:white"></i>
                                  <p style="color:white">Appointment</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('whychooseus')}}"
                                  class="nav-link {{ request()->is('whychooseus*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon" style="color:white"></i>
                                  <p style="color:white">Why Choose Us</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('our-services')}}"
                                  class="nav-link {{ request()->is('our-services*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon" style="color:white"></i>
                                  <p style="color:white">Our Services</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('bringinghealthcare')}}"
                                  class="nav-link {{ request()->is('bringinghealthcare*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon" style="color:white"></i>
                                  <p style="color:white">Bringing healthcare</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('faqs')}}"
                                  class="nav-link {{ request()->is('faqs*') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon" style="color:white"></i>
                                  <p style="color:white">FAQs</p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  <li class="nav-item">
                      <a href="{{route('about.index')}}" class="nav-link {{request()->is('about*') ? 'active' : ''}}">
                          <i class="nav-icon far fa-user" style="color:white"></i>
                          <p style="color:white">
                              About Us
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('service.index') }}" class="nav-link {{request()->is('service*') ? 'active' : ''}}">
                          <i class="nav-icon far fa-user" style="color:white"></i>
                          <p style="color:white">
                              Services
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{route('news.index')}}" class="nav-link {{request()->is('news*') ? 'active' : ''}}">
                          <i class="nav-icon fa fa-newspaper" aria-hidden="true" style="color:white"></i>
                          <p style="color:white">
                              Latest News
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('link.index')}}" class="nav-link {{request()->is('link*') ? 'active' : ''}}">
                          <i class="nav-icon fa fa-link" style="color:white"></i>
                          <p style="color:white">
                              Useful Links
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{route('footer.index')}}" class="nav-link {{request()->is('footer*') ? 'active' : ''}}">
                          <i class="nav-icon fa fa-link" style="color:white"></i>
                          <p style="color:white">
                              Footer
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{route('page.index')}}" class="nav-link {{request()->is('page*') ? 'active' : ''}}">
                          <i class="nav-icon fa fa-cog" style="color:white"></i>
                          <p style="color:white">
                              Design Styles
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>