<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function clientes(){
    	return $this->belongsToMany('App\Cliente', 'reservas', 'hotel_id', 'cliente_id')->withPivot('fecha', 'numHabitaciones');
    }
}
