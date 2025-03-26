<?php
$mass=['25','58.24','devil','power','small','big','Liza'];
$terret='25';
$retter=array_search($terret,$mass);
if ($retter==true) {
    print('Элемент '.$terret.' найден'.' c номером '.$retter);
} else {
    print('Элемент '.$terret.' не найден');
}
?>
