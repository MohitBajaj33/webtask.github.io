<header id="header-top" class="bg_color_a">
                                        <div class="header-mobile">

                        <ul id="menu-dropdown" class="inline-list left">
                            <li><a href="{{('/')}}" class="company-name"><img alt="JJ Bakers" class="mobile-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx0Sld4u9mZjbZED6tn34nlEVkGEybUXYyKQ&usqp=CAU"style="height: 70px;margin-top: 13px;" /></a></li>
                        </ul>

                        <ul class="inline-list right">
                            <li class="order-btn"><a href="order-online/index.html" class="nav-button font_2">Order Now</a></li>                            <li class="menu-btn"><a href="#" class="right-off-canvas-toggle"><i class="fa fa-3x fa-reorder"></i></a></li>
                        </ul>
                    </div>
                                        <div class="header-wrapper clearfix">
                                                    <div class="nav-left header-nav large-5 columns">
                                <ul class="nav-list">
                                    <li class=""><a href="{{url('/')}}" class="nav-button">Home</a></li>
                                 <li class=""><a href="{{url('/about-us')}}" class="nav-button">About Us</a></li>
                                 <li class=""><a href="{{url('/faq')}}" class="nav-button">faq</a></li>
                                                                            </ul>
                            </div>
                                                <div class="header-logo header-nav large-12 columns">
                            <a href="{{('/')}}"><img alt="JJ Bakers" class="logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx0Sld4u9mZjbZED6tn34nlEVkGEybUXYyKQ&usqp=CAU"style="height: 82px;"/></a>

                        </div>

                        @php
                         if(session()->has('Register')){
                        $user_id=session()->get('Register')->id;
                        $items=\Illuminate\Support\Facades\DB::table('carts')->where('user_id',$user_id)->get();
                        $count_items=count($items);
                         }
                        @endphp

                                                    <div class="nav-right header-nav large-5 columns">
                                <ul class="nav-list">
                                    
                                    @if(!session()->has('Register'))
                                    <li class=""><a href="{{url('/login')}}" class="nav-button">Login</a></li>
                                    @endif
                                    <li class=""><a href="{{url('/locate-us')}}" class="nav-button">Locate Us</a></li>
                                    @if(session()->has('Register') and basename(url()->current())!='login')
                                    <li class=""><a href="{{url('/mycart')}}" class="nav-button">Cart({{$count_items}})</a></li>
                                    <li class=""><a href="{{url('/logout')}}" class="nav-button">Logout</a></li>
                                    
                                    @else
                                    
                                    <li class=""><a href="{{url('/')}}" class="nav-button">Order Online</a></li>
                                    @endif
                                                                                </ul>
                            </div>

                            
                        
                        
                    </div>

                </header>