<!DOCTYPE html>
<html lang="en">
    <style>
        h1 {
  color:black;
  
  text-transform: uppercase;
  font-size: 100px;
  font-weight: 700;
  letter-spacing: 0.015em;
}
  h1::after {
    content: '';
    width: 200px;
    display: block;
    background: #ffee58;
    height: 6px;
    margin: 30px auto;
    line-height: 1.1;
  }
  .btn {
    display: inline-block;
    padding: 15px 30px;
    border: 2px solid #fff;
    text-transform: uppercase;
    letter-spacing: 0.015em;
    font-size: 18px;
    font-weight: 600;
    line-height: 1;
    color: #fff;
    background-color: black;
    text-decoration: none;
    -webkit-transition: all 0.4s;
       -moz-transition: all 0.4s;
         -o-transition: all 0.4s;
            transition: all 0.4s;
  }
  .btn:hover {
    color: #000;
    border-color: #fff;
    background-color: #607d8b;
  }
  h2 {
    color: #ffd600;
    text-transform: uppercase;
    font-size: 35px;
    font-weight: 700;
    letter-spacing: 0.015em;
  }
  
  @media only screen and (max-width: 1000px) {
    h1 {
      font-size: 70px;
    }
  }
  
  @media only screen and (max-width: 800px) {
    h1 {
      font-size: 48px;
    }
    h1::after {
      height: 8px;
    }
  }
  @media only screen and (max-width: 550px) {
    .btn {
    display: inline-block;
    padding: 5px 15px;
    border: 2px solid #fff;
    text-transform: uppercase;
    letter-spacing: 0.009em;
    font-size: 13px;
    font-weight: 400;
    line-height: 1;
    color: #fff;
    text-decoration: none;
    -webkit-transition: all 0.4s;
       -moz-transition: all 0.4s;
         -o-transition: all 0.4s;
            transition: all 0.4s;
    }
  }
  
  @media only screen and (max-width: 430px) {
    .btn {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid #fff;
    text-transform: uppercase;
    letter-spacing: 0.005em;
    font-size: 10px;
    font-weight: 400;
    line-height: 1;
    color: #fff;
    text-decoration: none;
    -webkit-transition: all 0.4s;
       -moz-transition: all 0.4s;
         -o-transition: all 0.4s;
            transition: all 0.4s;
    }
  }
  
  @media only screen and (max-width: 568px) {
    .intro {
      padding: 0 10px;
    }
    h1 {
      font-size: 30px;
    }
    h1::after {
      height: 6px;
    }
    p {
      font-size: 18px;
    }
    .btn {
      font-size: 16px;
    }
  }
  
  @media only screen and (max-width: 320px) {
    h1 {
      font-size: 28px;
    }
    h1::after {
      height: 4px;
    }
  }
    </style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>| Online Quiz System |</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style type="text/css">
        
            body {
                width: 100%;
                background: url(img/doctype-hi-res.jpg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <center>
            <div class="intro"  >
                <h1 > online Examination </h1>
                <a href="login.php" class="btn"> Login </a> &emsp;
                <a href="register.php" class="btn"> Register </a><br>

                
            </div>
        </center>
    </body>
</html>