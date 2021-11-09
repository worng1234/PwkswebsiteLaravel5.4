<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newstudentm4Model extends Model
{
    protected $table = "new_student_register_m4";
    protected $fillable = [
        'prename',
        'fname',
        'name_cen',
        'surname',
        'sex',
        'pic',
        'id_number_pic',
        'house',
        'id_number',
        'day',
        'mounth',
        'year',
        'religion',
        'nationality',
        'origin',
        'disabled',
        'poor_person',
        'etc',
        'tel',
        'email',
        'father_prename',
        'father_name',
        'father_namecen',
        'father_surname',
        'father_id',
        'father_job',
        'father_tel',
        'mother_prename',
        'mother_name',
        'mother_namecen',
        'mother_surname',
        'mother_job',
        'mother_id',
        'mother_tel',
        'parent',
        'parent_status',
        'parent_prename',
        'parent_name',
        'parent_namecen',
        'parent_surname',
        'parent_id',
        'parent_job',
        'parent_tel',
        'house_number',
        'street',
        'road',
        'bloc',
        'sub_district',
        'district',
        'province',
        'post',
        'final_school',
        'final_school_sub_district',
        'final_school_district',
        'final_school_province',
        'major_name1',
        'major_name2',
        'major_name3',
        'major_name4',
        'onet_sci',
        'onet_math',
        'onet_thai',
        'onet_eng',
        'student_id'
    ];
}
