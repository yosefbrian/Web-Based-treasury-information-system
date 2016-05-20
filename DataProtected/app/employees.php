<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    	protected $table = 'employees';
        protected $fillable  = [
        'Nip',
        'KdKantor',
        'NmPegawai',
        'UraianJabatan' ,
        'NPWP',
        'NmJenisKelamin',
        'NmStatusPegawai',
        'UraianPangkat',
        'NmJenisJabatan',
        'NmUnitOrganisasi',
        'NmJabatanGrade',
        'Esl2',
        'Esl3',
        'Esl4',
        'Esl5',
        'NmBank',
        'NoRek',
        'NmRek',
        ];
        
}
