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
    <div class="card-header">Add Todo</div>
    <div class="card-body">

    <form action="{{url('todo/update/'.$todos->id)}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Todo Description</label>
    <input type="text" name="todo_desc" class="form-control" id="exampleInputEmail1" value="{{ $todos->todo_desc }}" >
    @error('todo_desc')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Update todo </button>
</form>
    </div>
    
   
    </div>
    </div>
    </div>
    </div>

    
</x-app-layout>
