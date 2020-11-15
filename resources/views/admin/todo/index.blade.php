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
    <div class="card-header"> All Todos</div>
   
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Todo Descrition</th>
      <th scope="col">created at</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <!-- @php ($i=1) -->
  @foreach($todos as $todo)
    <tr>
      <th scope="row">{{$todos->firstItem()+$loop->index}}</th>
     
      <td>{{($todo->todo_desc)}}</td>
      <td>{{($todo->created_at)}}</td>
      <td>
      <a href="{{url('todo/edit/' .$todo->id)}}" class="btn btn-info">Edit</a>
      <a href="{{url('todo/delete/' .$todo->id)}}" class="btn btn-danger">Delete</a>
      <!-- <a onclick="event.preventdefault(); document.getElementById( 'form-delete-{{$todo->id}}').submit();" href="{{url('todo/delete/' .$todo->id)}}"class="btn btn-danger">Delete</a>
      <form style="display:none" action="{{url('todo/delete/' .$todo->id)}}" id="{{ 'form-delete-'.$todo->id}}" method="post"> -->
      <!-- @csrf 
      @method('delete') -->
      <!-- </form> -->
      </td>
    </tr>
@endforeach
    
  </tbody>
</table>
{{$todos->links()}}

    </div>
    </div>
    <div class="col-md-4">
    <div class="card">
    <div class="card-header">Add todo</div>
    <div class="card-body">
    <form action="{{ route('store.todo')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">todo name</label>
    <input type="text" name="todo_desc" class="form-control" id="exampleInputEmail1" >
    @error('todo_desc')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">add todo </button>
</form>
    </div>
    
   
    </div>
    </div>
    </div>
    </div>

    
</x-app-layout>
