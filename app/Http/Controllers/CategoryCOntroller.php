<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Dotenv\Validator;
use Illuminate\Http\Request;

class CategoryCOntroller extends Controller
{
    public function index()
    {

        return view('admin.category.index');

//        $this->categories = Category::orderby('created_at', 'desc')->get();
//        return view('admin.category.index', ['categories' => $this->categories]);
    }

    public  function fetchCategory()
    {
        $categories = Category::all();
        return response()->json([
            'categories' => $categories
        ]);
    }

    public function createCategory( Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:100',
                'description' => 'required|max:500|min:11',
                'image' => 'required|image'
            ]
        );

        if ($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors' => $validator->messages()
            ]);
        }
        else{
            $category = new Category();
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            if ($request->hasFile('image'))
            {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time().'.'.$ext;
                $file->move('uploads/categories/',$fileName);
                $category->image = $fileName;
            }
            $category->save();
            return Response()->json([
                'status'=>200,
                'cat_data' => json_encode($category),
                'message' => 'Category Data Added Successfully'
            ]);
        }
    }


    public function editCategory($id)
    {
        $cat_id = $_GET['id'];
        $category = Category::find($cat_id);
        return response()->json([
            'status' => 200,
            'message' => 'Category Image Data updated Successfully',
            'data' =>$category,
        ]);
    }

    public function updateCategory(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:100',
                'description' => 'required|max:500|min:11',
                'image' => 'required|image'
            ]
        );
        if ($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors' => $validator->messages()
            ]);
        }
        else{
            $category = Category::find($id);
            if ($category)
            {
                $category->name = $request->input('up_name');
                $category->description = $request->input('up_phone');
                if ($request->hasFile('image'))
                {
                    if (file_exists('uploads/employee/'.$category->image))
                    {
                        File::delete('uploads/employee/'.$category->image);
                    }
                    $file = $request->file('image');
                    $ext = $file->getClientOriginalExtension();
                    $fileName = time().'.'.$ext;
                    $file->move('uploads/employee/',$fileName);
                    $category->image = $fileName;
                }
                $category->save();
                return Response()->json([
                    'status'=>200,
                    'message' => 'Category Image Data Added Successfully'
                ]);
            }
            else{
                return Response()->json([
                    'status'=>400,
                    'message' => 'Employee Not Found'
                ]);
            }
        }
    }

//    public function delete($id)
//    {
//        Category::deleteCategory($id);
//        return redirect('/category/manage')->with('message','Category Deleted Successfully');
//    }
}
