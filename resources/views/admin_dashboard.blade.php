<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{url('/')}}/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="{{url('/')}}/assets/css/styles.css" />

  <title>Spike Bootstrap Admin</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="{{url('/')}}/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="javascript:void(0)" class="text-nowrap logo-img">
          <img src="{{url('/')}}/assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-Dark" />
          <img src="{{url('/')}}/assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" />
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
          <i class="ti ti-x"></i>
        </a>
      </div>

      <div class="scroll-sidebar" data-simplebar>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="mb-0">

            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link primary-hover-bg" href="" id="get-url" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Dashboard</span>
              </a>
            </li>
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>

      <div class=" fixed-profile mx-3 mt-3">
        <div class="card bg-primary-subtle mb-0 shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-3">
                <img src="{{url('/')}}/assets/images/profile/user-1.jpg" width="45" height="45" class="img-fluid rounded-circle" alt="spike-img" />
                <div>
                  <h5 class="mb-1">Mike</h5>
                  <p class="mb-0">Admin</p>
                </div>
              </div>
              <a href="{{route('logout')}}" class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Logout">
                <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">


      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:atom-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dashboard</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
        </div>
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid">
          <!--  Header Start -->
          <header class="topbar sticky-top">
            <div class="with-vertical"><!-- ---------------------------------- -->
              <!-- Start Vertical Layout Header -->
              <!-- ---------------------------------- -->
              <nav class="navbar navbar-expand-lg p-0">
                <ul class="navbar-nav">
                  <li class="nav-item nav-icon-hover-bg rounded-circle">
                    <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                      <iconify-icon icon="solar:list-bold-duotone" class="fs-7"></iconify-icon>
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav quick-links d-none d-lg-flex align-items-center">

                </ul>

                <div class="d-block d-lg-none py-3">
                  <img src="{{url('/')}}/assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-Dark" />
                  <img src="{{url('/')}}/assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" />
                </div>


                <a class="navbar-toggler p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                  </span>
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <div class="nav-icon-hover-bg rounded-circle ">
                        <i class="ti ti-align-justified fs-7"></i>
                      </div>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">



                      <li class="nav-item nav-icon-hover-bg rounded-circle">
                        <a class="nav-link moon dark-layout" href="javascript:void(0)">
                          <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                        </a>
                        <a class="nav-link sun light-layout" href="javascript:void(0)">
                          <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                        </a>
                      </li>



                      <!-- ------------------------------- -->
                      <!-- start profile Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item dropdown">
                        <a class="nav-link position-relative ms-6" href="javascript:void(0)" id="drop1" aria-expanded="false">
                          <div class="d-flex align-items-center flex-shrink-0">
                            <div class="user-profile me-sm-3 me-2">
                              <img src="{{url('/')}}/assets/images/profile/user-1.jpg" width="40" class="rounded-circle" alt="spike-img">
                            </div>
                            <span class="d-sm-none d-block"><iconify-icon icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

                            <div class="d-none d-sm-block">
                              <h6 class="fs-4 mb-1 profile-name">
                                Mike Nielsen
                              </h6>
                              <p class="fs-3 lh-base mb-0 profile-subtext">
                                Admin
                              </p>
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                          <div class="profile-dropdown position-relative" data-simplebar>
                            <div class="d-flex align-items-center justify-content-between pt-3 px-7">
                              <h3 class="mb-0 fs-5">User Profile</h3>

                            </div>

                            <div class="d-flex align-items-center mx-7 py-9 border-bottom">
                              <img src="{{url('/')}}/assets/images/profile/user-1.jpg" alt="user" width="90" class="rounded-circle" />
                              <div class="ms-4">
                                <h4 class="mb-0 fs-5 fw-normal">Mike Nielsen</h4>
                                <span class="text-muted">super admin</span>
                                <p class="text-muted mb-0 mt-1 d-flex align-items-center">
                                  <iconify-icon icon="solar:mailbox-line-duotone" class="fs-4 me-1"></iconify-icon>
                                  info@spike.com
                                </p>
                              </div>
                            </div>



                            <div class="py-6 px-7 mb-1">
                              <a href="{{route('logout')}}" class="btn btn-primary w-100">Log Out</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end profile Dropdown -->
                      <!-- ------------------------------- -->
                    </ul>
                  </div>
                </div>
              </nav>
              <!-- ---------------------------------- -->
              <!-- End Vertical Layout Header -->
              <!-- ---------------------------------- -->

              <!-- ------------------------------- -->
              <!-- apps Dropdown in Small screen -->
              <!-- ------------------------------- -->
              <!--  Mobilenavbar -->
              <div class="offcanvas offcanvas-start dropdown-menu-nav-offcanvas" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                <nav class="sidebar-nav scroll-sidebar">
                  <div class="offcanvas-header justify-content-between">
                    <img src="{{url('/')}}/assets/images/logos/favicon.png" alt="spike-img" class="img-fluid" />
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body h-n80" data-simplebar>
                    <ul id="sidebarnav">
                      <li class="sidebar-item">
                        <a class="sidebar-link gap-2 has-arrow" href="javascript:void(0)" aria-expanded="false">
                          <iconify-icon icon="solar:list-bold-duotone" class="fs-7"></iconify-icon>
                          <span class="hide-menu">Apps</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level my-3">
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-chat.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                              </div>
                            </a>
                          </li>
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-invoice.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                              </div>
                            </a>
                          </li>
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-mobile.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                              </div>
                            </a>
                          </li>
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-message-box.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                              </div>
                            </a>
                          </li>
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-cart.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                              </div>
                            </a>
                          </li>
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-date.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                              </div>
                            </a>
                          </li>
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-lifebuoy.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                              </div>
                            </a>
                          </li>
                          <li class="sidebar-item py-2">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                              <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                <img src="{{url('/')}}/assets/images/svgs/icon-dd-application.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                              </div>
                              <div>
                                <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                              </div>
                            </a>
                          </li>
                          <ul class="px-8 mt-6 mb-4">
                            <li class="sidebar-item mb-3">
                              <h5 class="fs-5 fw-semibold">Quick Links</h5>
                            </li>
                            <li class="sidebar-item py-2">
                              <a class="fw-semibold text-dark" href="javascript:void(0)">Pricing Page</a>
                            </li>
                            <li class="sidebar-item py-2">
                              <a class="fw-semibold text-dark" href="javascript:void(0)">Authentication Design</a>
                            </li>
                            <li class="sidebar-item py-2">
                              <a class="fw-semibold text-dark" href="javascript:void(0)">Register Now</a>
                            </li>
                            <li class="sidebar-item py-2">
                              <a class="fw-semibold text-dark" href="javascript:void(0)">404 Error Page</a>
                            </li>
                            <li class="sidebar-item py-2">
                              <a class="fw-semibold text-dark" href="javascript:void(0)">Notes App</a>
                            </li>
                            <li class="sidebar-item py-2">
                              <a class="fw-semibold text-dark" href="javascript:void(0)">User Application</a>
                            </li>
                            <li class="sidebar-item py-2">
                              <a class="fw-semibold text-dark" href="javascript:void(0)">Account Settings</a>
                            </li>
                          </ul>
                        </ul>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link gap-2" href="javascript:void(0)" aria-expanded="false">
                          <iconify-icon icon="solar:chat-round-unread-line-duotone" class="fs-6 text-dark"></iconify-icon>
                          <span class="hide-menu">Chat</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link gap-2" href="javascript:void(0)" aria-expanded="false">
                          <iconify-icon icon="solar:calendar-add-line-duotone" class="fs-6 text-dark"></iconify-icon>
                          <span class="hide-menu">Calendar</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link gap-2" href="javascript:void(0)" aria-expanded="false">
                          <iconify-icon icon="solar:mailbox-line-duotone" class="fs-6 text-dark"></iconify-icon>
                          <span class="hide-menu">Email</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
            <div class="app-header with-horizontal">
              <nav class="navbar navbar-expand-xl container-fluid p-0">
                <ul class="navbar-nav">
                  <li class="nav-item d-none d-xl-block">
                    <a href="javascript:void(0)" class="text-nowrap nav-link">
                      <img src="{{url('/')}}/assets/images/logos/logo-light.svg" class="dark-logo" width="180" alt="spike-img" />
                      <img src="{{url('/')}}/assets/images/logos/logo-dark.svg" class="light-logo" width="180" alt="spike-img" />
                    </a>
                  </li>
                </ul>
                <a class="navbar-toggler p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                  </span>
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <div class="nav-icon-hover-bg rounded-circle ">
                        <i class="ti ti-align-justified fs-7"></i>
                      </div>
                    </a>
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                      <li class="nav-item dropdown nav-icon-hover-bg rounded-circle d-flex d-lg-none">
                        <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" aria-expanded="false">
                          <iconify-icon icon="solar:magnifer-linear" class="fs-7 text-dark"></iconify-icon>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                          <!--  Search Bar -->

                          <div class="modal-header border-bottom p-3">
                            <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />

                          </div>
                          <div class="message-body p-3" data-simplebar="">
                            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                            <ul class="list mb-0 py-2">
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Modern</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Dashboard</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Contacts</span>
                                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Posts</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Detail</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Shop</span>
                                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Modern</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Dashboard</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Contacts</span>
                                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Posts</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Detail</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Shop</span>
                                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- start language Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link position-relative shadow-none" href="javascript:void(0)" id="drop3" aria-expanded="false">
                          <form class="nav-link position-relative shadow-none">
                            <input type="text" class="form-control rounded-3 py-2 ps-5 text-dark" placeholder="Try to searching ...">
                            <iconify-icon icon="solar:magnifer-linear" class="text-dark position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></iconify-icon>
                          </form>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                          <!--  Search Bar -->

                          <div class="modal-header border-bottom p-3">
                            <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />

                          </div>
                          <div class="message-body p-3" data-simplebar="">
                            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                            <ul class="list mb-0 py-2">
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Modern</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Dashboard</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Contacts</span>
                                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Posts</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Detail</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Shop</span>
                                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Modern</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Dashboard</span>
                                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Contacts</span>
                                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Posts</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Detail</span>
                                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                              </li>
                              <li class="p-1 mb-1 bg-hover-light-black rounded">
                                <a href="javascript:void(0)">
                                  <span class="fs-3 text-dark d-block">Shop</span>
                                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end language Dropdown -->
                      <!-- ------------------------------- -->

                      <li class="nav-item nav-icon-hover-bg rounded-circle">
                        <a class="nav-link moon dark-layout" href="javascript:void(0)">
                          <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                        </a>
                        <a class="nav-link sun light-layout" href="javascript:void(0)">
                          <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                        </a>
                      </li>

                      <!-- ------------------------------- -->
                      <!-- start Messages cart Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                        <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" aria-expanded="false">
                          <iconify-icon icon="solar:chat-dots-line-duotone" class="fs-6"></iconify-icon>
                          <div class="pulse">
                            <span class="heartbit border-warning"></span>
                            <span class="point text-bg-warning"></span>
                          </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                          <!--  Messages -->
                          <div class="d-flex align-items-center py-3 px-7">
                            <h3 class="mb-0 fs-5">Messages</h3>
                            <span class="badge bg-info ms-3">5 new</span>
                          </div>

                          <div class="message-body" data-simplebar>
                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                              <span class="flex-shrink-0">
                                <img src="{{url('/')}}/assets/images/profile/user-2.jpg" alt="user" width="45" class="rounded-circle" />
                              </span>
                              <div class="w-100 ps-3">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 fs-3 fw-normal">
                                    Roman Joined the Team!
                                  </h5>
                                  <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                </div>
                                <span class="fs-2 d-block mt-1 text-muted">Congratulate him</span>
                              </div>
                            </a>

                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                              <span class="flex-shrink-0">
                                <img src="{{url('/')}}/assets/images/profile/user-3.jpg" alt="user" width="45" class="rounded-circle" />
                              </span>
                              <div class="w-100 ps-3">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 fs-3 fw-normal">
                                    New message received
                                  </h5>
                                  <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                </div>
                                <span class="fs-2 d-block mt-1 text-muted">Salma sent you new
                                  message</span>
                              </div>
                            </a>

                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                              <span class="flex-shrink-0">
                                <img src="{{url('/')}}/assets/images/profile/user-4.jpg" alt="user" width="45" class="rounded-circle" />
                              </span>
                              <div class="w-100 ps-3">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 fs-3 fw-normal">
                                    New Payment received
                                  </h5>
                                  <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                </div>
                                <span class="fs-2 d-block mt-1 text-muted">Check your
                                  earnings</span>
                              </div>
                            </a>

                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                              <span class="flex-shrink-0">
                                <img src="{{url('/')}}/assets/images/profile/user-5.jpg" alt="user" width="45" class="rounded-circle" />
                              </span>
                              <div class="w-100 ps-3">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 fs-3 fw-normal">
                                    New message received
                                  </h5>
                                  <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                </div>
                                <span class="fs-2 d-block mt-1 text-muted">Salma sent you new
                                  message</span>
                              </div>
                            </a>

                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                              <span class="flex-shrink-0">
                                <img src="{{url('/')}}/assets/images/profile/user-6.jpg" alt="user" width="45" class="rounded-circle" />
                              </span>
                              <div class="w-100 ps-3">
                                <div class="d-flex align-items-center justify-content-between">
                                  <h5 class="mb-0 fs-3 fw-normal">
                                    Roman Joined the Team!
                                  </h5>
                                  <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                </div>
                                <span class="fs-2 d-block mt-1 text-muted">Congratulate him</span>
                              </div>
                            </a>
                          </div>

                          <div class="py-6 px-7 mb-1">
                            <button class="btn btn-primary w-100">
                              See All Messages
                            </button>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end Messages cart Dropdown -->
                      <!-- ------------------------------- -->

                      <!-- ------------------------------- -->
                      <!-- start shortcut Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                        <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                          <iconify-icon icon="solar:widget-add-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up pb-0 overflow-hidden" aria-labelledby="drop2">
                          <!--  Shortcuts -->
                          <div class="d-flex align-items-center py-3 px-7 gap-6">
                            <h3 class="mb-0 fs-5">Shortcuts</h3>
                          </div>

                          <div class="row gx-0">
                            <div class="col-6">
                              <a href="javascript:void(0)" class="dropdown-item px-7 border-top border-bottom border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                <div class="bg-secondary-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                  <iconify-icon icon="solar:checklist-minimalistic-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                </div>

                                <h6 class="mb-0 fs-4">Invoice</h6>
                                <span class="d-block text-body-color fs-3">Get latest invoice</span>
                              </a>
                            </div>
                            <div class="col-6">
                              <a href="javascript:void(0)" class="dropdown-item px-7 border-top border-bottom py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                <div class="bg-primary-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                  <iconify-icon icon="solar:chat-square-call-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                </div>
                                <h6 class="mb-0 fs-4">Chat</h6>
                                <span class="d-block text-body-color fs-3">New messages</span>
                              </a>
                            </div>
                            <div class="col-6">
                              <a href="javascript:void(0)" class="dropdown-item px-7 border-bottom border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                <div class="bg-info-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                  <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-info"></iconify-icon>
                                </div>
                                <h6 class="mb-0 fs-4">Contact</h6>
                                <span class="d-block text-body-color fs-3">2 Unsaved Contacts</span>
                              </a>
                            </div>
                            <div class="col-6">
                              <a href="javascript:void(0)" class="dropdown-item px-7 border-bottom py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                <div class="bg-danger-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                  <iconify-icon icon="solar:mailbox-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                </div>
                                <h6 class="mb-0 fs-4">Email</h6>
                                <span class="d-block text-body-color fs-3">Get new emails</span>
                              </a>
                            </div>
                            <div class="col-6">
                              <a href="javascript:void(0)" class="dropdown-item px-7 border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                <div class="bg-warning-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                  <iconify-icon icon="solar:shield-user-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                </div>
                                <h6 class="mb-0 fs-4">Profile</h6>
                                <span class="d-block text-body-color fs-3">More information</span>
                              </a>
                            </div>
                            <div class="col-6">
                              <a href="javascript:void(0)" class="dropdown-item px-7 py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                <div class="bg-success-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                  <iconify-icon icon="solar:calendar-mark-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                </div>
                                <h6 class="mb-0 fs-4">Calendar</h6>
                                <span class="d-block text-body-color fs-3">Get dates</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end shortcut Dropdown -->
                      <!-- ------------------------------- -->

                      <!-- ------------------------------- -->
                      <!-- start profile Dropdown -->
                      <!-- ------------------------------- -->
                      <li class="nav-item dropdown">
                        <a class="nav-link position-relative ms-6" href="javascript:void(0)" id="drop1" aria-expanded="false">
                          <div class="d-flex align-items-center flex-shrink-0">
                            <div class="user-profile me-sm-3 me-2">
                              <img src="{{url('/')}}/assets/images/profile/user-1.jpg" width="40" class="rounded-circle" alt="spike-img">
                            </div>
                            <span class="d-sm-none d-block"><iconify-icon icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

                            <div class="d-none d-sm-block">
                              <h6 class="fs-4 mb-1 profile-name">
                                Mike Nielsen
                              </h6>
                              <p class="fs-3 lh-base mb-0 profile-subtext">
                                Admin
                              </p>
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                          <div class="profile-dropdown position-relative" data-simplebar>
                            <div class="d-flex align-items-center justify-content-between pt-3 px-7">
                              <h3 class="mb-0 fs-5">User Profile</h3>

                            </div>

                            <div class="d-flex align-items-center mx-7 py-9 border-bottom">
                              <img src="{{url('/')}}/assets/images/profile/user-1.jpg" alt="user" width="90" class="rounded-circle" />
                              <div class="ms-4">
                                <h4 class="mb-0 fs-5 fw-normal">Mike Nielsen</h4>
                                <span class="text-muted">super admin</span>
                                <p class="text-muted mb-0 mt-1 d-flex align-items-center">
                                  <iconify-icon icon="solar:mailbox-line-duotone" class="fs-4 me-1"></iconify-icon>
                                  info@spike.com
                                </p>
                              </div>
                            </div>

                            <div class="message-body">
                              <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                <span class="btn px-3 py-2 bg-info-subtle rounded-1 text-info shadow-none">
                                  <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7"></iconify-icon>
                                </span>
                                <div class="w-100 ps-3 ms-1">
                                  <h5 class="mb-0 mt-1 fs-4 fw-normal">
                                    My Profile
                                  </h5>
                                  <span class="fs-3 d-block mt-1 text-muted">Account Settings</span>
                                </div>
                              </a>

                              <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                <span class="btn px-3 py-2 bg-success-subtle rounded-1 text-success shadow-none">
                                  <iconify-icon icon="solar:shield-minimalistic-line-duotone" class="fs-7"></iconify-icon>
                                </span>
                                <div class="w-100 ps-3 ms-1">
                                  <h5 class="mb-0 mt-1 fs-4 fw-normal">My Inbox</h5>
                                  <span class="fs-3 d-block mt-1 text-muted">Messages & Emails</span>
                                </div>
                              </a>

                              <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                <span class="btn px-3 py-2 bg-danger-subtle rounded-1 text-danger shadow-none">
                                  <iconify-icon icon="solar:card-2-line-duotone" class="fs-7"></iconify-icon>
                                </span>
                                <div class="w-100 ps-3 ms-1">
                                  <h5 class="mb-0 mt-1 fs-4 fw-normal">My Task</h5>
                                  <span class="fs-3 d-block mt-1 text-muted">To-do and Daily
                                    Tasks</span>
                                </div>
                              </a>
                            </div>

                            <div class="py-6 px-7 mb-1">
                              <a href="{{route('logout')}}" class="btn btn-primary w-100">Log Out</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- ------------------------------- -->
                      <!-- end profile Dropdown -->
                      <!-- ------------------------------- -->
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </header>
          <!--  Header End -->
          <div class="row">
            <div class="col-lg-12 col-xl-6">
              <div class="card">
                <div class="card-body position-relative">
                  <div>
                    <h4 class="card-title mb-1">Welcome Mike Nielsen</h4>
                    <p class="card-subtitle mb-3 pb-1">Check All The Statastics</p>
                    <button class="btn btn-primary rounded-pill" type="button">
                      Visit Now
                    </button>
                  </div>
                  <div class="school-img d-none d-sm-block">
                    <img src="{{url('/')}}/assets/images/backgrounds/school.png" class="img-fluid" alt="spike-img" />
                  </div>

                  <div class="d-sm-none d-block text-center">
                    <img src="{{url('/')}}/assets/images/backgrounds/school.png" class="img-fluid" alt="spike-img" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-xl-6">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card warning-card overflow-hidden text-bg-primary">
                    <div class="card-body p-4">
                      <div class="mb-7">
                        <i class="ti ti-brand-producthunt fs-8 fw-lighter"></i>
                      </div>
                      <h5 class="text-white fw-bold fs-14 text-nowrap">
                        2358 <span class="fs-2 fw-light">+23%</span>
                      </h5>
                      <p class="opacity-50 mb-0 ">Sales</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card danger-card overflow-hidden text-bg-primary">
                    <div class="card-body p-4">
                      <div class="mb-7">
                        <i class="ti ti-report-money fs-8 fw-lighter"></i>
                      </div>
                      <h5 class="text-white fw-bold fs-14">
                        356 <span class="fs-2 fw-light">+8%</span>
                      </h5>
                      <p class="opacity-50 mb-0">Refunds</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card info-card overflow-hidden text-bg-primary">
                    <div class="card-body p-4">
                      <div class="mb-7">
                        <i class="ti ti-currency-dollar fs-8 fw-lighter"></i>
                      </div>
                      <h5 class="text-white fw-bold fs-14 text-nowrap">
                        $235.8K <span class="fs-2 fw-light">-3%</span>
                      </h5>
                      <p class="opacity-50 mb-0">Earnings</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-4 justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Profit & Expenses</h4>

                    <div class="dropdown">
                      <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                        <i class="ti ti-dots-vertical fs-7 d-block"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-md-7 d-flex flex-column">
                      <div id="profit" class="profit-chart mx-n6"></div>
                    </div>

                    <div class="col-md-5">
                      <div>
                        <div class="d-flex mb-4 pb-3">
                          <div class="p-2 bg-primary-subtle text-primary rounded-circle me-3 round-40 hstack justify-content-center">
                            <iconify-icon icon="solar:document-text-linear" class="fs-6"></iconify-icon>
                          </div>

                          <div>
                            <h5 class="fs-5 mb-0">$63,489.50</h5>
                            <p class="fs-3 mb-0">Earning This Year</p>
                          </div>
                        </div>

                        <div class="d-flex mb-4 pb-3">
                          <div class="p-2 bg-info-subtle text-info rounded-circle me-3 round-40 hstack justify-content-center">
                            <iconify-icon icon="solar:quit-full-screen-circle-linear" class="fs-6"></iconify-icon>
                          </div>

                          <div>
                            <h5 class="fs-5 mb-0">
                              $48,820.00
                              <span class="fs-2 fw-light text-success">+23%</span>
                            </h5>
                            <p class="fs-3 mb-0">Profit This Year</p>
                          </div>
                        </div>

                        <div class="d-flex mb-4 pb-3">
                          <div class="p-2 bg-secondary-subtle rounded-circle me-3 round-40 hstack justify-content-center">
                            <img src="{{url('/')}}/assets/images/svgs/globe-1584990.svg" width="24" height="24" alt="spike-img" />
                          </div>

                          <div>
                            <h5 class="fs-5 mb-0">$103,582.50</h5>
                            <p class="fs-3 mb-0">Overall Earnings</p>
                          </div>
                        </div>

                        <div>
                          <button class="btn btn-primary rounded-pill">
                            View Full Report
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-4 justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Product Sales</h4>

                    <div class="dropdown">
                      <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                        <i class="ti ti-dots-vertical fs-7 d-block"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="test"></div>

                  <div class="d-flex align-items-center mt-3">
                    <div class="rounded-3 bg-primary-subtle me-3 round-40 d-flex align-items-center justify-content-center">
                      <img src="{{url('/')}}/assets/images/svgs/icon-user.svg" alt="spike-img" class="img-fluid">
                    </div>
                    <div>
                      <div class="d-flex align-items-center">
                        <h5 class="mb-0 fs-4">36,436</h5>
                        <span class="badge rounded-pill bg-success-subtle text-success border-success border ms-1">+12%</span>
                      </div>
                      <p class="mb-0">New Customer</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card info-card bg-primary-subtle overflow-hidden shadow-none">
                <div class="card-body">
                  <div class="d-flex mb-7">
                    <div class="p-6 bg-info shadow-info rounded-3 me-3">
                      <img src="{{url('/')}}/assets/images/svgs/idea-1585024.svg" width="24" height="24" alt="spike-img" />
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="fs-4 mb-0 fw-bold">New Goals</h5>
                    <p class="text-info fw-normal fs-3 mb-0">83%</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-info" style="width: 75%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-4">
                    <img src="{{url('/')}}/assets/images/profile/user-3.jpg" class="rounded-circle" alt="spike-img" width="60" height="60" />
                    <p class="text-warning fw-bold fs-3 mb-0">
                      #1 in DevOps
                    </p>
                  </div>

                  <h4 class="card-title mb-1">Adam Johnson</h4>
                  <p class="card-subtitle">Top Developer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Traffic Distribution</h4>

                    <div class="dropdown">
                      <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                        <i class="ti ti-dots-vertical fs-7 d-block"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-5">
                    <div class="d-sm-flex d-block align-items-center justify-content-center">
                      <div id="grade" class="mx-n6"></div>

                      <div class="ms-xxl-4">
                        <div class="d-flex align-items-baseline mb-4">
                          <div>
                            <i class="ti ti-circle text-primary me-2 fs-5"></i>
                          </div>

                          <div>
                            <h5 class="mb-0">4,106 <span class="fs-2 fw-light text-success">+23%</span>
                            </h5>
                            <p class="fs-3 mb-0">Oragnic Traffic</p>
                          </div>
                        </div>
                        <div class="d-flex align-items-baseline mb-4">
                          <div>
                            <i class="ti ti-circle text-danger me-2 fs-5"></i>
                          </div>

                          <div>
                            <h5 class="mb-0">3,500</h5>
                            <p class="fs-3 mb-0">Refferal Traffic</p>
                          </div>
                        </div>
                        <div class="d-flex align-items-baseline">
                          <div>
                            <i class="ti ti-circle text-warning me-2 fs-5"></i>
                          </div>

                          <div>
                            <h5 class="mb-0">3,319</h5>
                            <p class="fs-3 mb-0">Direct Traffic</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="card mb-0 bg-danger-subtle gift-card">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{url('/')}}/assets/images/backgrounds/gifts.png" class="img-fluid" alt="spike-img" />
                    </div>
                  </div>
                </div>
                <div class="figma-card mb-0">
                  <div class="card-body">
                    <a href="javascript:void(0)" class="fs-4 link-dark fw-bold">
                      Figma Tips and Tricks with Stephan
                    </a>
                    <p class="fs-3 mt-2 mb-6">
                      Checkout latest events going to happen in USA.
                    </p>

                    <ul class="d-flex align-items-center mb-0">
                      <li>
                        <a href="javascript:void(0)">
                          <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                        </a>
                      </li>
                      <li class="ms-n2">
                        <a href="javascript:void(0)">
                          <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                        </a>
                      </li>
                      <li class="ms-n2">
                        <a href="javascript:void(0)">
                          <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                        </a>
                      </li>
                      <li class="ms-n2">
                        <a href="javascript:void(0)">
                          <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                        </a>
                      </li>
                      <li class="ms-n2 align-middle d-flex">
                        <a href="javascript:void(0)" class="px-2">
                          <p class="mb-0">+18</p>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card acedamic">
                <div class="card-body">
                  <div class="d-flex mb-4 justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Upcoming Scheduls</h4>

                    <div class="dropdown">
                      <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                        <i class="ti ti-dots-vertical fs-7 d-block"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs shadow justify-content-between" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link me-1 active w-100" data-bs-toggle="tab" href="#one" role="tab">
                        <span>1 to 3</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link me-1" data-bs-toggle="tab" href="#two" role="tab">
                        <span>4 to 7</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link me-1" data-bs-toggle="tab" href="#three" role="tab">
                        <span>8 to 10</span>
                      </a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content mt-3">
                    <div class="tab-pane active" id="one" role="tabpanel">
                      <div class="tab-content" data-simplebar>
                        <div class="row mt-4 gx-0">
                          <div class="col-2">
                            <ul>
                              <li>
                                <p class="fs-3 mb-4 pb-2">8:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">8:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">9:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">9:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">10:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">10:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">11:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">11:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">12:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">12:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">13:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-0">13:30</p>
                              </li>
                            </ul>
                          </div>
                          <div class="col-10">
                            <div class="acedamic-box h-100">
                              <div class="pt-3 px-1">
                                <div class="acedamic-card mt-4 card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    Marketing Meeting
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">08:30 - 10:00</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="acedamic-card border-success card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    Applied mathematics
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">10:15 - 11:45</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="acedamic-card border-danger card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    SEO Session with Team
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">12:00 - 13:25</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="two" role="tabpanel">
                      <div class="tab-content" data-simplebar>
                        <div class="row gx-0 mt-4">
                          <div class="col-2">
                            <ul>
                              <li>
                                <p class="fs-3 mb-4 pb-2">8:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">8:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">9:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">9:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">10:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">10:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">11:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">11:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">12:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">12:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">13:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-0">13:30</p>
                              </li>
                            </ul>
                          </div>
                          <div class="col-10">
                            <div class="acedamic-box h-100">
                              <div class="pt-3 px-1">
                                <div class="acedamic-card mt-4 card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    Marketing Meeting
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">08:30 - 10:00</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="acedamic-card border-primary card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    Applied mathematics
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">10:15 - 11:45</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="acedamic-card border-success card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    SEO Session with Team
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">12:00 - 13:25</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane" id="three" role="tabpanel">
                      <div class="tab-content" data-simplebar>
                        <div class="row gx-0 mt-4">
                          <div class="col-2">
                            <ul>
                              <li>
                                <p class="fs-3 mb-4 pb-2">8:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">8:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">9:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">9:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">10:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">10:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">11:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">11:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">12:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">12:30</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-4 pb-2">13:00</p>
                              </li>
                              <li>
                                <p class="fs-3 mb-0">13:30</p>
                              </li>
                            </ul>
                          </div>
                          <div class="col-10">
                            <div class="acedamic-box h-100">
                              <div class="pt-3 px-1">
                                <div class="acedamic-card mt-4 card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    Marketing Meeting
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">08:30 - 10:00</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="acedamic-card border-secondary card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    Applied mathematics
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">10:15 - 11:45</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="acedamic-card border-info card rounded-1 p-3 shadow-sm">
                                  <h6 class="fs-4">
                                    SEO Session with Team
                                  </h6>
                                  <div class="d-flex align-items-center mb-5">
                                    <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                    <p class="mb-0 fs-3">12:00 - 13:25</p>
                                  </div>
                                  <ul class="d-flex align-items-center mb-0">
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-n1">
                                        <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:void(0)" class="me-1">
                                        <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                      </a>
                                    </li>
                                    <li class="align-middle d-flex">
                                      <a href="javascript:void(0)" class="link-secondary px-2">
                                        <p class="mb-0">+18</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-4 justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Top Employees</h4>

                    <div class="dropdown">
                      <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                        <i class="ti ti-dots-vertical fs-7 d-block"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="table-responsive" data-simplebar>
                    <table class="table table-borderless align-middle text-nowrap mb-1">
                      <thead>
                        <tr>
                          <th scope="col">Profile</th>
                          <th scope="col">Hour Rate</th>
                          <th scope="col">Skills</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="me-3">
                                <img src="{{url('/')}}/assets/images/profile/user-2.jpg" width="50" class="rounded-circle" alt="spike-img" />
                              </div>

                              <div>
                                <h6 class="mb-1 fw-bolder">Mark J. Freeman</h6>
                                <p class="fs-3 mb-0">Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="fs-3 fw-normal mb-0">$80/hour</p>
                          </td>
                          <td>
                            <p class="fs-3 mb-0">
                              HTML
                            </p>
                          </td>
                          <td>
                            <span class="badge bg-success-subtle rounded-pill text-success border-success border fs-2">Available</span>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="me-3">
                                <img src="{{url('/')}}/assets/images/profile/user-3.jpg" width="50" class="rounded-circle" alt="spike-img" />
                              </div>

                              <div>
                                <h6 class="mb-1 fw-bolder">Nina R. Oldman</h6>
                                <p class="fs-3 mb-0">Designer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="fs-3 fw-normal mb-0">$70/hour</p>
                          </td>
                          <td>
                            <p class="fs-3 mb-0">
                              JavaScript
                            </p>
                          </td>
                          <td>
                            <span class="badge bg-primary-subtle rounded-pill text-primary border-primary border fs-2">On
                              Holiday</span>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="me-3">
                                <img src="{{url('/')}}/assets/images/profile/user-4.jpg" width="50" class="rounded-circle" alt="spike-img" />
                              </div>

                              <div>
                                <h6 class="mb-1 fw-bolder">Arya H. Shah</h6>
                                <p class="fs-3 mb-0">Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="fs-3 fw-normal mb-0">$40/hour</p>
                          </td>
                          <td>
                            <p class="fs-3 mb-0">
                              React
                            </p>
                          </td>
                          <td>
                            <span class="badge bg-danger-subtle rounded-pill text-danger border border-danger fs-2">Absent</span>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="me-3">
                                <img src="{{url('/')}}/assets/images/profile/user-5.jpg" width="50" class="rounded-circle" alt="spike-img" />
                              </div>

                              <div>
                                <h6 class="mb-1 fw-bolder">June R. Smith</h6>
                                <p class="fs-3 mb-0">Designer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="fs-3 fw-normal mb-0">$20/hour</p>
                          </td>
                          <td>
                            <p class="fs-3 mb-0">
                              Vuejs
                            </p>
                          </td>
                          <td>
                            <span class="badge bg-warning-subtle rounded-pill text-warning border border-warning fs-2">On
                              Leave</span>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="me-3">
                                <img src="{{url('/')}}/assets/images/profile/user-6.jpg" width="50" class="rounded-circle" alt="spike-img" />
                              </div>

                              <div>
                                <h6 class="mb-1 fw-bolder">Mark J. Freeman</h6>
                                <p class="fs-3 mb-0">Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="fs-3 fw-normal mb-0">$65/hour</p>
                          </td>
                          <td>
                            <p class="fs-3 mb-0">
                              Angular
                            </p>
                          </td>
                          <td>
                            <span class="badge bg-indigo-subtle rounded-pill text-indigo border border-indigo fs-2">Available</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
  function handleColorTheme(e) {
    document.documentElement.setAttribute("data-color-theme", e);
  }
</script>
      <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

      <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body h-n80" data-simplebar>
          <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="light-layout">
              <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
            </label>

            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="dark-layout">
              <i class="icon ti ti-moon fs-7 me-2"></i>Dark
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="ltr-layout">
              <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
            </label>

            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="rtl-layout">
              <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

          <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
              </label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="boxed-layout">
              <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
            </label>

            <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="full-layout">
              <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
            </label>
          </div>

          <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <a href="javascript:void(0)" class="fullsidebar">
              <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
              </label>
            </a>
            <div>
              <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="card-with-border">
              <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
            </label>

            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="card-without-border">
              <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>



  </div>

  <!-- Import Js Files -->
  <script src="{{url('/')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="{{url('/')}}/assets/js/theme/app.init.js"></script>
  <script src="{{url('/')}}/assets/js/theme/theme.js"></script>
  <script src="{{url('/')}}/assets/js/theme/app.min.js"></script>
  <script src="{{url('/')}}/assets/js/theme/sidebarmenu.js"></script>
  <script src="{{url('/')}}/assets/js/theme/feather.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="{{url('/')}}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{url('/')}}/assets/js/dashboards/dashboard2.js"></script>
</body>

</html>
