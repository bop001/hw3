<?php
 	$name =  trim($_POST['username']); 
  	$pass1 =  trim($_POST['password1']); 
  	$pass2 =  trim($_POST['password2']); 
  	$email = trim($_POST['email']);
  	$submit = $_POST['submit'];

  if (empty($name) && empty($pass1) && empty($pass2) && empty($email) && isset($submit)) {
        echo '<div class="massage-error">"Введите свои данные"</div>';
     }
  if(empty($_POST['username'])) exit(); 
  if(empty($_POST['username'])) exit('<div class="massage-error">Поле "Логин" не заполнено</div'); 
    if(empty($_POST['password1'])) exit('<div class="massage-error">Одно из полей "Пароль" не заполнено </div>'); 
    if(empty($_POST['password2'])) exit('<div class="massage-error">Одно из полей "Пароль" не заполнено </div>');
    if($_POST['password1'] != $_POST['password2']) exit('<div class="massage-error">Пароли не совпадают</div>'); 

    if(!empty($_POST['email'])){ 
      if(!preg_match("|^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])) { 
      exit('<div class="massage-error">Поле "E-mail" должно соответствовать формату somebody@somewhere.ru</div>'); 
      } 
    }
   if (!empty($name) && !empty($pass1) && !empty($pass2) && !empty($email)) {
       echo '<div class="massage">"Поздравляю вы зарегистрированы"</div>';
     }  
  $filename = "users.csv";
  $arr = file($filename); 
  
  foreach($arr as $line){
  $data = explode("::",$line);  
  $temp[] = $data[0]; 
  } 

  if(in_array($_POST['username'], $temp)) { 
    exit("Данное имя уже зарегистрировано, пожалуйста, выберите другое"); 
  } 
  $fd = fopen($filename, "a"); 
  if(!$fd) exit("Ошибка при открытии файла данных"); 
  $str = $_POST['username']."::". 
         $_POST['password1']."::". 
         $_POST['password2']."::". 
         $_POST['email']."::". 
         $_POST['url']."\r\n"; 
  fwrite($fd,$str); 
  fclose($fd); 
  
?>	
