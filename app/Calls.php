<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Source;

class Calls extends Model
{
    protected $fillable = [
        'name', 'details', 'status', 'phone', 'date'
    ];
    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }
    public function source()
    {
        return $this->belongsTo(Sources::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
