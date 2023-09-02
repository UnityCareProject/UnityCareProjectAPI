<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistanceRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'urgency_level',
        'availability',
        'needs',
        'location',
        'additional_info',
        'volunter_id'
    ];
}
