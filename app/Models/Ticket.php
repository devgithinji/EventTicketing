<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function ticket_pricing()
    {
        return $this->belongsTo(TicketPricing::class, 'type');
    }

}
