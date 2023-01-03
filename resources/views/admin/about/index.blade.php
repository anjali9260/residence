
@extends('admin.body.adminmaster')

@section('admin')
@if ($abouts->count() > 0)


<div class="maincontainer">

    <div class="row">

        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3">
             <div class="d-flex justify-content-between align-items-center" >
                <h5 class="text-primary">About</h5>
               <a href="{{route('about.create')}}" class="btn btn-primary"><i class="fas fa-pen"></i>Add</a>
             </div>
            </div>
            <div class="table-responsive p-3">
              <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover" >
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No.</th>
                    <th>Title1</th>
                    <th>Para1</th>
                    <th>Title2</th>
                    <th>Para2</th>
                    <th>Para3</th>
                    <th>Image1</th>
                    <th>Image2</th>

                    <th>Action</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $key=>$item)
                        <tr>
                           <td>{{ $key+1 }}</td>
                           <td>
                            {{ $item->title1}}
                           </td>
                           <td>
                            {!! Str::words($item->para1,10,) !!}
                           </td>

                           <td>
                            {{ $item->title2}}
                           </td>

                           <td>
                            {!! Str::words($item->para2,10,) !!}
                           </td>

                           <td>
                            {!! Str::words($item->para3,10,) !!}
                           </td>
                           <td>
                            <img src="{{asset($item->image1)}}" style="object-fit: contain;height:3rem" alt="">
                           </td>
                           <td>
                            <img src="{{asset($item->image2)}}" style="object-fit: contain;height:3rem" alt="">
                           </td>
                           <td>
                             <a href="{{route('about.edit',$item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                   <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Edit</span>
                              </a>
                           </td>
                           <td>
                            <button type="button" class="btn btn-danger btn-icon-split btn-sm" data-toggle="modal" data-target="#delted-modal-{{$key+1}}">
                              <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                              </span>
                              <span class="text">Delete</span>
                        </button>
                        <div class="modal fade" id="delted-modal-{{$key+1}}" tabindex="-1" role="dialog" aria-labelledby="delted-modal-{{$key+1}}-Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="delted-modal-{{$key+1}}-Label">Are You Sure</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  Are you Sure Want to Delete This item Guide  <br>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"><span class="icon text-white-50">
                                  <i class="fas fa-times-circle"></i>
                                </span>
                                <span class="text">Close</span></button>
                                <form action="{{route('about.destroy',$item->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50">
                                     <i class="fas fa-trash"></i>
                                   </span>
                                   <span class="text">Delete</span></button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                           </td>

                           
                           {{-- <td>
                                <form action="{{route('about.destroy',$item->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50">
                                     <i class="fas fa-trash"></i>
                                   </span>
                                   <span class="text">Delete</span></button>
                                </form>

                           </td> --}}
                        </tr>
                        @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
</div>
@else
<div>No Content Found</div>
@endif
@endsection
