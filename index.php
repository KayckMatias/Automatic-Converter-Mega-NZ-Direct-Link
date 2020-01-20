<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mega.nz Converter</title>
</head>

<body class="red lighter-3">
    <h3 class="white-text center">Mega.nz Converter</h3>
    <h6 class="center white-text">Atenção: Esse script não funciona em localhost.</h6>
    <div class="container center white container" style="margin-top:2%;">
        <div class="row center" style="padding:5%;">
          <div class="center col s12" style="margin-bottom:20px;">
            <input id="mega_url" type="text">
            <label for="mega_url">Link para Converter</label>
            <br>
            <a style="margin-top:10px;" id="btn_convert" onclick="convertLink()" class="waves-effect waves-light btn green">Converter</a>
          </div>
          <div class="loading center hide" id="div_loading" style="margin-top:20px;">
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
            <div id="div_convert" class="center col s12 hide">
              <input id="mega_url_converted" type="text" readonly value="Lorem Ipsum2">
              <label for="mega_url_converted">Link Convertido</label>
              <br>
              <a style="margin-top:10px;" onclick="copyText()" class="waves-effect waves-light btn red">Copiar</a>
            </div>
        </div>
    </div>

    <h6 class="center white-text">Made With &hearts; by LordzSpectron</h6>

     <!-- Jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Compiled and minified Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	  <!-- Compiled and minified Materialize JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>
	
</body>
</html>