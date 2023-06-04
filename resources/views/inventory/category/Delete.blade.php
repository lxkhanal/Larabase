<x-app-layout>
    <div class ="card">
        <div class="card-body">
            <h1><center>Delete Data</center></h1>
        </div>
    </div>
    <form method="post" action="/inventory/category/delete-post">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}"> 
    <div class="form-group>
    <label for ="name" id="name" >Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}" readonly required>

    </div>
    <div class="form-group>
    <label for ="code">Code</label>
        <input type="text" name="code" id="name" class= "form-control" value="{{$category->code}}" readonly required>
    </div>
<div class="form-group">
<button
    class=" btn btn-success">
    Delete
</button>
</div>

</form>
</x-app-layout>