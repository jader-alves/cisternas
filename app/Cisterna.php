<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cisterna extends Model
{
    public function cisterna_materiais(){
        return $this->hasMany(CisternaMaterial::class);
    }


    public function hasMaterial($tipo_material_id){
        foreach($this->cisterna_materiais as $material){
            if ($material->tipo_material_id == $tipo_material_id ){
                return True;
            }
        }
        return False;
    }


}
