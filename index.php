<?php
include 'config.php' ;

$sql = "SELECT * FROM Motors";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script href="Js.js"></script>
    </head>

    <body class="bg-dark text-light">

    <div class="m-5 "><br></div>
        <div class="container ">

            <div class="controller justify-content-center table-responsive panel panel-default">
               <table class="table table-borderless mx-auto w-auto rounded bg-light ">
                   <tr >

                       <td align="center " class="col-4">
                           <button class="btn btn-light" type="button" > </button>
                       </td>
                       <td align="center " class="col-4 justify-content-center mx-auto">
                           <button class="btn btn-light p-0 " type="button" >
                               <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                                   <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
                               </svg>
                           </button>
                       </td>
                       <td align="center " class="col-4">
                           <button class="btn btn-light" type="button" > </button>
                       </td>

                   </tr>
                   <tr >
                       <td align="center " class="col-4">
                           <button class="btn btn-light p-0" type="button" >
                               <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                   <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                               </svg>
                           </button>
                       </td>
                       <td align="center " class="col-4">
                           <button class="btn btn-light p-0" type="button" >
                               <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                   <path d="M7.5 1v7h1V1h-1z"/>
                                   <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                               </svg></button>
                       </td>
                       <td align="center " class="col-4 " >
                           <button class="btn btn-light p-0 " type="button" >
                               <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                   <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                               </svg>
                           </button>
                       </td>
                   </tr>
                   <tr >
                       <td align="center " class="col-4">
                           <button class="btn btn-light" type="button" > </button>
                       </td>
                       <td align="center " class="col-4">
                           <button class="btn btn-light p-0 " type="button" >
                               <svg xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
                                   <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
                               </svg>
                           </button>
                       </td>
                       <td align="center " class="col-4" >
                           <button class="btn btn-light" type="button" > </button>
                       </td>
                   </tr>
               </table>


            </div>

            <form action="Upload.php" method="Post">
                <div class="form-group">

                    <table class="table table-secondary rounded text-dark  font-weight-bold">
                        <tr >
                            <td class="border-top-0" >
                                <label  for="M1" id="M1L">Motor 1 : 0 degree </label>
                            </td>

                            <td align="right" class="border-top-0">
                                <input  id="M1" type="range" value="<?php echo $row['Motor1'] ?>" min="-90" max="90" name="m1" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M2" id="M2L">Motor 2 : 0 degree</label>
                            </td>
                            <td align="right">
                                <input id="M2" type="range" value="<?php echo $row['Motor2'] ?>" min="-90" max="90" name="m2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M3" id="M3L">Motor 3 : 0 degree</label>
                            </td>
                            <td align="right">
                                <input id="M3" type="range" value="<?php echo $row['Motor3'] ?>" min="-90" max="90" name="m3">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M4" id="M4L">Motor 4 : 0 degree</label>
                            </td >
                            <td align="right">
                                <input id="M4" type="range" value="<?php echo $row['Motor4'] ?>" min="-90" max="90" name="m4">
                            </td >
                        </tr>
                        <tr>
                            <td>
                                <label for="M5" id="M5L">Motor 5 : 0 degree</label>
                            </td>
                            <td align="right">
                                <input id="M5" type="range" value="<?php echo $row['Motor5'] ?>" min="-90" max="90" name="m5">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="M6" id="M6L">Motor 6 : 0 degree</label>
                            </td>
                            <td align="right" >
                                <input id="M6" type="range" value="<?php echo $row['Motor6'] ?>" min="-90" max="90" name="m6">

                            </td>
                        </tr>

                    </table>

                    <input id="TF" type="text" value="<?php echo $row['is_on'] ?>" min="-90" max="90" name="is_on" style="display: none">
                </div>



                <table class="table table-secondary rounded text-dark  font-weight-bold">
                    <tr >
                        <td class="border-top-0">
                            <button type="submit" class="btn btn-primary" style="display: inline-block" >Save</button>
                            <?php

                          if($row['is_on']){
                              echo " <button id=\"off\" type=\"button\" class=\"btn btn-danger \" style=\"display: inline-block\" onclick=\"setOff()\">Turn OFF !!</button>
                                     <button id = \"on\" type = \"button\" class=\"btn btn-success\" style = \"display: none\" onclick = \"setOn()\" > Turn ON !!</button >";
                          }else {

                            echo "<button id = \"on\" type = \"button\" class=\"btn btn-success\" style = \"display: inline-block\" onclick = \"setOn()\" > Turn ON !!</button >
                                   <button id=\"off\" type=\"button\" class=\"btn btn-danger \" style=\"display: none\" onclick=\"setOff()\">Turn OFF !!</button> " ;
                           }


                            ?>
                        </td>
                        <td class="border-top-0" align="right">
                            <?php
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            echo "<div   class=\" btn btn-success  justify-content-end\"   >Database Connected</div>";
                            ?>
                        </td>
                    </tr>
                </table>



            </form>







        </div>



    </body>
    <script>
    $M1 = document.getElementById('M1') ;
    $M2 = document.getElementById('M2') ;
    $M3 = document.getElementById('M3') ;
    $M4 = document.getElementById('M4') ;
    $M5 = document.getElementById('M5') ;
    $M6 = document.getElementById('M6') ;






       $M1.addEventListener('change',function (event) {

                $M1L = document.getElementById('M1L') ;

                $M1L.textContent= putin($M1L.textContent,$M1.value) ;
            })

        $M2.addEventListener('change',function (event) {

            $M2L = document.getElementById('M2L') ;

            $M2L.textContent= putin($M2L.textContent,$M2.value) ;
        })

        $M3.addEventListener('change',function (event) {

            $M3L = document.getElementById('M3L') ;

            $M3L.textContent= putin($M3L.textContent,$M3.value) ;
        })

        $M4.addEventListener('change',function (event) {

            $M4L = document.getElementById('M4L') ;

            $M4L.textContent= putin($M4L.textContent,$M4.value) ;
        })

        $M5.addEventListener('change',function (event) {

            $M5L = document.getElementById('M5L') ;

            $M5L.textContent= putin($M5L.textContent,$M5.value) ;
        })

        $M6.addEventListener('change',function (event) {

            $M6L = document.getElementById('M6L') ;

            $M6L.textContent= putin($M6L.textContent,$M6.value) ;
        })

