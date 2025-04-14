<?php echo $_POST["confirm"]; ?>
if ( !array_key_exists(‘comment’, $_POST){

  print “コメントは必須項目です。”;

}
if ( str_len($_POST[‘comment’]) > 255 ) {

  print “コメントは２５５文字以下で入力してください。”;

}
 
