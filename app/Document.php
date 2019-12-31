<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table='documents';
    protected $fillable=['document_type',
                        'document_number',
                        'document_place_of_issue',
                        'document_date_of_issue',
                        'document_date_of_expiry',
                        'document_scan_file',
                        'user_id'
        ];
    public function employee(){
        return $this->belongsTo("App\User");
    }
}
