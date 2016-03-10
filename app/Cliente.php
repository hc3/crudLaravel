<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    

    public function Endereco() {

    	return $this->hasOne('estoque\Endereco');
    	
    }


}
