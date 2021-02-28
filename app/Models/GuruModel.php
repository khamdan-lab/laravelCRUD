<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
   public function alldata()
   {
    return DB::table('table_guru')->get();
   }

   public function detaildata($id_guru)
   {
    return DB::table('table_guru')->where('id_guru', $id_guru)->first();
   }

   public function addData($data)
   {
         DB::table('table_guru')->insert($data);
   }

   public function editData($id_guru, $data)
   {
      return DB::table('table_guru')
            ->where('id_guru', $id_guru)
            ->update($data);


   }

   public function deleteData($id_guru){
         return DB::table('table_guru')
         ->where('id_guru', $id_guru)
         ->delete();

   }


} 
