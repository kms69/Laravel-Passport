<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','contract_date'];
    public function publisherreportage()
    {
        return $this->belongsTo(PublisherReportage::class,'publisher_id');
    }
}
