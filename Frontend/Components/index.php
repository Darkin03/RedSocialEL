<?php 

class Home{
    public function __construct(){
        $this->data = 'Hola mundo';
    }
}

    public function render(){
        echo $this->data;
        include 'Components/index.php';
    }

?>