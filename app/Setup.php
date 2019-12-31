<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    protected $table='setups';
    protected $fillable=['passport','work_permit','emirates_id','medical_card','driving_licence',


        'withdrawing_passport','vehicles_ownership','miscellaneous_documents','residence_visa','trade_licence','vehicle_insurance','visit_visa'];
}
