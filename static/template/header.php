<? if($verification == 1){}else{Header("Location: https://axius.design/404"); die();} ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<? echo $description; ?>">
  <meta name="author" content="Chaottiic">
  <title><? echo $name; ?></title>

  <link rel="shortcut icon" href="<? echo $logo ?>" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <link rel="stylesheet" href="static/css/bootstrap.css" type="text/css">
    <link href="static/fonts/stylesheet.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="static/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="static/css/owl.theme.default.css" type="text/css">

    <link rel="stylesheet" href="static/css/style.css" type="text/css">
    <link rel="stylesheet" href="static/css/responsive.css" type="text/css">

  <meta name="twitter:card" value="summary">
  <meta name="twitter:title" content="<? echo $name; ?>">
  <meta name="twitter:description" content="<? echo $description; ?>">
  <meta name="twitter:image" content="<? echo $logo; ?>">

  <meta property="og:site_name" value="<? echo $name; ?>">
  <meta property="og:title" content="<? echo $name; ?>" />
  <meta property="og:url" content="<? echo $domain; ?>" />
  <meta property="og:description" content="<? echo $description; ?>">
  <meta property="og:image" content="<? echo $logo; ?>" />
  <meta name="theme-color" content="<? echo $color; ?>">
  <meta name="msapplication-TileColor" content="<? echo $color; ?>">
  
  
  <style>
       ::-webkit-scrollbar {
          width: 7px;
      }

       ::-webkit-scrollbar-track {
          -webkit-border-radius: 10px;
          border-radius: 10px;
      }

       ::-webkit-scrollbar-thumb {
          -webkit-border-radius: 10px;
          border-radius: 0px;
          background: #ffa809;
          transition: 0.3s;
      }

       ::-webkit-scrollbar-thumb:hover {
          -webkit-border-radius: 12px;
          border-radius: 0px;
          background: #ffa809;
      }

       ::-webkit-scrollbar-thumb:window-inactive {
          background: #ffa809;
      }

      ::-moz-selection {
          color: white;
          background: #1CACFF;
      }

      ::selection {
          color: white;
          background: #1CACFF;
      }
  </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg transparent-nav fixed-top" id="main-nav">
      <div class="container">
          <a class="navbar-brand" href="<? echo $domain; ?>"><img src="<? echo $logo; ?>" alt="" width=8% class="img-fluid logo-main">
          <img src="<? echo $logo; ?>" alt="" width=8% class="img-fluid logo-white">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="navbar-collapse">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link page-scroll" href="<? echo $domain ?>">Home <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link page-scroll" href="#section-about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link page-scroll" href="#section-portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link page-scroll" href="https://discord.gg/X7gvNWs">Pricing</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link page-scroll" href="#section-partners">Partners</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link page-scroll" href="https://discord.gg/uzPQBx5">Discord</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
