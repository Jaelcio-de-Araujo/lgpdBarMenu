<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fundo.css"/>
    <title>BarLGPD Code</title>
</head>

<body>
<?php
if(@$_POST['env'])
    {
        $barra    = filter_input(INPUT_POST,'barra',FILTER_SANITIZE_NUMBER_INT);
        $text     = filter_input(INPUT_POST,'text',FILTER_SANITIZE_SPECIAL_CHARS);
        $direcao  = filter_input(INPUT_POST,'direcao',FILTER_SANITIZE_SPECIAL_CHARS);
        $bot      = filter_input(INPUT_POST,'bot',FILTER_SANITIZE_SPECIAL_CHARS);
        $barracor = filter_input(INPUT_POST,'barracor',FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $msg = "Não há código para ser copiado.";
    }
?>
<!-- Inicio do código -->
<div class="container">
    <h1>Código gerado:</h1>
<pre>
<code class="php-template">
&lt;style&gt;
    .box-cookies.hide {display: none !important;}

    .box-cookies {
    position: fixed;
    background: <?php echo "{$barracor}"; ?>;
    width: 100%;
    z-index: 998;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height:<?php echo "{$barra}px"; ?>;
    }
    .box-cookies .msg-cookies,
    .box-cookies .btn-cookies 
    {
    text-align: center;
    padding: 25px;
    color: <?php echo "{$text}"; ?>;
    font-size: 18px;
    }
    .box-cookies .btn-cookies
    {
    background: <?php echo "{$bot}"; ?>;
    cursor: pointer;
    align-self: normal;
    border: none;
    }
    @media screen and (max-width: 600px) {
    .box-cookies
    {
    flex-direction: column;
    }
    } 

    &lt;/style&gt;
    &lt;div class="box-cookies hide"&gt;
    &lt;p class="msg-cookies"&gt;Usamos cookies para garantir que você obtenha a melhor 
    experiência, confira nossa 
    &lt;a href="lgpd.php" style="color: #ffffff; text-decoration: underline;">
    política de privacidade&lt;/a&gt;&lt;/p&gt;
    &lt;button class="btn-cookies"&gt;Aceitar!&lt;/button&gt;
    &lt;/div>
    &lt;script>
      $(".btn-menu").click(function(){
        $(".menu").show();
      });
      $(".btn-close").click(function(){
        $(".menu").hide();
      });
    &lt;/script&gt;

    &lt;script&gt;
  (() => {
    if (!localStorage.pureJavaScriptCookies) {
      document.querySelector(".box-cookies").classList.remove('hide');
    }
    const acceptCookies = () => {
      document.querySelector(".box-cookies").classList.add('hide');
      localStorage.setItem("pureJavaScriptCookies", "accept");
    };
    const btnCookies = document.querySelector(".btn-cookies");
    btnCookies.addEventListener('click', acceptCookies);
  })();
&lt;/script&gt;
        </code>
    </pre>
</div>
<!-- Final do código -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>

</html>

