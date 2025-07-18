<?php
// Start session before any output
session_start();

// Include necessary files
require_once 'admin/config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
      *{
    box-sizing:border-box;
   /* outline:1px solid ;*/
  }
  body{
  background: #ffffff;
  background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
      height: 100%;
          margin: 0;
          background-repeat: no-repeat;
          background-attachment: fixed;
    
  }
  
  .wrapper-1{
    width:100%;
    height:100vh;
    display: flex;
  flex-direction: column;
  }
  .wrapper-2{
    padding :30px;
    text-align:center;
  }
  h1{
      font-family: 'Kaushan Script', cursive;
    font-size:4em;
    letter-spacing:3px;
    color:#01295c ;
    margin:0;
    margin-bottom:20px;
  }
  .wrapper-2 p{
    margin:0;
    font-size:1.3em;
    color:#aaa;
    font-family: 'Source Sans Pro', sans-serif;
    letter-spacing:1px;
  }
  .go-home{
    color:#fff;
    background:#01295c;
    border:none;
    padding:10px 50px;
    margin:30px 0;
    border-radius:30px;
    text-transform:capitalize;
    box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
  }
  .footer-like{
    margin-top: auto; 
    background:#D7E6FE;
    padding:6px;
    text-align:center;
  }
  .footer-like p{
    margin:0;
    padding:4px;
    color:#01295c;
    font-family: 'Source Sans Pro', sans-serif;
    letter-spacing:1px;
  }
  .footer-like p a{
    text-decoration:none;
    color:#01295c;
    font-weight:600;
  }
  
  @media (min-width:360px){
    h1{
      font-size:4.5em;
    }
    .go-home{
      margin-bottom:20px;
    }
  }
  
  @media (min-width:600px){
    .content{
    max-width:1000px;
    margin:0 auto;
  }
    .wrapper-1{
    height: initial;
    max-width:620px;
    margin:0 auto;
    margin-top:50px;
    box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
  }
    
  }
    </style>
    
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PSJPGFP3');</script>
<!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSJPGFP3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class=content>
      <div class="wrapper-1">
        <div class="wrapper-2">
          <h1>Thank you !</h1>
          <p>Thanks for enquiring.  </p>
          <p>you should receive a confirmation email soon  </p>
          <a href="https://OptionPayindia.com/live-demo/"><button class="go-home">
          go home </button></a>
        </div>
    </div>
</div>
</body>
</html>

