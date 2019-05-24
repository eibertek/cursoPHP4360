
<?php

class Personaje {
    protected $name = '';

    function Personaje($name) {
        $this->name = $name;
    }

    public function saludar(){
        return "Hola ".$this->name;
    }
}

?>