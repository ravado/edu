<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title><?=$title;?></title>
  <link rel="shortcut icon" href="../../stfile/img/favicon.ico" type="image/x-icon" />
  <?php foreach($styles as $file => $type){echo HTML::style($file, array('media' => $type)), "\n";} ?>
  <?php foreach($scripts as $file){echo HTML::script($file, NULL, TRUE),"\n";} ?>
</head>
<body>
    <div id="root">
        <header>
            <a href="/"><img src="../../stfile/img/logo.png" /></a>
            <nav>
                <ul>
                    <li><a href="">Новости</a></li>
                    <li><a href="">Тесты</a></li>
                    <li><a href="#">Вопросы&Ответы</a></li>
                    <li><a href="#">Рефераты</a></li>
                    <li><a href="#">Магазин</a></li>
                </ul>
            </nav>
        </header>
        <?=$content;?>
    </div>
    <footer>
        <div>
            <a href="">О Сайте</a>
            <a href="">Поддержка</a>
            <a href="">Контакты</a>
            <a href="/adm">АдминЦентр</a>
            <br/><br/>Copyright © 2011 EduName Corporation. All rights reserved.
        </div>
    </footer>
</body>
</html>