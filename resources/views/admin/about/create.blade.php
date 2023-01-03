@extends('admin.body.adminmaster')

@section('admin')

<div class="maincontainer">

    <div class="card col-md-6 mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">About</h6>
        </div>
        <div class="card-body">
        <form action="{{isset($about)?route('about.update',$about->id):route('about.store')}}" method="POST" enctype="multipart/form-data">
           @csrf

@isset($about)
@method('PUT')
@endisset

<div class="form-group">
    <label for="title1">Title1</label>
    <input type="text" class="form-control" name="title1" id="title1" value="{{isset($about)?$about->title1:old('title1')}}">
    @error('title1')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="para1">Paragraph1</label>

    <textarea name="para1" id="para1" class="form-control ckeditor" cols="30" rows="10">{{isset($about)?$about->para1:old('para1')}}</textarea>

    @error('para1')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="title2">Title2</label>
    <input type="text" class="form-control" name="title2" id="title2" value="{{isset($about)?$about->title2:old('title2')}}">
    @error('title2')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="para2">Paragraph2</label>

    <textarea name="para2" id="para2" class="form-control ckeditor" cols="30" rows="10">{{isset($about)?$about->para2:old('para2')}}</textarea>

    @error('para2')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="para3">Paragraph3</label>

    <textarea name="para3" id="para3" class="form-control ckeditor" cols="30" rows="10">{{isset($about)?$about->para3:old('para3')}}</textarea>

    @error('para3')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    <label for="image1">Image1</label>
    <input type="file" class="form-control" name="image1">
    @error('image1')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

@isset($about)
@if($about->image1 !=null)
<div class="form-group">
    <label for="" class="d-block">Current about</label>
    <image src="{{asset($about->image1)}}" style="height: 3rem; object-fit:contain" alt="">
</div>
@endif
@endisset

<div class="form-group">
    <label for="image2">Image2</label>
    <input type="file" class="form-control" name="image2">
    @error('image2')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

@isset($about)
@if($about->image2 !=null)
<div class="form-group">
    <label for="" class="d-block">Current about</label>
    <image src="{{asset($about->image2)}}" style="height: 3rem; object-fit:contain" alt="">
</div>
@endif
@endisset

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

