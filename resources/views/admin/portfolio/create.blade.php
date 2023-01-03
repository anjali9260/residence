@extends('admin.body.adminmaster')

@section('admin')

<div class="maincontainer">

    <div class="card col-md-6 mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Portfolio</h6>
        </div>
        <div class="card-body">
        <form action="{{isset($portfolio)?route('portfolio.update',$portfolio->id):route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
           @csrf

@isset($portfolio)
@method('PUT')
@endisset




<div class="form-group">


    <select class="form-select" aria-label="Default select example" name="type" id="type">
        <option selected>Select Type</option>
        <option value="sale">sale</option>
        <option value="rent">rent</option>
        <option value="invest">invest</option>
      </select>

      @error('type')
      <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
      @enderror
</div>



<div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image">
    @error('image')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

@isset($portfolio)
@if($portfolio->image !=null)
<div class="form-group">
    <label for="" class="d-block">Current Portfolio</label>
    <image src="{{asset($portfolio->image)}}" style="height: 3rem; object-fit:contain" alt="">
</div>
@endif
@endisset

 <div class="form-group">
    <label for="address">address</label>
    <input type="text" class="form-control" name="address" id="address" value="{{isset($portfolio)?$portfolio->address:old('address')}}">
    @error('address')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

           <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{isset($portfolio)?$portfolio->title:old('title')}}">
            @error('title')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>



        <div class="form-group">
            <label for="rate">rate</label>
            <input type="text" class="form-control" name="rate" id="rate" value="{{isset($portfolio)?$portfolio->rate:old('rate')}}">
            @error('rate')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>



        <div class="form-group">
            <label for="paragraph">Paragraph</label>
            <textarea name="paragraph" id="paragraph" class="form-control ckeditor" cols="30" rows="10">{{isset($portfolio)?$portfolio->paragraph:old('paragraph')}}</textarea>
            {{-- <input type="text" class="form-control" name="para" value="{{isset($portfolio)?$portfolio->para:old('para')}}"> --}}
            @error('paragraph')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>



        <div class="form-group">
            <label for="bedroom">bedroom</label>
            <input type="text" class="form-control" name="bedroom" id="bedroom" value="{{isset($portfolio)?$portfolio->bedroom:old('bedroom')}}">
            @error('bedroom')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="bathroom">bathroom</label>
            <input type="text" class="form-control" name="bathroom" id="bathroom" value="{{isset($portfolio)?$portfolio->bathroom:old('bathroom')}}">
            @error('bathroom')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="area">area</label>
            <input type="text" class="form-control" name="area" id="area" value="{{isset($portfolio)?$portfolio->area:old('area')}}">
            @error('area')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>




        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" value="{{isset($portfolio)?$portfolio->slug:old('slug')}}">
            @error('slug')
            <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block" id="">Submit</button>

        </form>

        </div>
     </div>

</div>


@endsection
@section('custom_JS')




<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>


   const ckboxes = document.querySelectorAll('.ckeditor');

   ckboxes.forEach(box => {

        let id = box.getAttribute('id');

        CKEDITOR.replace( id , {

             height: 200,

       })


   });

   </script>

@endsection



