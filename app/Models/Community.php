<?php

namespace Olotu\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'interest_id'];
    
    public function getInterestIdAttribute($value)
    {
        switch($value) {
            case 1:
                return 'Business';
                break;
            case 2:
            default:
                return 'Technology';
                break;
        }
    }
}
