
<?php
   if(isset($_POST['submit'])){
   if(!empty($_POST['idade'])) {
   
    $uniqueId= time().mt_rand();
       $selected = $_POST['idade'];
       $selected1 = $_POST['classe'];
       $selected2 = $_POST['etnia'];
       $selected3 = $_POST['nacionalidade'];
       $selected4 = $_POST['formacao'];
       $selected5 = $_POST['personalidade'];
   
       $total =  "ID Form =" + $uniqueId. PHP_EOL .$selected. PHP_EOL .$selected1. PHP_EOL .$selected2. PHP_EOL .$selected3. PHP_EOL.$selected4. PHP_EOL.$selected5. PHP_EOL;
   
       $fp = fopen('Registro_Formulario_Trabalho_POS.txt', 'a');
   fwrite($fp, $total);
   fclose($fp);
   
       echo 'Seu ID: ' . $uniqueId;
   } else {
       echo 'Please select the value.';
   }
   }
   ?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MBTI Test - Trabalho de POS | Mespper & Fox">
    <link rel="icon" type="image/png" href="img/favicon.png">



    <script src="src/main.js" defer></script>


    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="//cdn.rawgit.com/donmccurdy/aframe-extras/v4.1.1/dist/aframe-extras.min.js"></script>
    <script src="https://supereggbert.github.io/aframe-htmlembed-component/dist/build.js"></script>

    <link rel="stylesheet" href="style1.css">
    <!-- <link rel="stylesheet" href="https://camu-mesp-vr.glitch.me/style.css" /> -->
    <title>Apoio no Trabalho de POS / Artigo Cientifico - Mespper & Fox</title>

    <style>
         div#text {
         position: absolute;
         left: 6px;
         top: 6px;
         padding: 6px;
         /*
         text-shadow: 0 0 5px white;
         */
         width: 21%;
         background-color: rgba(255, 255, 255, 0.7);
         border-radius: 14px;
         }

         html,body {
  font-family: sans-serif;
  padding: 0 1em;
  font-size: 19px;
  background: #222;
  color: #aaa;
  text-align:center;
}

p {
  margin: 1.5em 0;
  color: #000;
}

img {
  max-height: 50vh;
}

a {
  color: inherit;
}

a:hover {
  color: red;
}

.italic { font-style: italic; }
.small { font-size: 0.8em; }

/** LIGHTBOX MARKUP **/

.lightbox {
  /* Default to hidden */
  display: none;

  /* Overlay entire screen */
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  
  /* A bit of padding around image */
  padding: 1em;

  /* Translucent background */
  background: rgba(0, 0, 0, 0.8);
}

/* Unhide the lightbox when it's the target */
.lightbox:target {
  display: block;
}

.lightbox span {
  /* Full width and height */
  display: block;
  width: 100%;
  height: 100%;

  /* Size and position background image */
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}
      </style>
</head>

