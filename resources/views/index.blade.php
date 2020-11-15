<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="container">
    <div class="row">
    
    <div class="col-md-8">
  
    <div class="card">
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
    <div class="card-header"> All Catagory</div>
   
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">created at</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <!-- @php ($i=1) -->
  @foreach($catagories as $catagory)
    <tr>
      <th scope="row">{{$catagories->firstItem()+$loop->index}}</th>
      <td>{{($catagory->id)}}</td>
      <td>{{($catagory->user_id)}}</td>
      <td>{{($catagory->Catagory_name)}}</td>
      <td>
      <a href="{{url('catagory/edit/' .$catagory->id)}}" class="btn btn-info">Edit</a>
      <a href=""class="btn btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
    
  </tbody>
</table>
{{$catagories->links()}}

    </div>
    </div>
    <div class="col-md-4">
    <div class="card">
    <div class="card-header">Add catagory</div>
    <div class="card-body">
    <form action="{{ route('store.catagory')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">catagory name</label>
    <input type="text" name="catagory_name" class="form-control" id="exampleInputEmail1" >
    @error('catagory_name')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">add catagory </button>
</form>
    </div>
    
   
    </div>
    </div>
    </div>
    </div>

    
</x-app-layout>
