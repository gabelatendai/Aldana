<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Request as Lrequest;
use App\User;
class Request extends Model
{
    protected $table='requests';
    protected $fillable=['policy_id','user_id','request_start_date','request_end_date','description','read_status','proof_document
','leave_status'];

    public function policy(){

        return $this->belongsTo('App\Policy');
    }

    public function uuser(){

        return $this->belongsTo(User::class);
    }

}


