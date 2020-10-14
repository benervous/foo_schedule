<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect,Response;

class FullCalendarController extends Controller
{

    public function index()
    {
        if(request()->ajax())
        {

            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $data = Lesson::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
            return Response::json($data);
        }
        return view('fullcalendar');
    }


    public function create(Request $request)
    {
        $insertArr = [ 'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end
        ];
        $lesson = Lesson::insert($insertArr);
        return Response::json($lesson);
    }


    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $lesson  = Lesson::where($where)->update($updateArr);

        return Response::json($lesson);
    }


    public function destroy(Request $request)
    {
        $lesson = Lesson::where('id',$request->id)->delete();

        return Response::json($lesson);
    }


}
