<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublisherReportage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['publisher_id','type','price'];
    public function publisher()
    {
        return $this->hasMany(Publisher::class,'publisher_id');
    }

}
