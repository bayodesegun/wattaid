<?php

namespace App\Http\Controllers;

use Input;
use App\Item;
use DB;
use Excel;

use App\Powerplan;
class MaatwebsiteController extends Controller
{
  public function importExport()
  {
    return view('importExport');
  }
  public function downloadExcel($type)
  {
    $data = Item::get()->toArray();
    return Excel::create('powerplan', function($excel) use ($data) {
      $excel->sheet('mySheet', function($sheet) use ($data)
          {
        $sheet->fromArray($data);
          });
    })->download($type);
  }
  public function importExcel()
  {
    if (Input::hasFile('import_file')) {
      $path = Input::file('import_file')->getRealPath();
      $month = Input::get('dataMonth');
      $data = Excel::load($path, function($reader) {})->get();
      if (!empty($data) && $data->count()) {
        $date = date('Y-m-d', strtotime("$month 1"));
        foreach ($data as $key => $value) {

          $insert = ['month' => $date, 'day' => $value->day, 'location' => $value->location, 'hour0' => $value->hour0, 'hour1' => $value->hour1, 'hour2' => $value->hour2, 'hour3' => $value->hour3, 'hour4' => $value->hour4, 'hour5' => $value->hour5, 'hour6' => $value->hour6, 'hour7' => $value->hour7, 'hour8' => $value->hour8, 'hour9' => $value->hour9, 'hour10' => $value->hour10, 'hour11' => $value->hour11, 'hour12' => $value->hour12, 'hour13' => $value->hour13, 'hour14' => $value->hour14, 'hour15' => $value->hour15, 'hour16' => $value->hour16, 'hour17' => $value->hour17, 'hour18' => $value->hour18, 'hour19' => $value->hour19, 'hour20' => $value->hour20, 'hour21' => $value->hour21, 'hour22' => $value->hour22, 'hour23' => $value->hour23];

          Powerplan::updateOrCreate([
            'month' => $insert['month'],
            'day' => $insert['day'],
            'location' => $insert['location']
            ], 
            $insert);
        }

        /*if(!empty($insert)){
          DB::table('powerplans')->insert($insert);
          dd('Record inserted successfully.');
        }*/
      }
    }
    return redirect('/dashboard');
  }
}