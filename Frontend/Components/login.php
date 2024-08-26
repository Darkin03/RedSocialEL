<?php

class Login{
    public function __construct(){
        $this->data = 'Login';
    }

    public function render(){
        echo '<section class="p-3">
        <div class="container-sm rounded-4" id="loginContenedor">
          <div class="d-flex justify-content-center">
              
              <div class="w-75 p-2 p-sm-4 justify-content-center">
                <h1 class="text-center fs-2 fw-bold" style="color: #F24C3D;">E&L</h1>
                <form method="post" action="../backend/api/login.php">
                  <div class="mb-3">
                    <input type="text" class="form-control border" name="usuario" id="usuario" placeholder="Usuario">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control border" name="contra" id="contrasena" placeholder="Contraseña">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn w-100 rounded-1c bg-danger text-light" id="submitLogin">Ingresar</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </section>

      <style>
        .form-control:focus {
          border-color: #dc3545 !important;
          box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
        }
      </style>';
    }
}

?>