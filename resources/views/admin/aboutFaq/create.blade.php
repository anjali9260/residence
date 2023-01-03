@extends('admin.body.adminmaster')

@section('admin')

<div class="maincontainer">

    <div class="card col-md-6 mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">AboutFaq</h6>
        </div>
        <div class="card-body">
        <form action="{{isset($aboutFaq)?route('aboutFaq.update',$aboutFaq->id):route('aboutFaq.store')}}" method="POST" enctype="multipart/form-data">
           @csrf

@isset($aboutFaq)
@method('PUT')
@endisset


<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{isset($aboutFaq)?$aboutFaq->title:old('title')}}">
    @error('title')
    <small style="color: rgba(255, 0, 0, 0.626)">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="about_id">About Title
        </label>

        <select name="about_id" class="form-select form-control"  required>
            @foreach ($abouts as $about)
            <option value="{{ $about->id }}" class="form-control"
              @if(isset($aboutFaq)) @if ($about->id == $aboutFaq->about_id)  selected {{ $about->title1 }} @endif @endif >
              <span class="text-danger">{{ $about->title1 }} </span>  </option>
            @endforeach
        </select>
    @error('about_id')
        <small class="text-red-700">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="para">Paragraph</label>

    <textarea name="para" id="para" class="form-control ckeditor" cols="30" rows="0">{{isset($aboutFaq)?$aboutFaq->para:old('para')}}</textarea>

    @error('para')
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
