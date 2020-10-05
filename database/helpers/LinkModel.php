<?php

namespace Database\Helpers;


use Illuminate\Database\Schema\Blueprint;

trait LinkModel
{

    protected $model;


    public function linkModel(Blueprint $table, string $modelName = "", string $fieldName = "")
    {
        $str = "Database\\Factories\\" . $modelName . "Factory";
        $modelName = (new $str)->modelName();
        $this->model = (new $modelName);
        return $table->foreignIdFor($this->model)->name($fieldName);
    }

}
