<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function hoteles(){
    	return $this->belongsToMany('App\Hotel', 'reservas', 'cliente_id', 'hotel_id')->withPivot('fecha', 'numHabitaciones');
    }
}
