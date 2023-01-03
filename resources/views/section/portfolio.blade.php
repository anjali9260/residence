<section class="portfolio">

    <div class="portfolio-wrapper">

        <div class="form-group">
            <input type="search" onkeyup="myFunction()" id="search" name="search" placeholder="Search for title...."
                class="form-control mb-3">

            {{-- <spam class="form-group-btn">
            <button type="submit" class="btn btn-primary">Search</button>
        </spam> --}}

        </div>



        <h1>Our listings portfolio</h1>
        <p class="para">These are the latest properties in the Sales category. You can create the list using the
            “latest listing shortcode” and show items by specific categories.</p>
        <div class="btns">
            <div class="btn btn-active" id="all">All</div>
            <div class="btn" id="btn1">Rentals</div>
            <div class="btn" id="btn2">Sales</div>
            <div class="btn" id="btn3">Invest</div>
        </div>


        <div class="card-wrapper" id="card-wrapper">

            @foreach ($portfolios as $key => $item)
                <div class="card all card-active {{ $item->type }}">
                    <div class="img-wrapper">

                        @if ($item->featured)
                            <div class="list" id="featured">
                                Featured
                            </div>
                        @endif

                        <div class="list" id="sales">{{ $item->type }}</div>

                        @if ($item->offer)
                            <div class="list" id="offer">
                                New Offer
                            </div>
                        @endif

                        <img src="{{ asset($item->image) }}" alt="">
                        <div class="info">
                            <div class="address">
                                <i class="fa-solid fa-location-dot locate"></i><span>{{ $item->address }}</span>
                            </div>
                            <div class="right">
                                <i class="fa-solid fa-video locate"></i>
                                <div>
                                    <i class="fa-solid fa-camera locate"></i><span>7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h2 class="card-title">{{ $item->title }}</h2>
                        <h3>from <span>Rs{{ $item->rate }}</span></h3>
                        <div class="para1">{!! Str::words($item->paragraph, 20) !!}</div>
                        <div class="size">
                            <div><i class="fa-solid fa-bed icon"></i><span>{{ $item->bedroom }}</span></div>
                            <div><i class="fa-solid fa-bath icon"></i><span>{{ $item->bathroom }}</span></div>
                            <div><i class="fa-solid fa-maximize icon"></i><span>{{ $item->area }}ft</span></div>
                        </div>
                        <div class="name">
                            <div class="left">
                                <div class="img-wrap">
                                    <img src="{{ asset('image/person-1.webp') }}" alt="">
                                </div>
                                <h4>{{ $item->user->name }}</h4>
                            </div>

                            <div class="link">
                                <i class="fa-solid fa-share-nodes item"></i>
                                <i class="fa-regular fa-heart item"></i>
                                <i class="fa-solid fa-plus item"></i>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

        {{ $portfolios->links() }}
    </div>
</section>




