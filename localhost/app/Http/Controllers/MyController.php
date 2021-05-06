<?php


namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Good;
use App\Models\Type;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function good($id)
    {
        return view('good', ['obj' => Good::all()->find($id)]);
    }

    public function category($type_id)
    {
        $types = Type::all()->find($type_id);
        $objs = $types->goods;
        return view('category', ['objs' => $objs ]);
    }


    public function post(Request $request)
    {
            $com = new Comment;
            $arr = explode('/' , url()->previous());
            $com->good_id = $arr[5];
            $com->name = $request->input('name');
            $com->email = $request->input('email');
            $com->text = $request->input('text');
            $com->save();

             return redirect()->back();
    }

    public function welcome(){

        return view('welcome', ['objs' => [Good::all()->find(1) , Good::all()->find(3) ,
            Good::all()->find(4) ]]  );
    }
}
