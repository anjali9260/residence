


        <aside class="left-sidebar bg-sidebar" >
            <div id="sidebar" class="sidebar sidebar-with-footer">
              <!-- Aplication Brand -->
              <div class="app-brand" >
                <a href="https://www.kross-over.net/">

                  <span class="brand-name">Synch Tasks</span>
                </a>
              </div>
              <!-- begin sidebar scrollbar -->
              <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li  class="has-sub active expand" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse show"  id="dashboard"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#detail"
                                  aria-expanded="false" aria-controls="detail">
                                  <span class="nav-text">Portfolio</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="detail">
                                  <div class="sub-menu">

                                    <li >
                                        <a href="{{route('portfolio.index')}}">Index</a>
                                      </li>
                                      <li >
                                          <a href="{{route('portfolio.create')}}">Create</a>
                                        </li>

                                  </div>
                                </ul>
                              </li>





                              <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#about"
                                  aria-expanded="false" aria-controls="about">
                                  <span class="nav-text">About</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="about">
                                  <div class="sub-menu">

                                    <li >
                                        <a href="{{route('about.index')}}">Index</a>
                                      </li>
                                      <li >
                                          <a href="{{route('about.create')}}">Create</a>
                                        </li>

                                  </div>
                                </ul>
                              </li>





                              <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#aboutFaq"
                                  aria-expanded="false" aria-controls="aboutFaq">
                                  <span class="nav-text">AboutFaq</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="aboutFaq">
                                  <div class="sub-menu">

                                    <li >
                                        <a href="{{route('aboutFaq.index')}}">Index</a>
                                      </li>
                                      <li >
                                          <a href="{{route('aboutFaq.create')}}">Create</a>
                                        </li>

                                  </div>
                                </ul>
                              </li>







        <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#product"
                                  aria-expanded="false" aria-controls="product">
                                  <span class="nav-text">Product</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="product">
                                  <div class="sub-menu">

                                    <li >
                                        <a href="{{route('product.index')}}">Index</a>
                                      </li>
                                      <li >
                                          <a href="{{route('product.create')}}">Create</a>
                                        </li>

                                  </div>
                                </ul>
                              </li>











                                  </div>
                                </ul>
                              </li>

                    </div>

            </div>
          </aside>
