


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
                                  <span class="nav-text">Banners</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="detail">
                                  <div class="sub-menu">

                                    <li >
                                        <a href="{{route('banner.index')}}">Index</a>
                                      </li>
                                      <li >
                                          <a href="{{route('banner.create')}}">Create</a>
                                        </li>

                                  </div>
                                </ul>
                              </li>

                              <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#detai"
                                  aria-expanded="false" aria-controls="detai">
                                  <span class="nav-text">Services</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="detai">
                                  <div class="sub-menu">

                                    <li >
                                      <a href="{{route('service')}}">Index</a>
                                    </li>
                                    <li >
                                        <a href="{{route('service_create')}}">Create</a>
                                      </li>
                                    </div>
                                </ul>
                              </li>
                                      <li  class="has-sub" >
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#people"
                                          aria-expanded="false" aria-controls="people">
                                          <span class="nav-text">Peoples</span> <b class="caret"></b>
                                        </a>
                                        <ul  class="collapse"  id="people">
                                          <div class="sub-menu">

                                            <li >
                                              <a href="{{route('people')}}">Index</a>
                                            </li>
                                            <li >
                                                <a href="{{route('people_create')}}">Create</a>
                                              </li>
                                            </div>
                                        </ul>
                                      </li>

                                              <li  class="has-sub" >
                                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#work"
                                                  aria-expanded="false" aria-controls="work">
                                                  <span class="nav-text">Works</span> <b class="caret"></b>
                                                </a>
                                                <ul  class="collapse"  id="work">
                                                  <div class="sub-menu">

                                                    <li >
                                                      <a href="{{route("work.index")}}">Index</a>
                                                    </li>
                                                    <li >
                                                        <a href="{{route('work.create')}}">Create</a>
                                                      </li>
                                                    </div>
                                                </ul>
                                              </li>

                                                      <li  class="has-sub" >
                                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#info"
                                                          aria-expanded="false" aria-controls="info">
                                                          <span class="nav-text">Info</span> <b class="caret"></b>
                                                        </a>
                                                        <ul  class="collapse"  id="info">
                                                          <div class="sub-menu">

                                                            <li >
                                                              <a href="{{route('info.index')}}">Index</a>
                                                            </li>
                                                            <li >
                                                                <a href="{{route('info.create')}}">Create</a>
                                                              </li>

                                                            </div>
                                                        </ul>
                                                      </li>




                                                      <li  class="has-sub" >
                                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#create"
                                                          aria-expanded="false" aria-controls="create">
                                                          <span class="nav-text">Creative</span> <b class="caret"></b>
                                                        </a>
                                                        <ul  class="collapse"  id="create">
                                                          <div class="sub-menu">

                                                            <li >
                                                              <a href="{{route('creative.index')}}">Index</a>
                                                            </li>
                                                            <li >
                                                                <a href="{{route('creative.create')}}">Create</a>
                                                              </li>

                                                            </div>
                                                        </ul>
                                                      </li>









                                                      <li  class="has-sub" >
                                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#blog"
                                                          aria-expanded="false" aria-controls="blog">
                                                          <span class="nav-text">Blogs</span> <b class="caret"></b>
                                                        </a>
                                                        <ul  class="collapse"  id="blog">
                                                          <div class="sub-menu">

                                                            <li >
                                                              <a href="{{route('blog.index')}}">Index</a>
                                                            </li>
                                                            <li >
                                                                <a href="{{route('blog.create')}}">Create</a>
                                                              </li>

                                                            </div>
                                                        </ul>
                                                      </li>





                                                      <li  class="has-sub" >
                                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#faq_page"
                                                          aria-expanded="false" aria-controls="faq_page">
                                                          <span class="nav-text">Faq Categories</span> <b class="caret"></b>
                                                        </a>
                                                        <ul  class="collapse"  id="faq_page">
                                                          <div class="sub-menu">

                                                            <li >
                                                              <a href="{{route('faqpage.index')}}">Index</a>
                                                            </li>
                                                            <li >
                                                                <a href="{{route('faqpage.create')}}">Create</a>
                                                              </li>

                                                            </div>
                                                        </ul>
                                                      </li>








                                                      <li  class="has-sub" >
                                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#faq"
                                                          aria-expanded="false" aria-controls="faq">
                                                          <span class="nav-text">Faq</span> <b class="caret"></b>
                                                        </a>
                                                        <ul  class="collapse"  id="faq">
                                                          <div class="sub-menu">

                                                            <li >
                                                              <a href="{{route('faq.index')}}">Index</a>
                                                            </li>
                                                            <li >
                                                                <a href="{{route('faq.create')}}">Create</a>
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
