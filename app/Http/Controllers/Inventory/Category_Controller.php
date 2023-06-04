<?php
namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert as HelpersAlert;
use App\Http\Controllers\Controller;
use App\Modules\Inventory\Entity\Category;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\FormRequest;

class Category_Controller extends Controller 
{
    public function Index()
    {
        $data=Category::all();
        return view("inventory.category.Index",['categoryList'=>$data]);
    }

    public function Add()
    {
        return view("inventory.category.add");
        //add is file other are directory
        //resources/views/inventory/category/add.blade.php
    }
    public function Edit()
    {
        $id=request('id');
        $category=Category::find($id);
        return view("inventory.category.Edit",[
        'category'=>$category
        ]);
    }

    public function AddPost()//FormRequest $request
    {
        $name=request("name");
        $code=request("code");
    //echo"NAme: ".$name;
    //echo"<br>";
    //echo"Code: ".$code;
        $category= new Category();
        $category->name=$name;
        $category->code=$code;

        $category->save();//insert into database
        return redirect("/inventory/category/");   
    }
    public function EditPost()
    {
        $id=request('id');
        $name=request("name");
        $code=request("code");
    //echo"NAme: ".$name;
    //echo"<br>";
    //echo"Code: ".$code;
    $category=Category::find($id);
       // $category= new Category();
        $category->name=$name;
        $category->code=$code;

        $category->save();//insert into database
        return redirect("/inventory/category/");
    }
    public function Delete()
    {
        $id=request('id');
        $category=Category::find($id);
        return view("inventory.category.Delete",[
        'category'=>$category
        ]);
    }
    public function DeletePost() 
    {
        $id=request('id');
        $category=Category::find($id);
        $category->delete();//insert into database
        HelpersAlert::SetSuccessMessage("'Whoops' you've deleted category ");
        //       success("wHoops, You\'ve Deleted Data");

        return redirect("/inventory/category/");
    }
}