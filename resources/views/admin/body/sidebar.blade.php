 <div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="logo-box">
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="24">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="24">
                                </span>
                            </a>
                        </div>

                  <ul id="side-menu">

                            <li class="menu-title">Menu</li>
                             <li>
                                <a href="{{route('dashboard')}}" class="tp-link">
                                    <i data-feather="home"></i>
                                    <span> Home </span>
                                </a>
                            </li>
                
                            <li class="menu-title">Frontend</li>



                            <li>
                                <a href="#sidebarError" data-bs-toggle="collapse">
                                    <i data-feather="alert-octagon"></i>
                                    <span> Slider Setup </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarError">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('view_slider')}}" class="tp-link">View Slider</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i data-feather="file-text"></i>
                                    <span> Title Setup </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('view.title')}}" class="tp-link">View Title</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-title mt-2">Contacts</li>

                            <li>
                                <a href="#sidebarBaseui" data-bs-toggle="collapse">
                                    <i data-feather="package"></i>
                                    <span> Contact Messages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarBaseui">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('view_answer')}}" class="tp-link">View Contact Messages</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                              <li class="menu-title mt-2">menus</li>

                            <li>
                                <a href="#sidebarAbout" data-bs-toggle="collapse">
                                    <i data-feather="help-circle"></i>
                                    <span> About </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAbout">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('view_about') }}" class="tp-link">View Mission/Vision</a>
                                        </li>
                                         <li>
                                            <a href="{{ route('about.multi.image') }}" class="tp-link">About Multi Image</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarServices" data-bs-toggle="collapse">
                                    <i data-feather="cpu"></i>
                                    <span> Our Services </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarServices">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('all.service')}}" class="tp-link">View Services</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarProducts" data-bs-toggle="collapse">
                                    <i data-feather="shopping-bag"></i>
                                    <span> Products </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarProducts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('all.product')}}" class="tp-link">View Products</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarDigital" data-bs-toggle="collapse">
                                    <i data-feather="cast"></i>
                                    <span> Digital Marketing </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarDigital">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('edit.digital.marketing')}}" class="tp-link">Digital Marketing Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarFeatures" data-bs-toggle="collapse">
                                    <i data-feather="layout"></i>
                                    <span> Features Setup </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarFeatures">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('all.features')}}" class="tp-link">View Features</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add.features')}}" class="tp-link">Add Feature</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarClients" data-bs-toggle="collapse">
                                    <i data-feather="users"></i>
                                    <span> Clients Setup </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarClients">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.clients') }}" class="tp-link">All Clients</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.clients') }}" class="tp-link">Add Clients</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarStats" data-bs-toggle="collapse">
                                    <i data-feather="bar-chart-2"></i>
                                    <span> Stats Setup </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarStats">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.stats') }}" class="tp-link">All Stats</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.stat') }}" class="tp-link">Add Stat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

</div>
</div>
