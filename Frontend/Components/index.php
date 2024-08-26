<?php 

include 'Components/login.php';

class HomeEs{
    public function __construct(){
        $this->data = 'Hola mundo';
    }

    public function render(){
        $header = new Header();
        $header->render();
        $login = new Login();
        $login->render();
        $footer = new Footer();
        $footer->render();

    }
}


class Header{



    public function render(){
        echo '
        <header>
             <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand fs-2 fw-bold" style="color: #F24C3D;" href="#">E&L</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse fw-bolder" id="navbarNav">
                <ul class="navbar-nav">
                  
                </ul>
              </div>
            </div>
          </nav>
        
        </header>
        ';
    }
}


class HeaderPage{
    public function render(){
        echo '
        <header>
             <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand fs-2 fw-bold" style="color: #F24C3D;" href="#">EL</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse fw-bolder" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                  </li>
                 

                  <li class="nav-item">
                    <a class="nav-link d-flex gap-1 align-items-center" href="index.php">Cerrar Seccion  <span class="badge text-bg-secondary">X</span></a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
        
        </header>
        ';
    }
}



class Footer{

    public function render(){
        echo '
         <footer class="p-1">
            <div class="py-2 px-4 d-flex flex-wrap gap-4 justify-content-center">
                <div class="fs-1 fw-bold" style="color: #F24C3D;">E&L</div>
                <div class="d-flex flex-column gap-2 fs-5">
                <div class="d-flex gap-2 align-items-center">
                    <div>Esnaider David Ortega Rodriguez</div>
                </div>
                 <div class="d-flex gap-2 align-items-center">
                    <div>Leonardo pastrana rosario</div>
                </div>
                </div>
            </div>
            <div class="py-1 text-center">----- 2024-----</div>
        </footer>
        ';
    }
}

?>