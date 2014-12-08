<!DOCTYPE html>
<!-- Данный файл является только примером вызова функии ABOLink -->
<html>  
    <head>
    
        <title>Пример установки скрипта ABOLink</title>
        
    </head>

    <body>
    
        <?php
        // Вызов файла функции ABOLink должен быть установлен перед вызовом самой функции
        // Папка ABOLink должна быть расположена в корне сайта
        // ABOLink - Руководство https://bit.ly/ABOLink

            include(dirname(__FILE__)."/ABOLink/ABOLink.php");
        ?>
        

        
        <h2>Ссылка ABO.UA</h2>
        
        <div id="block-1">
            <!-- Код вывода блока для ссылки
                 Вызов функции ABOLink с параметром 'ANCOR' -->
            <?php ABOLink('ANCOR'); ?>
        </div>

        
        
        <h2>Баннер ABO.UA</h2>
        
        <div id="block-2">
            <!-- Код вывода блока для баннера
                 Вызов функции ABOLink с параметром 'BANNER' -->
            <?php ABOLink('BANNER'); ?>
        </div>
       
    </body>
    
</html>