window.addEventListener('load',function (event) {

    $M1L = document.getElementById('M1L') ;
        $M1L.textContent= putin($M1L.textContent,$M1.value) ;

    $M2L = document.getElementById('M2L') ;

    $M2L.textContent= putin($M2L.textContent,$M2.value) ;
    $M3L = document.getElementById('M3L') ;

    $M3L.textContent= putin($M3L.textContent,$M3.value) ;
    $M4L = document.getElementById('M4L') ;

    $M4L.textContent= putin($M4L.textContent,$M4.value) ;

    $M5L = document.getElementById('M5L') ;

    $M5L.textContent= putin($M5L.textContent,$M5.value) ;

    $M6L = document.getElementById('M6L') ;

    $M6L.textContent= putin($M6L.textContent,$M6.value) ;


    })

        function setOn() {

            document.getElementById('TF').value = 1 ;
            document.getElementById('on').disapled = true;
            document.getElementById('on').style = 'display:none';
            document.getElementById('off').style = 'display:inline-block';





        }

        function setOff() {

        document.getElementById('TF').value = 0  ;
        document.getElementById('off').disapled = true;
        document.getElementById('off').style = 'display:none';
        document.getElementById('on').style = 'display:inline-block';


        }

        function putin(Mystring , Myvalue) {
        $string1 = Mystring+"" ;
        $ourindex = $string1.indexOf(':') ;
        //$string2 = $string1.substring($ourindex +1 , Mystring.length) ;
        $string1 = $string1.substring(0 , $ourindex +1) ;


        return $string1+" "+Myvalue+" degree";

        }
    </script>

</html>