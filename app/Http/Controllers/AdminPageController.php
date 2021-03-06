<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Employers;
use App\Models\User;
use App\Models\Works;
use Illuminate\Http\Request;
use App\Http\Requests\AdminPageRequest;
use App\Http\Requests\AdminPageEmployersRequest;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;
use function mysql_xdevapi\getSession;

class AdminPageController extends Controller
{
    public function submit(AdminPageRequest $req)
    {
        $student = new Students();
        $student->name = $req->input('name');
        $student->surname = $req->input('surname');
        $student->specialty = $req->input('specialty');
        $student->iin = $req->input('iin');
        $student->gpa = $req->input('gpa');
        $student->year_from = $req->input('year_from');
        $student->year_to = $req->input('year_to');
        $student->email = $req->input('email');
        $student->password = $req->input('password');
        $student->telNumber = $req->input('telNumber');
        $student->experience = $req->input('experience');

        $student->save();

        return redirect()->route('admin-students')->with('success', 'Student was added successfully!!!');
    }


    public function main(Request $request)
    {
//        if ($request->session()->has('myUser')) {
//            //$student=Students::all();
//            //$student=new Students();
//            return view("adminStudents", ['data' => Students::all()]);
//            //return view("adminStudents",['data'=> $student->inRandomOrder()->get()]);
//            //return view("adminStudents",['data'=> $student->orderBy('id','asc')->get()]);
//            //return view("adminStudents",['data'=> $student->orderBy('id','asc')->skip(1)->take(2)->get()]);
//            //return view("adminStudents",['data'=> $student->where('name','=','Almat')->get()]);
//        }else{
//            return redirect()->route('login');
//        }
        return view("index");

    }

    public function detailStudent($id,Request $request)
    {
        if ($request->session()->has('myUser')) {
            $student = new Students;
            return view('detailsStudent', ['data' => $student->find($id)]);
        }else{
            return redirect()->route('login');
        }
    }

    public function editStudent($id,Request $request)
    {
        if ($request->session()->has('myUser')) {
            $student = new Students();
            return view('editStudent', ['data' => $student->find($id)]);
        }else{
            return redirect()->route('login');
        }
    }

    public function saveStudent($id, AdminPageRequest $req)
    {
        $student = Students::find($id);
        $student->name = $req->input('name');
        $student->surname = $req->input('surname');
        $student->specialty = $req->input('specialty');
        $student->iin = $req->input('iin');
        $student->gpa = $req->input('gpa');
        $student->year_from = $req->input('year_from');
        $student->year_to = $req->input('year_to');
        $student->email = $req->input('email');
        $student->password = $req->input('password');
        $student->telNumber = $req->input('telNumber');
        $student->experience = $req->input('experience');

        $student->save();

        return redirect()->route('admin-students')->with('success', 'Student was changed successfully!!!');
    }

    public function deleteStudent($id)
    {
        Students::find($id)->delete();
        return redirect()->route('admin-students')->with('success', 'Student was deleted successfully!!!');

    }

    public function mainEmployer(Request $request)
    {
        if ($request->session()->has('myUser')) {
            //$student=Students::all();
            //$student=new Students();
            return view("adminEmployers", ['data' => Employers::all()]);
            //return view("adminStudents",['data'=> $student->inRandomOrder()->get()]);
            //return view("adminStudents",['data'=> $student->orderBy('id','asc')->get()]);
            //return view("adminStudents",['data'=> $student->orderBy('id','asc')->skip(1)->take(2)->get()]);
            //return view("adminStudents",['data'=> $student->where('name','=','Almat')->get()]);
        }else{
            return redirect()->route('login');
        }
    }

    public function addEmployer(AdminPageEmployersRequest $req)
    {
        $employer = new Employers();
        $employer->email = $req->input('email');
        $employer->password = $req->input('password');
        $employer->full_name = $req->input('full_name');
        $employer->llp = $req->input('llp');
        $employer->picture_llp = $req->input('url');

        $employer->save();

        return redirect()->route('admin-employers')->with('success', 'Employer was added successfully!!!');
    }

    public function editEmployer($id,Request $request   )
    {
        if ($request->session()->has('myUser')) {
            $employer = new Employers();
            return view('editEmployer', ['data' => $employer->find($id)]);
        }else{
            return redirect()->route('login');
        }
    }


    public function saveEmployer($id, AdminPageEmployersRequest $req)
    {
        $employer = Employers::find($id);
        $employer->email = $req->input('email');
        $employer->password = $req->input('password');
        $employer->full_name = $req->input('full_name');
        $employer->llp = $req->input('llp');
        $employer->picture_llp = $req->input('url');

        $employer->save();

        return redirect()->route('admin-employers')->with('success', 'Employer was added successfully!!!');
    }

    public function deleteEmployer($id)
    {
        $emp=new Employers();
        $emp->find($id)->delete();
        return redirect()->route('admin-employers')->with('success', 'Employer was deleted successfully!!!');

    }

    public function adminStudents(Request $request){
        if ($request->session()->has('myUser')) {
            $data=Students::all();
            //$student=new Students();
            $stud=null;
            return view("adminStudents", compact('data','stud'));
            //return view("adminStudents",['data'=> $student->inRandomOrder()->get()]);
            //return view("adminStudents",['data'=> $student->orderBy('id','asc')->get()]);
            //return view("adminStudents",['data'=> $student->orderBy('id','asc')->skip(1)->take(2)->get()]);
            //return view("adminStudents",['data'=> $student->where('name','=','Almat')->get()]);
        }else{
            return redirect()->route('login');
        }
    }

