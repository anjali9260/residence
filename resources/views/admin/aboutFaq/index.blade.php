
@extends('admin.body.adminmaster')

@section('admin')

<div class="maincontainer">

    <div class="row">

        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3">
             <div class="d-flex justify-content-between align-items-center" >
                <h5 class="text-primary">AboutFaq</h5>
               <a href="{{route('aboutFaq.create')}}" class="btn btn-primary"><i class="fas fa-pen"></i>Add</a>
             </div>
            </div>
            <div class="table-responsive p-3">
              <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover" >
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No.</th>
                    <th>Title</th>
                    <th>Paragraph</th>


                    <th>Action</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($aboutFaqs as $key=>$item)
                        <tr>
                           <td>{{ $key+1 }}</td>


                           <td>
                            {{ $item->title}}
                           </td>
                           <td>
                            {!! Str::words($item->para,10,) !!}
                           </td>






                           <td>
                             <a href="{{route('aboutFaq.edit',$item->id)}}" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                   <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Edit</span>
                              </a>
                           </td>


                           <td>
                                <form action="{{route('aboutFaq.destroy',$item->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50">
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
</div>
@endsection
