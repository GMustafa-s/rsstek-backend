<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustriesSecuritySection extends Model
{
    use HasFactory;
    public function industriesPage(){
        return $this->belongsTo(IndustriesPage::class);
    }
}
