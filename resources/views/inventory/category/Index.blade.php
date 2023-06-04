<x-app-layout>
<div class="card">
<div class="card-body">    
<a href="/inventory/category/add" class="btn btn-primary">
        Add Category
    </a>
    <hr/>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
            <th>
                    Id
                </th>

            <th>
                    Name
                </th>
                <th>
                    Code
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
         @foreach($categoryList as $category)
         <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->code }}</td>
          <td> <a href="/inventory/category/Edit?id={{$category->id}}" class="btn btn-primary">
        Edit me
    </a></td>
    <td> <a href="/inventory/category/Delete?id={{$category->id}}" class="btn btn-primary">
        Delete me
    </a></td>

         </tr>
         @endforeach   
        </tbody>
</table>
</div>
</x-app-layout>