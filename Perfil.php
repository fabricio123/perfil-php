<html>

<body>

<?php
   $v1 = array(

      'img' => 'https://www.grancursosonline.com.br/upload/projeto/thumbnail/ifbaiano-instituto-federal-de-educacao-ciencia-e-tecnologia-baiano.png?1486039037',

      'nome' => 'ifbaiano',

      'cidade' => 'gbi',

      'curso' => 'informatica',

      'alunos' => array('joao','maria','pedro'),

      'disciplina' => 'programaçao de sistemas web',

      'local' => 'ifbaiano',

      'ano' => 2020

   );

   echo('<img src=' . $v1['img'] .'>');
   echo('<br>');
 print_r($v1);


   echo('<br>');
  


?>
</body>

</html>
