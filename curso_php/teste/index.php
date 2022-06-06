

<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <?php

         $caminhoDoXml = "xml.xml";
         $xml = simplexml_load_file($caminhoDoXml) or die ("Não abriu");

         print_r($xml);
        
      ?>
   </body>
</html>

