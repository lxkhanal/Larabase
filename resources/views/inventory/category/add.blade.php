
<x-app-layout>
    <div class ="card">
        <div class="card-body">
            <h1><center>Add Product</center></h1>
        </div>
    </div>
    <form method="post" action="/inventory/category/add-post">
        @csrf
    <div class="form-group>
    <label for ="name" id="name" >Name</label>
        <input type="text" name="name" id="name" class="form-control" required>

    </div>
    <div class="form-group>
    <label for ="code">Code</label>
        <input type="text" name="code" id="name" class= "form-control" required>
    </div>
<div class="form-group">
<button
    class=" btn btn-success">
    Save
</button>
</div>

</form>
</x-app-layout>