<body>
    <a-scene cursor="rayOrigin: mouse">

        <a-assets>
            <!--         <a-asset-item
                  id="expo_center"
                  src="https://cdn.glitch.com/d8995d24-368f-4972-bb0b-3c3dbf554e2f%2Fexpo_center.glb?v=1617632856209"
                  crossorigin="anonymous"
                  response-type="arraybuffer"
                ></a-asset-item> -->

            <img id="sky" crossorigin="anonymous"
                src="https://live.staticflickr.com//2927//32919748396_ac001b3372_k.jpg" />

            <img id="my-image"
                src="https://cdn.glitch.global/cff7a94b-2817-41cf-ae0e-cff4dc96df48/138634-realidade-aumentada-e-realidade-virtual-quais-sao-as-diferencas.jpg?v=164174782911">

            <img id="wiki"
                src="https://cdn.glitch.global/f9fc8fa2-1793-4e82-991b-29c2a84f1f4e/Tipologia%20de%20Myers-Briggs%20%E2%80%93%20Wikip%C3%A9dia%2C%20a%20enciclop%C3%A9dia%20livre%20(2).png?v=1641760312536">

        </a-assets>

        <a-entity id="rig" movement-controls="fly: true; speed: 0.1">
            <a-entity camera position="0 1.6 0" look-controls></a-entity>
        </a-entity>

        <a-entity id='env'>
            <a-plane wireframe='true' width='10' height='10' segments-height='10' segments-width='10' rotation='90 0 0'
                color="#fff"></a-plane>
        </a-entity>

        <a-sky radius="50" src="#sky"></a-sky>

        <a-curvedimage position="-0.008 3.268 0" rotation="-22.793 141.428 17.188" scale="1 2.5 1" src="#my-image"
            material="" geometry="thetaLength: 70"></a-curvedimage>


        <a-entity position="2.423 4.162 1.631" scale="3 3 3"
            geometry="primitive:box;height: 0.85; width: 0.85;depth:0.85"
            material="src: url(https://cdn.glitch.global/f9fc8fa2-1793-4e82-991b-29c2a84f1f4e/logoAnima%5B1%5D.png?v=1641757236625); opacity: 1; transparent: true;side: double"
            animation__yoyo2="property: position; dir: alternate; dur: 5000;easing: easeInSine; loop: true; to: 2.423 3.5 1.631">
        </a-entity>

        <a-entity position="-7.269 6.594 -1.681" scale="9 9 9"
            geometry="primitive:box;height: 0.85; width: 0.85;depth:0.85"
            material="src: url(https://cdn.glitch.global/f9fc8fa2-1793-4e82-991b-29c2a84f1f4e/7e52a1363527fded54881fcc51510309%5B1%5D.jpg?v=1641757480075); opacity: 1; transparent: true;side: double"
            animation="property: rotation; to: 360 -360 360; loop: true; dur: 79000; easing:linear;"></a-entity>

        <a-entity position="-3.414 2.021 -5.374" scale="1 1 1"
            geometry="primitive:box;height: 1; width: 1.50;depth:1.50"
            material="src: url(https://cdn.glitch.global/f9fc8fa2-1793-4e82-991b-29c2a84f1f4e/14650446_1113072235444672_6125852939153834703_n.jpg?v=1641760038897);color: #7C7C7C; opacity: 1; transparent: true;side: double"
            animation="property: rotation; to: 0 360 0; loop: true; dur: 71000; easing:linear;"></a-entity>



        <a-image src="#wiki" position="2.668 1.536 -2.089" rotation="0 -20.374 0" material=""
            geometry="height: 5; width: 2"></a-image>

        <a-entity position="0 1.437 -2.075" htmlembed>

            <div class="mbti__contents">
                <!-- start page section -->
                <div class="mbti__start">
                    <h1>Apoio no <i>Trabalho de POS / Artigo Cientifico</i> com <font color="red">MBTI</font>
                    </h1>
                    <img class="main__img" src="img/main.jpg" alt="main image">
                    </br>
                    <h1> Faça seu teste conosco!</h1><br />
                    <h3> Encontre um tipo de Personalidades semelhante ao seu! </h3>

                    <button class="mbti__startBtn">Comece Aqui!🚀</button>
                </div>
                <!-- question section -->
                <div class="mbti__question --hide">
                    <h2 class="mbti__title" style="
                    color: #fff;
                ">Questoes - POS/<font color="red">MBTI</h2>
                    </font>
                    </h2>

                    <h5>
                        <font color="white"></font><u>Tipologia pela Myers-Briggs.</u></font>
                    </h5>

                    <h3 class="mbti__asking">Perguntas</h3>
                    <div class="mbti__skill__bar">
                        <div class="skill__value"></div>
                    </div>
                    <img class="mbti__testImg">
                    </br>
                    <button id="A" class="mbti__selectBtn"></button>
                    </br>
                    </br>
                    <button id="B" class="mbti__selectBtn"></button>
                    <input type="hidden" id="type" data-value="EI">
                </div>
                <div class="mbti__result --hide">
                    <div class="mbti__result__content"></div>
                    <button class="result__replay">Novamente? <i class="fas fa-undo-alt"></i></button>

                </div>

            </div>

        </a-entity>
    </a-scene>


</body>


<div id="text">
    <!--     <iframe src="https://github.com/anars/blank-audio/blob/master/250-milliseconds-of-silence.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe> 
    
    <audio autoplay loop  id="playAudio">
    <source src="https://cdn.glitch.me/cff7a94b-2817-41cf-ae0e-cff4dc96df48%2Fcff7a94b-2817-41cf-ae0e-cff4dc96df48_yt1s.com%20-%20Dreams%20(1).mp3?v=1635451240325">