{{--
            <div class="card rent all card-active" >
<div class="img-wrapper">
    <div class="list" id="featured">Featured</div>
    <div class="list" id="sales">Rentals</div>
    <div class="list" id="offer">New Offer</div>
    <img src="{{asset('image/card4.jpg')}}" alt="">
    <div class="info">
        <div class="address">
            <i class="fa-solid fa-location-dot locate"></i><span>Greenville, Jersey City</span>
        </div>
<div class="right">
    <i class="fa-solid fa-video locate"></i>
   <div> <i class="fa-solid fa-camera locate"></i><span>7</span></div>

</div>
    </div>

</div>
<div class="detail">
    <h2>Luxury House in Greenville</h2>
    <h3>from <span>Rs 86,000</span></h3>
    <p>This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley...</p>
    <div class="size">
      <div><i class="fa-solid fa-bed icon"></i><span>2</span></div>
        <div><i class="fa-solid fa-bath icon"></i><span>3</span></div>
       <div><i class="fa-solid fa-maximize icon"></i><span>200 ft</span></div>
    </div>
    <div class="name">
        <div class="left">
            <div class="img-wrap">
                <img src="{{asset('image/person-1.webp')}}" alt="">

            </div>
            <h4>John Collins</h4>
        </div>

        <div class="link">
            <i class="fa-solid fa-share-nodes item"></i>
            <i class="fa-regular fa-heart item"></i>
            <i class="fa-solid fa-plus item"></i>
        </div>
    </div>
</div>

            </div>



            <div class="card rent all card-active">

                <div class="img-wrapper">
                    <div class="list" id="featured">Featured</div>
                    <div class="list" id="sales">Rentals</div>
                    <div class="list" id="offer">New Offer</div>
                    <img src="{{asset('image/card2.jpg')}}" alt="">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot locate"></i><span>Greenville, Jersey City</span>
                        </div>
                <div class="right">
                    <i class="fa-solid fa-video locate"></i>
                    <div> <i class="fa-solid fa-camera locate"></i><span>7</span></div>
                </div>
                    </div>
                </div>
                <div class="detail">
                    <h2>Luxury House in Greenville</h2>
                    <h3>from <span>Rs 86,000</span></h3>
                    <p>This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley...</p>
                    <div class="size">
                        <div><i class="fa-solid fa-bed icon"></i><span>2</span></div>
        <div><i class="fa-solid fa-bath icon"></i><span>3</span></div>
       <div><i class="fa-solid fa-maximize icon"></i><span>200 ft</span></div>
                    </div>
                    <div class="name">
                        <div class="left">
                            <div class="img-wrap">
                                <img src="{{asset('image/person-3.jpg')}}" alt="">

                            </div>
                            <h4>Lara Black</h4>
                        </div>

                        <div class="link">
                            <i class="fa-solid fa-share-nodes item"></i>
                            <i class="fa-regular fa-heart item"></i>
                            <i class="fa-solid fa-plus item"></i>
                        </div>
                    </div>
                </div>


            </div>




            <div class="card sale rent all card-active">
                <div class="img-wrapper">
                    <div class="list" id="featured">Featured</div>
                    <div class="list" id="sales">Sales</div>
                    <div class="list" id="offer">New Offer</div>
                    <img src="{{asset('image/card3.jpg')}}" alt="">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot locate"></i><span>Greenville, Jersey City</span>
                        </div>
                <div class="right">
                    <i class="fa-solid fa-video locate"></i>
                    <div> <i class="fa-solid fa-camera locate"></i><span>7</span></div>
                </div>
                    </div>
                </div>
                <div class="detail">
                    <h2>Modern Condo for Sale</h2>
                    <h3>from <span>Rs 86,000</span></h3>
                    <p>This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley...</p>
                    <div class="size">
                        <div><i class="fa-solid fa-bed icon"></i><span>2</span></div>
        <div><i class="fa-solid fa-bath icon"></i><span>3</span></div>
       <div><i class="fa-solid fa-maximize icon"></i><span>200 ft</span></div>
                    </div>
                    <div class="name">
                        <div class="left">
                            <div class="img-wrap">
                                <img src="{{asset('image/person-2.jpg')}}" alt="">

                            </div>
                            <h4>Lora Smith</h4>
                        </div>

                        <div class="link">
                            <i class="fa-solid fa-share-nodes item"></i>
                            <i class="fa-regular fa-heart item"></i>
                            <i class="fa-solid fa-plus item"></i>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card sale rent all card-active">
                <div class="img-wrapper">
                    <div class="list" id="featured">Featured</div>
                    <div class="list" id="sales">Sales</div>
                    <div class="list" id="offer">New Offer</div>
                    <img src="{{asset('image/card8.jpg')}}" alt="">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot locate"></i><span>Greenville, Jersey City</span>
                        </div>
                <div class="right">
                    <i class="fa-solid fa-video locate"></i>
                    <div> <i class="fa-solid fa-camera locate"></i><span>7</span></div>
                </div>
                    </div>
                </div>
                <div class="detail">
                    <h2>Modern Condo for Sale</h2>
                    <h3>from <span>Rs 58,000</span></h3>
                    <p>This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley...</p>
                    <div class="size">
                        <div><i class="fa-solid fa-bed icon"></i><span>2</span></div>
        <div><i class="fa-solid fa-bath icon"></i><span>3</span></div>
       <div><i class="fa-solid fa-maximize icon"></i><span>200 ft</span></div>
                    </div>
                    <div class="name">
                        <div class="left">
                            <div class="img-wrap">
                                <img src="{{asset('image/person-3.jpg')}}" alt="">

                            </div>
                            <h4>Lora Smith</h4>
                        </div>

                        <div class="link">
                            <i class="fa-solid fa-share-nodes item"></i>
                            <i class="fa-regular fa-heart item"></i>
                            <i class="fa-solid fa-plus item"></i>
                        </div>
                    </div>
                </div>


            </div>




            <div class="card sale invest all card-active">
                <div class="img-wrapper">
                    <div class="list" id="featured">Featured</div>
                    <div class="list" id="sales">Invest</div>
                    <div class="list" id="offer">New Offer</div>
                    <img src="{{asset('image/card5.jpg')}}" alt="">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot locate"></i><span>Greenville, Jersey City</span>
                        </div>
                <div class="right">
                    <i class="fa-solid fa-video locate"></i>
                    <div> <i class="fa-solid fa-camera locate"></i><span>7</span></div>
                </div>
                    </div>
                </div>
                <div class="detail">
                    <h2>Apartment with Subunits</h2>
                    <h3>from <span>Rs 35,000</span></h3>
                    <p>This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley...</p>
                    <div class="size">
                        <div><i class="fa-solid fa-bed icon"></i><span>2</span></div>
        <div><i class="fa-solid fa-bath icon"></i><span>3</span></div>
       <div><i class="fa-solid fa-maximize icon"></i><span>200 ft</span></div>
                    </div>
                    <div class="name">
                        <div class="left">
                            <div class="img-wrap">
                                <img src="{{asset('image/person-2.jpg')}}" alt="">

                            </div>
                            <h4>Lora Smith</h4>
                        </div>

                        <div class="link">
                            <i class="fa-solid fa-share-nodes item"></i>
                            <i class="fa-regular fa-heart item"></i>
                            <i class="fa-solid fa-plus item"></i>
                        </div>
                    </div>
                </div>
            </div>




            <div class="card invest all card-active">
                <div class="img-wrapper">
                    <div class="list" id="featured">Featured</div>
                    <div class="list" id="sales">Invest</div>
                    <div class="list" id="offer">New Offer</div>
                    <img src="{{asset('image/card6.jpg')}}" alt="">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot locate"></i><span>Greenville, Jersey City</span>
                        </div>
                <div class="right">
                    <i class="fa-solid fa-video locate"></i>
                    <div> <i class="fa-solid fa-camera locate"></i><span>7</span></div>
                </div>
                    </div>
                </div>
                <div class="detail">
                    <h2>Apartment with Subunits</h2>
                    <h3>from <span>Rs 70,000</span></h3>
                    <p>This property is mostly wooded and sits high on a hilltop overlooking the Mohawk River Valley...</p>
                    <div class="size">
                        <div><i class="fa-solid fa-bed icon"></i><span>2</span></div>
        <div><i class="fa-solid fa-bath icon"></i><span>3</span></div>
       <div><i class="fa-solid fa-maximize icon"></i><span>200 ft</span></div>
                    </div>
                    <div class="name">
                        <div class="left">
                            <div class="img-wrap">
                                <img src="{{asset('image/person-3.jpg')}}" alt="">

                            </div>
                            <h4>Lora Smith</h4>
                        </div>

                        <div class="link">
                            <i class="fa-solid fa-share-nodes item"></i>
                            <i class="fa-regular fa-heart item"></i>
                            <i class="fa-solid fa-plus item"></i>
                        </div>
                    </div>
                </div>
            </div> --}}
