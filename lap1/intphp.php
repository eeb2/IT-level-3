<?php
//طريقه تعريف متغير
$qty = 20;
//استخدام اداة الشرط if
if($qty == '20') {
 echo 'Equal';
}
//للجمع
$x = 100;
$q = 20;
$total = $x + $q;
echo $total; // 120
//لا ستخدام الboolean
$is_email_valid = false;
var_dump($is_email_valid);
$is_submitted = true;
var_dump($is_submitted);
//لاستخدام دم النصوص
$name = 'John';
echo 'Hello ' . $name;
// اسخدام المعملات الحسابيه
$r = 20;
$y = 20;
var_dump($r >= $y);
// bool(true)
var_dump($y >= $r); 
// bool(true)
// //استخدام ادواط الربط
$ex = true;
$pur = false;
$clear_cache = $ex || $pur;
var_dump($clear_cache);
// // استخدام if داخل if
$is_admin = true;
$can_approve = true;
if ($is_admin) {
echo 'Welcome, admin!';
if ($can_approve) {
echo 'Please approve the pending items';
}
}
// //استخدام for
$tal = 0;
for ($i = 1; $i <= 10; $i++) {
$tal += $i;
}
echo $tal;
//استخدام while
$kl = 0;
$num = 1;
while ($num <= 10) {
$kl += $num;
$num++;
}
echo $kl;