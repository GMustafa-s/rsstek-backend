<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustriesPage extends Model
{
    use HasFactory;
    public function industriesSecuritySections(){
        return $this->hasMany(IndustriesSecuritySection::class);
    }
}
