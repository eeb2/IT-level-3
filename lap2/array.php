<?php
$array = array("adeeb", "ibra");
// داله الادخال الى المصفوفه
   array_push($array, "moh", "ali");
   print_r($array);
// الناتج: Array ( [0] => adeeb [1] => ibra [2] => moh [3] => ali )
$array = array("adeeb", "ibra", "ali");
//قمنا باستخدام الداله array_pop لتحديد العصر الخير في المصفوفه اسندناه الى المتغير المقابل ثم قمنا بطباعته
   $last = array_pop($array);
   echo $last;
// الناتج: ali
//  هنابعد ان قمنا بحذف العنصر علي يبقى لنا  الناتج: Array ( [0] => adeeb [1] => ibra )  
   print_r($array); 
//الناتج : Array ( [2] => Array ( [0] => Programming [1] => Web development ) [1] => 999 [0] => PHP Awesome )
$book = [
   'PHP Awesome',
      999,
      ['Programming', 'Web development'],
      ];
   //استخدام الداله array_reverse تقوم بعكس المصفوفه
      $preserved = array_reverse($book, true);
      print_r($preserved);
      



