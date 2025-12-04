<?php

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model 
{
    use HasFactory;

    protected $fillable = [
        'customer_name', 'phone', 'score_food', 
        'score_service', 'score_ambiance', 'message',
        'fuzzy_score', 'satisfaction_class',
        'message_sentiment'
    ];
}