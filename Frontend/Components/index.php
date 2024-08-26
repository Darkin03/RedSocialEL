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
              <a class="navbar-brand fs-2 fw-bold" style="color: #F24C3D;" href="#">E&L</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse fw-bolder" id="navbarNav">
                <ul class="navbar-nav">

                 <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Novedades 
                   <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill text-danger" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                    </svg>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Amigos 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus-fill text-danger" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Mensajes
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-fill text-danger" viewBox="0 0 16 16">
                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"/>
                        </svg>
                    </a>
                  </li>


                    <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Perfil 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill text-danger" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    </a>
                  </li>


                   <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Salir 
                   <svg xmlns="http://www.w3.org/2000/svg" width="25" height=25" fill="currentColor" class="bi bi-box-arrow-right text-danger" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>
                    </a>
                  </li>

                  <li class="nav-item">
                    <h5 class="nav-link" href="clientes.php">
                        Esnaider Ortega
                    </h5>
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