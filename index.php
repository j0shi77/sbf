<html>
<head>
<title>Sebuf | Prolog</title>
<link rel="stylesheet" href="assets/css/sebuf.css">
<link rel="icon" href="https://reactnative.dev/img/header_logo.svg">
</head>
<body>
  <div class="container_main">
    <div id="main_tittle">
      <h1 class="main_title">SEBUF</h1>
      <div id="tag_line"><h5>second but first</h5></div>
    </div>
    <div id="astronaut" class="move_right section">
      <span id="astronaut_title" class="item">&lt;Outwear&gt;</span>
      <img id="astronaut_img" class="astronaut rotate" src="assets/img/outwearfix.png" alt="astronaut">
    </div>
    <div id="planet" class="section">
      <img class="planet" src="assets/img/t-shirt.png" alt="planet">
      <span id="planet_title" class="item">&lt;T-Shirt&gt;</span>

    </div>
    <div id="ship" class="move_right_bottom section">
      <span id="ship_title" class="item">&lt;Pants&gt;</span>
      <img class="ship" src="assets/img/shortpantsfix.png" alt="ship">
    </div>

    <div id="container_desc" class="container-second">

      <div id="title" class="container-title"></div>
      <div id="info" class="container-body"></div>
      <div class="container-footer">
        <span id="back_to_sub"><i class="fas fa-arrow-left"></i>back</span>
      </div>

    </div>

    <!-- Audios -->

    <audio id="bg_music" class="audio" controls loop>
  <source src="https://drive.google.com/uc?export=view&id=11Sfa2RLflywdSG6qClLFdT3Rgh9zlpGh" type="audio/mp3">
Your browser does not support the audio element.
</audio>

    <audio id="beep" class="audio" controls>
  <source src="https://drive.google.com/uc?export=view&id=12E2AgA1Ejn4taqY3y4_nDzuzDF9hXsAY" type="audio/mp3">
Your browser does not support the audio element.
</audio>

    <audio id="beep_desc" class="audio" controls>
  <source src="https://drive.google.com/uc?export=view&id=1X9qGWwiNdl2RYejZdRerJJVghCoLdekk" type="audio/mp3">
Your browser does not support the audio element.
</audio>

  </div>

</body>
<script src="assets/js/sebuf.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});

document.addEventListener('contextmenu', event => event.preventDefault());

</script>
</html>