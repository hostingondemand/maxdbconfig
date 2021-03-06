<?php
namespace modules\hoddbconfig\model;
use framework\core\Base;

class ConfigItem extends Base{
    var $id;
    var $key;
    var $section;
    var $value;

    function initialize($key,$section){
        $this->key=$key;
        $this->section=$section;
        return $this;
    }

    //manual implementation because config is used before full initialisation
    function fromArray($arr){
        $this->id=$arr["id"];
        $this->key=$arr["key"];
        $this->section=$arr["section"];
        $this->value=$arr["value"];
        return $this;
    }

    function toArray(){
        return [
            "id"=>$this->id,
            "key"=>$this->key,
            "section"=>$this->section,
            "value"=>$this->value
        ];
    }

    function _saved(){}
}
?>