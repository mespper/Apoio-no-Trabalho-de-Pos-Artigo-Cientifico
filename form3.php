<!DOCTYPE html>
<html>
   <head>
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
      </style>
   </head>
   <body>
      <form method="post" action="Roboto_Regular_Com_Registro.php" >
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
   </body>
</html>
