<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function index(){
        // $locations=DB::table('locations')->get('city');
        //         $data['locations'] = $locations;
               
        //      return view('showMap',$data);
     
        // $post=DB::table('locations')->get('city');
           // $data['locations'] = $post;
               
                // return view('showMap',$data);
        // $label = ['Lucknow', 'Barabanki', 'Kanpur', 'Sitapur', 'Hardoi', 'Banarus','Lucknow', 'Barabanki', 'Kanpur', 'Sitapur', 'Hardoi', 'Banarus'];
        // $price = ['10', '5', '100', '90', '50', '30','10', '5', '100', '90', '50', '30'];
        // return view('showMap',['labels' => $label, 'prices' => $price]);
        $post=DB::table('locations')->get('*')->toArray();
        // $post=DB::table('locations')->limit(10)->get()->toArray();
        // $post=DB::table('locations')->limit(10)->offset(10);
        $post=DB::table('locations')->select(DB::raw('sum(crime_count) as crime_count,city'))->groupBy('city','crime_count')->orderByDesc("crime_count")->limit(10)->offset(0)->get();
        
        foreach($post as $row)

        {   
            $data[] = array
            (
            'label'=>$row->city,
            'y'=>$row->crime_count,
            // 'z'=>$row->zip
            
            
            );
            
        }
        return view('showMap',['data' => $data]);


        
 
       
      
}
// public function city(){
//        $locations=DB::table('locations')->get('city');
//         $store['locations'] = $locations;
       
//         return view('showMap',$store);

// }


}
