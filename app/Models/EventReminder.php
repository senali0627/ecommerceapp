<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventReminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_name',
        'event_date',
        'reminder_time',
        
    ];
 

  
public function user()
{
    return $this->belongsTo(User::class);
}

}
