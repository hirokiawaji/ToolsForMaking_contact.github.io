<!DOCTYPE html>

<html lang="ja" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Tools For Making: Contact</title>
      <link rel="stylesheet" href="txt.css">
    </head>

<body>
  <div class="header">
    <div class="content">
      <h1 class="icon">Tools For Making</h1>
      <ul class="header-list">
        <li><a class="home" href="https://hirokiawaji.github.io/ToolsForMaking.github.io/">home</a></li>
        <li><a class="policy" href="https://hirokiawaji.github.io/ToolsForMaking_about.github.io/">about</a></li>
        <li><a class="contact" href="http://xs540036.xsrv.jp/">contact</a></li>

      </ul>
    </div>
  </div>
  <div class="main">
<?php
$myfile = fopen("hoge.txt", "a")  //fileを上書きモードで開く
?>

<?php fwrite($myfile, $_POST['name']. "\n");
fwrite($myfile, $_POST['body']. "\n");
echo "送信されました。ご協力ありがとうございました。";
 ?>

<?php
fclose($myfile);
?>
</div>
<div class="footer">
  <div class="content">
    <ul class="header-list">
      <li><a class="home" href="https://hirokiawaji.github.io/ToolsForMaking.github.io/">home</a></li>
      <li><a class="policy" href="https://hirokiawaji.github.io/ToolsForMaking_about.github.io/">about</a></li>
      <li><a class="contact" href="http://xs540036.xsrv.jp/">contact</a></li>
    </ul>
  </div>
</div>

</body>
</html>
