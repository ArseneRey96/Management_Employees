<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'city_id',
        'state_id',
        'country_id',
        'departement_id',
        'zip_code',
        'birth_date',
        'date_hired',
    ];

    public function country()
    {
        # code...
        return $this -> belongsTo(Country::class);
    }

    public function state()
    {
        # code...
        return $this -> belongsTo(State::class);
    }

    public function city()
    {
        # code...
        return $this -> belongsTo(City::class);
    }

    public function departement()
    {
        # code...
        return $this -> belongsTo(Departement::class);
    }


}
