<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="{{ asset('images/logos/dark-logo.svg') }}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">User Management</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Product Management</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Profile</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">Forms</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
              <span>
                <i class="ti ti-typography"></i>
              </span>
              <span class="hide-menu">Typography</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>