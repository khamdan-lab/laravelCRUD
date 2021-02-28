<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public function allData()
    {
     
        return DB::table('table_siswa')
            ->leftJoin('table_kelas', 'table_kelas.id_kelas', '=', 'table_siswa.id_kelas')
            ->leftJoin('table_mapel', 'table_mapel.id_mapel', '=', 'table_siswa.id_mapel')
            ->get();    
    }
 
}
