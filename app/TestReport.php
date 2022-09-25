<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestReport extends Model
{
    protected $table = 'test_reports';

    protected $fillable = [
        'prescription_id',
        'name',
        'notes',
        'is_deleted',
        "labReporterId",
        "result",
    ];

    public function labReporter()
    {
        return $this->belongsTo(User::class, "labReporterId");
    }

    public function prescription()
    {
        return $this->belongsTo(Prescription::class, "prescription_id");
    }
}
