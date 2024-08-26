<?php

class News{
    public function __construct(){
        $this->data = '<h2 class = "text-center d-flex aling-content-center justify-content-center">No se encontraton resultados 
        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-cone text-danger" viewBox="0 0 16 16">
  <path d="M7.03 1.88c.252-1.01 1.688-1.01 1.94 0l2.905 11.62H14a.5.5 0 0 1 0 1H2a.5.5 0 0 1 0-1h2.125z"/>
</svg>
        </h2>';
    }

    public function render(){
        echo $this->data ;
        }
}


?>