/*
 * Questo file è pensato nello specifico sulla base della mia scuola, ovviamente se cambia la scuola cambia il codice
 *
 * In caso vuoi contattarmi per il codice ti prego di scrivermi qui:
 *     Lorenzo Antonio Di Cocco <dicoccolorenzo0@gmail.com>
 *
 * Se sei della mia stessa scuola e sei interessato al codice specifico per la tua scuola scrivimi pure sull'email ti inviero tutto il codice.
 */
<?
$page = file_get_contents(/* Url della tua scuola (comunicazioni organizzative) */);
if (strpos($page, /* La tua classe */) !== false){
    $risposta1 = 'Risposta vera';
} else {
    $risposta1 = 'Riposta falsa';
}
$pages = file_get_contents(/* Url della tua scuola (avvisi e archivio) */);
$page1 = explode('row0', $pages);
$page3 = explode('<a href="', $page1[1]);
$page4 = explode('">', $page3[2]);
$link = $page4[0];
$nov = $page4[1];
?>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap');
            .container{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 90%;
                height: 120px;
                background: #fd714b;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                display: flex;
                margin: auto;
                align-items:center;
                justify-content:center;
                color: white;
                border-radius: 5px;
            }
            .cont1{
                box-sizing: border-box;
                position: absolute;
                width: 80%;
                height: 34px;
                left: 50%;
                transform: translateX(-50%);
                top: 19px;

                border: 2px solid #FFFFFF;
                border-radius: 34.5px;
                padding: 1px;
                text-align: center;
                animation: mymove 5s forwards;
            }
            .cont2{

                box-sizing: border-box;

                position: absolute;
                width: 80%;
                height: 34px;
                left: 50%;
                transform: translateX(-50%);
                top: 67px;

                border: 2px solid #FFFFFF;
                border-radius: 34.5px;
                padding: 1px;
                text-align: center;
                animation: mymove2 5s forwards;
            }
            .link{
                position: relative;
                top: 5px;
                color: white;
                text-decoration: none;
                font-size: 11px;
                animation: mymove3 5s forwards;
            }
            .text{
                position: relative;
                top: 5px;
                font-size: 11px;
                animation: mymove4 5s forwards;
            }
            @keyframes mymove {
                0%   {
                    width: 34px;
                }
                50% {
                    width: 80%;
                }
            }
            @keyframes mymove2 {
                0%   {
                    width: 34px;
                }
                50% {
                    width: 80%;
                }
            }
            @keyframes mymove3 {
                0%   {
                    opacity: 0;
                }
                50%   {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes mymove4 {
                0%   {
                    opacity: 0;
                }
                50%   {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
        </style>
    </head>
    <body>
        <div class="black"></div>
        <div class="container">
            <div class="cont1"><a class="text"><?php echo $risposta1 ?></a></div>
            <div class="cont2"><a href="<?php echo $link?>" class="link"> <?php echo $nov ?> </a> </div>
        </div>
    </body>
</html>
