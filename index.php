<!DOCTYPE html>
<html>
   <head>
      <title>Pythagorean Theorem Calculator</title>
      <!--Metadata-->
      <meta charset="utf-8" />
      <meta name="description" content="Salary Program, With JavaScript" />
      <meta name="keywords" content="immaculata, ics2o" />
      <meta name="author" content="Sirine Cherkaoui" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Pythagorean Theorem Calculator</title>
      <!--Favicon-->
      <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
      <link rel="manifest" href="./favicon/site.webmanifest" />
      <!--CSS file-->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Material Design Lite -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
   </head>
   <body>
      <!-- MDL Progress Bar with Buffering -->
      <div id="p3" class="mdl-progress mdl-js-progress"></div>
      <script>
         document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
           this.MaterialProgress.setProgress(33);
           this.MaterialProgress.setBuffer(87);
         });
      </script>
      <!--MDL layout-->  
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
         <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Pythagorean Theorem Calculator</span>
            </div>
            <!--Calculate c card-->
         </header>
         <main class="mdl-layout__content">
            <div class="mdl-grid">
               <div class="mdl-cell mdl-cell--6-col">
                  <div class="mdl-card mdl-shadow--2dp">
                     <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Calculate c</h2>
                     </div>
                     <!--Images-->
                     <center><img src="./images/Pyramid.png" alt="Pyramid" width="300"  height="300"></center>
                     <div class="mdl-card__supporting-text">
                        <form>
                           <div class="mdl-textfield mdl-js-textfield">
                              <input class="mdl-textfield__input" type="number" id="side-a">
                              <label class="mdl-textfield__label" for="side-a">Side a</label>
                           </div>
                           <div class="mdl-textfield mdl-js-textfield">
                              <input class="mdl-textfield__input" type="number" id="side-b">
                              <label class="mdl-textfield__label" for="side-b">Side b</label>
                           </div>
                           <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="calculateC()">Calculate</button>
                        </form>
                        <br>
                        <div id="result-c"></div>
                     </div>
                  </div>
               </div>
               <!--Calculate a card-->
               <div class="mdl-cell mdl-cell--6-col">
                  <div class="mdl-card mdl-shadow--2dp">
                     <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Calculate a</h2>
                     </div>
                     <!--Images-->
                     <center><img src="./images/bridge.png" alt="Pyramid" width="300"  height="300"></center>
                     <div class="mdl-card__supporting-text">
                        <form>
                           <div class="mdl-textfield mdl-js-textfield">
                              <input class="mdl-textfield__input" type="number" id="side-c">
                              <label class="mdl-textfield__label" for="side-c">Side c</label>
                           </div>
                           <div class="mdl-textfield mdl-js-textfield">
                              <input class="mdl-textfield__input" type="number" id="side-b2">
                              <label class="mdl-textfield__label" for="side-b2">Side b</label>
                           </div>
                           <!--MDL button-->
                           <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="calculateA()">Calculate</button>
                        </form>
                        <br>
                        <div id="result-a"></div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <script>
         // JS code
         
         function calculateC() {
         var a = parseFloat(document.getElementById('side-a').value);
         var b = parseFloat(document.getElementById('side-b').value);
         
         // Calculations for C
         
         if (!isNaN(a) && !isNaN(b)) {
         var c = Math.sqrt(a * a + b * b);
         document.getElementById('result-c').innerHTML = "c = " + c.toFixed(3);
         }
         }
         
         // Calculations for A
         
         function calculateA() {
         var b = parseFloat(document.getElementById('side-b2').value);
         var c = parseFloat(document.getElementById('side-c').value);
         
         if (!isNaN(b) && !isNaN(c)) {
         var a = Math.sqrt(c * c - b * b);
         document.getElementById('result-a').innerHTML = "a = " + a.toFixed(3);
         }
         }
         
         // attach event listeners to buttons
         document.querySelector('.mdl-button#calculate-c-btn').addEventListener('click', calculateC);
         document.querySelector('.mdl-button#calculate-a2-btn').addEventListener('click', calculateA);
      </script>
   </body>
</html>