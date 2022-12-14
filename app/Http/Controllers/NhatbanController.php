<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Nhatban;
use App\Models\Area;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use Illuminate\Http\Response;
class nhatbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhatbans = Area::where('countryid',2)->get();
        $choosenArea= DB::table('nhatbans')
                        ->where('userid', Auth::user()->id)
                        ->get();
 
        return view('nhatban.nhatban',[
            'nhatbans'=>$nhatbans,
            'choosenArea'=> $choosenArea
        ]);
    }
    public function aodai(){
        return view('nhatban.ao',[
        ]);
    }
    
    public function ngayle(){
        return view('nhatban.lehoi',[
        ]);
    }
    
    public function tongiao(){
        return view('nhatban.tongiao',[
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = DB::table('nhatbans')
                    ->where('userid', Auth::user()->id)
                    ->where('areaid', $request->id)
                    ->first();
        if ($user === null) {
            // user doesn't exist
         DB::table('nhatbans')->insert([
            'userid' => Auth::user()->id,
            'areaid' => $request->id
        ]);
    }
        $choosenArea = DB::table('nhatbans')
                    ->select('areaid')
                    ->where('userid', Auth::user()->id)
                     ->get();
        return json_encode($choosenArea);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $deletedid = DB::table('nhatbans')->where('userid', Auth::user()->id)->where('areaid', $id)->get();;
        DB::table('nhatbans')->where('userid', Auth::user()->id)->where('areaid', $id)->delete();
        $choosenArea = DB::table('nhatbans')
                    ->select('areaid')
                    ->where('userid', Auth::user()->id)
                     ->get();
        return json_encode([
            'deletedid' => $deletedid,
            'choosenArea' => $choosenArea,
        ]);
        
    }
    function action(Request $request)
    {   
        $nhatbans= DB::table('areas')->where('countryid',2)->get();
        if($request->ajax())
        {
            $output = '<ul>';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('areas')->where('countryid',2)
                    ->where('name', 'like', '%'.$query.'%')
                    ->get();
            } else {
                $data = DB::table('areas')->where('countryid',2)
                    ->get();
            }
             
            $total_row = $data->count();
            if($total_row > 0 && $total_row < $nhatbans->count()){
                foreach($data as $row)
                {
                    $output .= '
                    <li class="areaBtn" data-id="'.$row->id.'">'.$row->name.'</li>
                    ';
                }
                $output .= '</ul>';
            }else if($total_row === $nhatbans->count()){
                $count = 1 ;
                foreach($data as $row)
                {   
                    if($count==10){$output .= '</ul><ul id="more" style="display: none;">';}
                    $output .= '
                    <li class="areaBtn" data-id="'.$row->id.'">'.$row->name.'</li>
                    ';
                    $count +=1;
                }
                $output .= '</ul>';
                $output .= '<button onclick="myFunction()" id="myBtn">Xem th??m</button>';
            }else{
                $output = '
                <li>No Data Found</li>
                ';
                $output .= '</ul>';
            }
     
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }
   public function choosen(){
    $choosenArea = DB::table('nhatbans')
                    ->select('areaid')
                    ->where('userid', Auth::user()->id)
                     ->get();
        return json_encode($choosenArea);
   }
}
