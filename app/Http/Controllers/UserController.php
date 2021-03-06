<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;
    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','ASC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
     //   echo "<pre>";print_r($request->all());exit;
//        $this->validate($request, [
//          //  'name' => 'required',
//            'email' => 'required|email|unique:users,email',
//            //'password' => 'required|same:confirm-password',
//            'roles' => 'required'
//        ]);
    
        $input = $request->all();
  //      echo "<pre>";print_r($input);exit;
//        if(isset($input['user_profile'])){
//            $design = $input['user_profile'];
//            $filename = $design->getClientOriginalName();
//            $destination= "user-profile/";
//            $design->move($destination,$filename);
//            $input['user_profile'] = $filename;
//        }
        $input['password'] = Hash::make($input['password']);
       // echo "<pre>";print_r($input);exit;
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect('/')->with('success','User created successfully');
    }
    
    
    public function store(Request $request)
    {
     //   echo "<pre>";print_r($request->all());exit;
        $this->validate($request, [
          //  'name' => 'required',
            'email' => 'required|email|unique:users,email',
            //'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
//        echo "<pre>";print_r($input);exit;
//        if(isset($input['user_profile'])){
//            $design = $input['user_profile'];
//            $filename = $design->getClientOriginalName();
//            $destination= "user-profile/";
//            $design->move($destination,$filename);
//            $input['user_profile'] = $filename;
//        }
        $input['password'] = Hash::make($input['password']);
       // echo "<pre>";print_r($input);exit;
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          //  'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
          //  'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
      
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = array_except($input,array('password'));    
        }

        $user = User::find($id);
        $oldFileName = $user->user_profile;
        if(empty($input['user_profile'])) {
            $input['user_profile'] = $oldFileName;
        }else{
            $design = $input['user_profile'];
            $filename = $design->getClientOriginalName();
            $destination = "user-profile/";
            if($oldFileName != ""){
                unlink($destination.'/'.$oldFileName);
            }
            $design->move($destination,$filename);
            $requestData['user_profile'] = $filename;
        }

        
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
    
    public function editProfile(){
        $user_id = Auth::user()->id;
        $user = User::where(['id'=>$user_id])->first();
        return view('edit_profile',['user'=>$user]);
    }
    
    
    public function updateProfile(Request $request){
        $requestData = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required|same:cnfpassword',
        ]);
        $requestData['password'] = Hash::make($requestData['password']);
        $user = User::findorfail($requestData['id']);
        $user->update($requestData);
        return redirect('editprofile');
       // echo "<pre>";print_r($requestData);exit;
    }
    
}