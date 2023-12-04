<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <header>
        <h2>NCB</h2>
    </header>
    <div class="panels">
       <div class="tempCelcius">
            <div class="titre">
              &#x1F321; TEMPERATURE EN CELCIUS
            </div>
            <div class="corps">
                <Span id="valuCelcius" class="valeurC">
                    </Span>°C
            </div>
       </div>
       <div class="tempCelcius">
            <div class="titre">
            &#x1F321;  TEMPERATURE EN FAHRENHEIT
            </div>
            <div class="corps">
                <Span id="valuFar" class="valeurC"></Span>°F
            </div>
        </div>
        <div class="tempCelcius">
            <div class="titre">
            &#x1F4A1;LUMIERES SALON
            </div>
            <div class="corp">
                <Span class="etat" id="etatSalon"></Span><br>
                
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0">
                   <label class="onoffswitch-label" for="myonoffswitch">
                   <span class="onoffswitch-inner"></span>
                 <span class="onoffswitch-switch"></span>
           </label>
       </div>
       </div>
       </div>
       
       <div class="tempCelcius">
            <div class="titre">
            &#x1F4A1;LUMIERES COULOIR
            </div>
            <div class="corp">
                <Span class="etat" id="etatcouloir"></Span><br>
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchs" tabindex="0">
                   <label class="onoffswitch-label" for="myonoffswitchs">
                   <span class="onoffswitch-inner"></span>
                 <span class="onoffswitch-switch"></span>
        </label>
      </div>
      </div>
      </div>
      <div class="tempCelcius">
            <div class="titre">
                LUMIERES CHAMBRE1
            </div>
            <div class="corp">
                <Span class="etat" id="etatch1"></Span><br>
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitche" tabindex="0">
                   <label class="onoffswitch-label" for="myonoffswitche">
                    <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                 </label>
              </div>
        </div>
        </div>
        <div class="tempCelcius">
            <div class="titre">
            &#x1F4A1;LUMIERES CHAMBRE 2
            </div>
            <div class="corp">
                <Span class="etat" id="etatchambre"></Span><br>
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchr" tabindex="0">
                   <label class="onoffswitch-label" for="myonoffswitchr">
                   <span class="onoffswitch-inner"></span>
                 <span class="onoffswitch-switch"></span>
              </label>
        </div>
              </div>
       
       </div>
              <div class="tempCelcius">
                  <div class="titre">
                     &#x1F4A1;LUMIERES CHAMBRE 3
                  </div>
                  <div class="corp">
                      <Span class="etat" id="etatchambre3"></Span><br>
                      <div class="onoffswitch">
                       <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchd" tabindex="0">
                        <label class="onoffswitch-label" for="myonoffswitchd">
                           <span class="onoffswitch-inner"></span>
                           <span class="onoffswitch-switch"></span>
                       </label>
                      </div></div></div>
                      <div class="tempCelcius">
            <div class="titre">
            &#x1F4A1;LUMIERES CHAMBRE 4
            </div>
            <div class="corp">
                <Span class="etat" id="etatchambre4"></Span><br>
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchf" tabindex="0">
                   <label class="onoffswitch-label" for="myonoffswitchf">
                   <span class="onoffswitch-inner"></span>
                 <span class="onoffswitch-switch"></span>
              </label>
              </div></div></div>
              <div class="tempCelcius">
            <div class="titre">
            &#x1F4A1;LUMIERES DEHORS
            </div>
            <div class="corp">
                <Span class="etat" id="etatdehors"></Span><br>
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchl" tabindex="0">
                   <label class="onoffswitch-label" for="myonoffswitchl">
                   <span class="onoffswitch-inner"></span>
                 <span class="onoffswitch-switch"></span>
              </label>
              </div></div></div>
              
              <div class="tempCelcius">
            <div class="titre">
            &#x1F4A1;TOUT ALLUMER
            </div>
            <div class="corp">
                
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchp" tabindex="0">
                   <label class="onoffswitch-label" for="myonoffswitchp">
                   <span class="onoffswitch-inner"></span>
                 <span class="onoffswitch-switch"></span>
              </label>
              </div></div>
    </div>
    <div class="tempCelcius">
            <div class="titre">
            &#x1F4A1;TOUT ETEINDRE
            </div>
            <div class="corp">
                
                <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchpm" tabindex="0" value="eteindreTout">
                   <label class="onoffswitch-label" for="myonoffswitchpm">
                   <span class="onoffswitch-inner"></span>
                 <span class="onoffswitch-switch"></span>
              </label>
              </div>
    </div>
    </div> 
    <script src="js/allumeT.js"></script>   
<script src="js/salon.js"></script>
<script src="js/tempF.js"></script>
<script src="js/tempc.js"></script>
<script src="js/couloir.js"></script>
<script src="js/chambre1.js"></script> 
<script src="js/chambre2.js"></script>  
<script src="js/dehors.js"></script> 
<script src="js/index.js"></script> 
<script src="js/salonI.js"></script> 
<script src="js/swch1.js"></script>
<script src="js/swch2.js"></script>
<script src="js/swcl.js"></script>  
<script src="js/swch3.js"></script> 
<script src="js/swch4.js"></script>
<script src="js/swde.js"></script> 
<script src="js/chambre3.js"></script> 
<script src="js/chambre4.js"></script> 
<script src="js/eteindreT.js"></script>
<script src="js/salonA.js"></script>

<script src="js/cham1C.js"></script>
<script src="js/cham2C.js"></script>
<script src="js/cham3C.js"></script>  
<script src="js/cham4C.js"></script> 
<script src="js/cloirC.js"></script>
<script src="js/deC.js"></script> 
<script src="js/eteintT.js"></script> 
<script src="js/allumeT.js"></script> 

</body>
</html>