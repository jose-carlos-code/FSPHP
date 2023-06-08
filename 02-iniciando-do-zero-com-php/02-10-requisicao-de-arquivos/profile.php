<article style="
    padding:5px 20px;
    background-color:#eeeeee;
    border-radius:4px;
"> 

<h1><?= $profile->nome; ?> </h1>
<p> 
trabalha na <?= $profile->company; ?><br>
<a title="enviar E-MAIL: " href="mailto:<?= $profile->email;?>"> Enviar E-MAIL</a>



</p>
</article>