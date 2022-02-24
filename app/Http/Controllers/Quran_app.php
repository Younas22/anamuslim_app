<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\List_of_reader;
use DB;

class Quran_app extends Controller
{

    public function get_reader_list()
    {
        $get_reader_list = DB::table("list_of_reader")->select('list_of_reader.id','list_of_reader.arabic_name','list_of_reader.name','list_of_reader.image')->get();

        $all_reader = [];
        foreach ($get_reader_list as $key) {
            array_push($all_reader, array(
                'id'=>$key->id,
                'name'=>$key->name,
                'arabic_name'=>$key->arabic_name,
                'image'=>asset('/').'public/reader_profile/'.$key->image,
            ));
        }
         return response()->json(array('msg'=>'success','date'=>$all_reader));
    }



        public function get_reader_details($reader_id)
    {
        $get_reader_details = DB::table("list_of_reader")->where('id',$reader_id)->first();
        $singal_reader = [];
        // foreach ($get_reader_details as $key) {
            array_push($singal_reader, array(
                'id'=>$get_reader_details->id,
                'name'=>$get_reader_details->name,
                'arabic_name'=>$get_reader_details->arabic_name,
                'image'=>asset('/').'public/reader_profile/'.$get_reader_details->image,
                'quran'=>array()
            ));
        // }

            // echo "<pre>"; print_r($singal_reader[0]['quran']); exit();

        if (!empty($get_reader_details->mp3_slug)) {
            for($i = 1; $i<115;$i++)
            {
                $get_sorah_list = DB::table("list_of_sorah")->where('id',$i)->first();
                $sorah_no =  str_pad($i, 3, "0", STR_PAD_LEFT);
                array_push($singal_reader[0]['quran'], array(
                'sorah_number'=>$get_sorah_list->id,
                'sorah_name'=>$get_sorah_list->transliteration,
                'sorah_arabic_name'=>$get_sorah_list->name,
                'revelation_place'=>$get_sorah_list->type,
                'verses'=>$get_sorah_list->total_verses,
                'pages'=>json_decode($get_sorah_list->pages),
                'url'=>asset('/').'public/quran/'.$get_reader_details->mp3_slug.'/'.$sorah_no.'.mp3',
                ));
                
            }
        }


         return response()->json(array('msg'=>'success','date'=>$singal_reader));
    }


        public function get_sorah_list()
    {
        $get_sorah_list = DB::table("list_of_sorah")->get();


        $all_sorah = [];
        foreach ($get_sorah_list as $key) {
            array_push($all_sorah, array(
                'id'=>$key->id,
                'sorah_name'=>$key->transliteration,
                'sorah_arabic_name'=>$key->name,
                'revelation_place'=>$key->type,
                'verses'=>$key->total_verses,
                'pages'=>json_decode($key->pages)
            ));
        }

         return response()->json(array('msg'=>'success','date'=>$all_sorah));
    }

        public function get_sorah_details($sorah_id)
    {
        $get_sorah_details = DB::table("sorah_details")->where('number',$sorah_id)->get();
        $singal_sorah = [];
        foreach ($get_sorah_details as $key) {
            array_push($singal_sorah, array(
                'id'=>$key->id,
                'number'=>$key->number,
                'text'=>$key->text,
                'transliteration'=>$key->transliteration
            ));
        }

         return response()->json(array('msg'=>'success','date'=>$singal_sorah));
    }
}