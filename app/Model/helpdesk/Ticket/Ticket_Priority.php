<?php

namespace App\Model\helpdesk\Ticket;

use App\BaseModel;

class Ticket_Priority extends BaseModel
{
    public $timestamps = false;
    protected $primaryKey = 'priority_id';
    protected $table = 'ticket_priority';
    protected $fillable = [
        'priority_id',
        'priority',
        'status',
        'user_priority_status',
        'priority_desc',
        'priority_color',
        'priority_urgency',
        'ispublic',
        'created_at',
        'updated_at',
    ];
}
