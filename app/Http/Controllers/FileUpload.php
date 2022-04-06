<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use DB; 
use App\Models\Rule;
use App\Models\Mlids;
use Session;
use Storage;
use Carbon\Carbon;
class FileUpload extends Controller

{
    public function __construct(){

        
        $files = DB::table('files')
                ->orderBy('fid', 'desc')
                ->get();
        $rules = DB::table('rules')->get();
        $mlids = DB::table('mlids')->get();
        view()->share([
          
          'files' => $files,
          'rules' => $rules,
          'mlids' => $mlids
        ]);
}
    public function createForm(){
    return view('frontend.file');
  }

  public function fileUpload(Request $req){
      $this->middleware('auth');
      // $data = Input::except('_token','submit','confirm_password');
           $this->validate($req, [
          'file' => 'required|mimes:pcap,pcapng|max:2048'
          ]);
  
          $fileModel = new File;
          if($req->file()) {
            // foreach($files as $fileModel){
            $t = time();
             $u_id= uniqid();

              $fileName = date("Y-m-d",$t).'_'.$req->file->getClientOriginalName();
              $filePath = $req->file('file')->storeAs('upload', $fileName, 'public');
  
              $fileModel->name = $u_id.'_'.date("Y-m-d",$t).'_'.$req->file->getClientOriginalName();
              $fileModel->file_path = '/storage/' . $filePath;
              $fileModel->u_id = $u_id;
              $fileModel->save();
              session()->now('message', 'Success! message.');
              session()->reflash();
              
              // echo "<div class='alert alert-success'>";
              // echo " <strong>'Please Wait!!'</strong> ";
              // echo " </div>";
              // echo "<script>";
              // echo "alert('Please wait');";
              // echo "</script>";
              sleep(4);

              $data = Rule::select('*')->where('u_id', '=',$u_id)->get(); 
              return view('frontend.statistics',['data' => $data, 'u_id' => $u_id]);
              // echo $data;
              return redirect()->back()
              ->with('success','File has been uploaded.');
          // }
     }
   }
     public function Fileview(){
      $data = DB::table('files')->paginate(50);
      $RuleData = Rule::select('*')->get();
      return view('frontend.Fileview', array('data' => $data, 'RuleData' => $RuleData));
    }
    public function statistics($u_id){
      
      $data = Rule::select('*')->where('u_id', '=',$u_id)->get();
      return view('frontend.statistics',['data' => $data, 'u_id' => $u_id]);
    }
    
    public function anomaly(){
      $mlids = Mlids::select('*')->get(); 
      return view('frontend.anomaly', array('mlids' => $mlids));
    }
      public function signature(){
      $mlids = Mlids::select('*')->get(); 
      return view('frontend.anomaly', array('mlids' => $mlids));
    }
}