</audio>
     -->


    <!--     <h1>Camuto Group</h1> -->
    <img src="https://cdn.glitch.global/f9fc8fa2-1793-4e82-991b-29c2a84f1f4e/dc-Cover-kqj6bv6oe4189iq7nuds0ebo37-20160316103845.Medi%5B1%5D.jpeg?v=1641855569527"
        alt="VR Headset" width="400" height="200" />

    <p>
        You don't have VR Headset yet for our POS? <b>Well, for your locomotion in our VR scene ( PC/Note ) click in your keyboard:</b>: </br>
    </p>

    <img src="https://cdn.glitch.global/f9fc8fa2-1793-4e82-991b-29c2a84f1f4e/wasd%5B1%5D.png?v=1641855207621"
        alt="Key for Locomotion" width="150" height="100" /></br>
    <span id=""><b>UP (W)</b></span></br>
    <span id=""><b>Down (S)</b></span></br>
    <span id=""><b>Left (A)</b></span></br>
    <span id=""><b>Right (D)</b></span></br>
    <div id="container"></div>
    <p>
        This requires VR Headset and better if
        <a href="https://www.oculus.com/quest-2/?locale=pt_BR" target="_blank">Quest 2 from Meta/Facebook</a>
    </p>
</br>
    <p>
        Myers-Briggs (MBTI), reference
        <a href="https://pt.wikipedia.org/wiki/Tipologia_de_Myers-Briggs" target="_blank"><i>Wikipedia</i></a>.
    </p>
    </br>
    <p>
        Deseja Registrar seu Resultado para o nosso Trabalho de POS?
        <a href="#registrar"><i><br><br>Great, entao acesse nosso Link e Registre seus Dados</i></a>.
    </p>
</br>
    <p>
        Source code free by Mespper for Grupo Anima at
        <a href="https://github.com/mespper/Apoio-no-Trabalho-de-Pos-Artigo-Cientifico" target="_blank"><i>Github</i></a>.
    </p>
<!-- </br>
    <p>
        Powered by
        <a href="https://mespper.me" target="_blank"><i>Mespper</i></a>.
    </p> -->

    <form method="post" action="Roboto_Regular_Com_Registro.php"  class="lightbox" id="registrar">
   <a href="#"> FECHAR </a><br><br>
         Obrigado por querer Registrar seus Dados, siga as perguntas abaixo:<br>
         <hr>
         <br>
         Qual a sua Idade:<br>
         <select name="idade">
            <option value="Nenhuma">Escolha Aqui</option>
            <option value="Ate_15">Ate os 15</option>
            <option value="Ate_20">Ate os 20</option>
            <option value="Ate_30">Ate os 30</option>
            <option value="Ate_40">Ate os 40</option>
            <option value="Ate_50">Apartir dos 50</option>
         </select>
         <br>
                  <hr>
         Qual a sua Classe Social:<br>
         <select name="classe">
            <option value="Nenhuma">Escolha Aqui</option>
            <option value="Baixa">Baixa</option>
            <option value="Media">Media</option>
            <option value="Alta">Alta</option>
         </select>
         <br>
                  <hr>
         Qual a sua Classe Etnia:<br>
         <select name="etnia">
            <option value="Nenhuma">Escolha Aqui</option>
            <option value="Branca">Branca</option>
            <option value="Preta">Preta</option>
            <option value="Parda">Parda</option>
            <option value="Amarela">Amarela</option>
         </select>
         <br>
                  <hr>
         Qual a sua Classe Nacionalidade:<br>
         <select name="nacionalidade">
            <option value="Nenhuma">Escolha Aqui</option>
            <option value="Brasileira">Brasileira</option>
            <option value="Estrangeira">Estrangeira</option>
         </select>
         <br>
                  <hr>
         Qual a sua Classe Formacao:<br>
         <select name="formacao">
            <option value="Nenhuma">Escolha Aqui</option>
            <option value="Fundamental">Ensino Fundamental</option>
            <option value="Medio">Ensino Medio</option>
            <option value="Superior">Ensino Superior Incompleto</option>
            <option value="Superior_Incompleto">Ensino Superior</option>
         </select>
         <br>
         <hr>
         Selecione Fielmente a Personalidade do Resultado :<br>
         <select name="personalidade">
            <option value="Nenhuma">Escolha Aqui</option>
            <option value="INTJ">INTJ</option>
            <option value="INTP">INTP</option>
            <option value="ENTJ">ENTJ</option>
            <option value="ENTP">ENTP</option>
            <option value="INFJ">INFJ</option>
            <option value="INFP">INFP</option>
            <option value="ENFJ">ENFJ</option>
            <option value="ENFP">ENFP</option>
            <option value="ISTJ">ISTJ</option>
            <option value="ISFJ">ISFJ</option>
            <option value="ESTJ">ESTJ</option>
            <option value="ESFJ">ESFJ</option>
            <option value="ISTP">ISTP</option>
            <option value="ISFP">ISFP</option>
            <option value="ESTP">ESTP</option>
            <option value="ESFP">ESFP</option>
         </select>

         <input type="submit" name="submit" >
      </form>


</div>


</html>