    public function searchStudent(Request $request)
    {
        $stud = new Students();
        $iin=$request->input('iin');
        $stud=DB::table('students')->where('iin','=',$iin)->first();
        return view('adminStudents',compact('stud'));
    }

//    public function employer($id){
//        return view('employerWorks',['works'=>]);
//    }

    public function employerPostJob(Request $request)
    {
        if ($request->session()->has('myUser')) {
            $cities = Cities::all();
            $user=$request->session()->get('myUser');
            return view('postJob', compact('cities','user'));
        }else{
            return redirect()->route('login');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $employer = DB::table('employers')->where('email', '=', $email)->where('password', '=', $password)->first();
        $student = DB::table('students')->where('email', '=', $email)->where('password', '=', $password)->first();
        if ($email == 'admin@gmail.com' && $req->input('password') == 'admin') {
            $us=new User();
            $req->session()->put('myUser', $us);
            return view("adminStudents", ['data' => Students::all()]);
        } else if ($employer != null) {
            $req->session()->put('myUser', $employer);
            return redirect()->route('employer-home');
        }else if($student!=null){
            $req->session()->put('myUser', $student);
            return redirect()->route('students');
//            $data=Works::all();
//            $employers=Employers::all();
//            $stud = $req->session()->get('myUser');
//             return view("studentMain",compact('data','employers','stud'));
        }else {
            return redirect()->route('main');
        }
    }

    public function empHome(Request $request)
    {
        $work = new Works();
        if ($request->session()->has('myUser')) {
            $emp = $request->session()->get('myUser');

            $data = DB::table('works')->where('employer_id', '=', $emp->id)->get();
            $cities=Cities::all();
            return view('employerMain', compact('data','cities'));
        }else{
            return redirect()->route('login');
        }
    }

    public function addJob(Request $req)
    {
        $work=new Works();
        $work->job_title=$req->input('job_title');
        $work->skills=$req->input('skills');
        $work->description=$req->input('description');
        $work->city_id=$req->input('city_id');
        $work->employer_id=$req->input('emp_id');
        $work->salary=$req->input('salary');
        $work->save();

        return redirect()->route('employer-home');
    }

    public function detailJob(Request $request,$id)
    {if ($request->session()->has('myUser')) {
        $work = Works::find($id);
        $cities = Cities::all();
        return view('editJob', compact('work', 'cities'));
    }else{
        return redirect()->route('login');
    }
    }

    public function editJob($id, Request $req){
        $work = Works::find($id);
        $work->job_title=$req->input('job_title');
        $work->skills=$req->input('skills');
        $work->description=$req->input('description');
        $work->city_id=$req->input('city_id');
        $work->employer_id=$req->input('emp_id');
        $work->salary=$req->input('salary');

        $work->save();

        return redirect()->route('employer-home')->with('success', 'Work was edited successfully!!!');
    }

    public function deleteWork($id,Request $request){
        $work = Works::find($id)->delete();
        return redirect()->route('employer-home')->with('success', 'Work was deleted successfully!!!');

    }

    public function studHome(Request $request){
        if ($request->session()->has('myUser')) {

            $data=Works::all();
            $employers=Employers::all();
            $stud = $request->session()->get('myUser');
            return view("studentMain",compact('data','employers','stud'));
        }else{
            return redirect()->route('login');
        }
    }

    public function newRequest(Request $request){
//        $r=new Request();
//        $r->student_id=$request->input('student_id');
//        $r->work_id=$request->input('work_id');
        DB::insert('insert into request (student_id,work_id) values (?,?)',[$request->input('student_id'),$request->input('work_id')]);
        return redirect()->route('students')->with('success', 'Request was sended successfully!!!');

    }

    public function studRequests(Request $request){
        if ($request->session()->has('myUser')) {
            $stud = $request->session()->get('myUser');
            //$applies = DB::table('request')->where('student_id', '=', $stud->id)->get();
            $employers=Employers::all();
            $w=DB::table('works')
                ->join('request','works.id','=','request.work_id')
                ->where('request.student_id','=',$stud->id)
                ->select('works.*')
                ->get();
            return view("studentRequests",compact('w','employers','stud'));
        }else{
            return redirect()->route('login');
        }
    }

    public function removeRequest(Request $request){
        DB::table('request')->where('student_id', '=', $request->input('student_id'))->where('work_id','=',$request->input('work_id'))->delete();
        return redirect()->route('students')->with('success', 'Request was deleted successfully!!!');

    }

    public function employerApplications(Request $request){
        if ($request->session()->has('myUser')) {
            $employer = $request->session()->get('myUser');
            //$applies = DB::table('request')->where('student_id', '=', $stud->id)->get();
            $students=Students::all();
            $w=DB::table('works')
                ->where('works.employer_id','=',$employer->id)
                ->join('request','works.id','=','request.work_id')
                ->join('students','students.id','=','request.student_id')
                ->select('students.*','works.*','students.id as sts')
                ->get();
            return view("employerApplications",compact('w','students','employer'));
        }else{
            return redirect()->route('login');
        }
    }

    public function employerApplicationDetails(Request  $request){
        if ($request->session()->has('myUser')) {
            $w = Works::find($request->input('work_id'));
            $s = Students::find($request->input('student_id'));
            return view("employerApplicationDetails", compact('w', 's'));
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('myUser');
        return redirect()->route('main');
    }
}

