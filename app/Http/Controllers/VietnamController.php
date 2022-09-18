<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Vietnam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VietnamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vietnams = Vietnam::all();
        
        return view('vietnam.vietnam',[
            'vietnams'=>$vietnams
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
        //
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
        //
    }
    function action(Request $request)
    {   
        $vietnams= DB::table('vietnams')->get();
        if($request->ajax())
        {
            $output = '<ul>';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('vietnams')
                    ->where('name', 'like', '%'.$query.'%')
                    ->get();
            } else {
                $data = DB::table('vietnams')
                    ->get();
            }
             
            $total_row = $data->count();
            if($total_row > 0 && $total_row < $vietnams->count()){
                foreach($data as $row)
                {
                    $output .= '
                    <li>'.$row->name.'</li>
                    ';
                }
                $output .= '</ul>';
            }else if($total_row === $vietnams->count()){
                $count = 1 ;
                foreach($data as $row)
                {   
                    if($count==10){$output .= '</ul><ul id="more" style="display: none;">';}
                    $output .= '
                    <li>'.$row->name.'</li>
                    ';
                    $count +=1;
                }
                $output .= '</ul>';
                $output .= '<button onclick="myFunction()" id="myBtn">Xem thêm</button>';
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
}
