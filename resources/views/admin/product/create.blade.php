@extends('admin.body.adminmaster')

@section('admin')
    <div class="maincontainer">

        <div class="card col-md-6 mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Product</h6>
            </div>
            <div class="card-body">
                <form action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf

                    @isset($product)
                        @method('PUT')
                    @endisset

                    <div class="form-group">
                        <label for="product_name">product_name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name"
                            value="{{ isset($product) ? $product->product_name : old('product_name') }}">
                        @error('product_name')
                            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="about_id">About Title
                        </label>

                        <select name="about_id" id="category" class="form-select form-control" >
                            <option value="" selected="" disabled="">Select About title</option>
                            @foreach ($abouts as $about)
                                <option value="{{ $about->id }}" class="form-control">
                                    <span class="text-danger">{{ $about->title1 }} </span>
                                </option>
                            @endforeach
                        </select>
                        @error('about_id')
                            <small class="text-red-700">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="aboutFaq_id">AboutFaq Title
                        </label>

                        <select name="aboutFaq_id" class="form-select form-control" required>
                            <option value="" selected="" disabled="">Select AboutFaq title</option>


                        </select>
                        @error('aboutFaq_id')
                            <small class="text-red-700">{{ $message }}</small>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary btn-block" id="">Submit</button>
                </form>

            </div>
        </div>

    </div>

@endsection
