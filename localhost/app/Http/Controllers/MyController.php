<?php


namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Good;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function good($id)
    {
        $obj = new Good($id);
        return view('good', ['obj' => $obj]);
    }

    public function catalog($id)
    {
        $obj1 = new Good($id);
        $obj2 = new Good($id + 20);
        $obj3 = new Good($id + 40);
        return view('catalog', ['objs' => ['obj1' => $obj1, 'obj2' => $obj2, 'obj3' => $obj3]]);
    }


    public function post(Request $request)
    {

        if ($request->has('name') && $request->has('text')) {
            $com = new Comment($request->input('text'), $request->input('name'));
            echo 'Your name : ' . $com->getName() . '<br/>';
            echo 'Your text : ' . $com->getText() . '<br/>';
            echo 'Your Time : ' . $com->getDate();
        }

    }
}
