@extends('admin.body.adminmaster')

@section('admin')
    <div class="maincontainer">

        <div class="row">
            <div class="col-lg-12">
                <form action="/search" method="GET">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="Search" class="form-control mb-3">
                        <spam class="form-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </spam>

                    </div>


                </form>
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-primary">Portfolio</h5>
                            <a href="{{ route('portfolio.create') }}" class="btn btn-primary"><i
                                    class="fas fa-pen"></i>Add</a>
                        </div>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Image</th>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Feature Status</th>
                                    <th>Feature Action</th>
                                    <th>Offer Status</th>
                                    <th>Offer Action</th>
                                    {{-- <th>Address</th> --}}
                                    {{-- <th>Rate</th>
                    <th>Paragraph</th>
                    <th>Bedroom</th>
                    <th>Bathroom</th>
                    <th>Area</th> --}}
                                    <th>Action</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $key => $portfolio)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <img src="{{ asset($portfolio->image) }}"
                                                style="object-fit: contain;height:3rem" alt="">
                                        </td>
                                        <td>
                                            {{ $portfolio->type }}

                                        </td>
                                        <td>
                                            {{ $portfolio->title }}

                                        </td>
                                        <td>
                                            {{ $portfolio->slug }}

                                        </td>
                                        <td>
                                            @if ($portfolio->featured)
                                                <button class="btn btn-success btn-sm">Featured </button>
                                            @else
                                                <a href="javscript:void(0)" class="btn btn-warning btn-icon-split btn-sm">
                                                    <span class="text">Not Featured</span> </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($portfolio->featured)
                                                <a href="{{ route('portfolio.removefeatured', $portfolio->id) }}"
                                                    class="btn btn-danger btn-icon-split btn-sm">
                                                    <span class="text">Remove Featured</span> </a>
                                            @else
                                                <a href="{{ route('portfolio.setfeatured', $portfolio->id) }}"
                                                    class="btn btn-success btn-icon-split btn-sm">

                                                    <span class="text">Set Featured</span> </a>
                                            @endif
                                        </td>




                                        <td>
                                            @if ($portfolio->offer)
                                                <button class="btn btn-success btn-sm">offer</button>
                                            @else
                                                <a href="javscript:void(0)" class="btn btn-warning btn-icon-split btn-sm">
                                                    <span class="text">Not offer</span> </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($portfolio->offer)
                                                <a href="{{ route('portfolio.removeoffer', $portfolio->id) }}"
                                                    class="btn btn-danger btn-icon-split btn-sm">
                                                    <span class="text">Remove offer</span> </a>
                                            @else
                                                <a href="{{ route('portfolio.setoffer', $portfolio->id) }}"
                                                    class="btn btn-success btn-icon-split btn-sm">

                                                    <span class="text">Set offer</span> </a>
                                            @endif
                                        </td>




                                        <td>
                                            <a href="{{ route('portfolio.edit', $portfolio->id) }}"
                                                class="btn btn-primary btn-icon-split btn-sm">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-pen"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                        </td>



                                        <td>
                                            <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-split btn-sm"><span
                                                        class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Delete</span></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>

                    </div>

                </div>
            </div>
        </div>
        {{ $portfolios->links() }}
    </div>
@endsection
