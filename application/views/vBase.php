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
            <a href="/"><img src="../../../stfile/img/logo.png" alt="logo"/></a>
            <nav>
                <ul>
                    <li><a href="/news">Новости</a></li>
                    <li><a href="">Тесты</a></li>
                    <li><a href="/search">Поиск</a></li>
                    <li><a href="/questions">Вопросы и Ответы</a></li>
                    <li><a href="#">Библиотека</a></li>
                    <li><a href="#">Магазин</a></li>
                    <li>
                        <div class="products">
                            <a href="#" id="silo_products">еще</a>
                            <div id="menu_more">
                                <div class="accent"></div>
                                <ul>
                                    <li class="evernote"><a href="/evernote/"><span class="evn_prod"> Пункт 1</span> некое описание </a></li>
                                    <li class="skitch"><a href="/skitch/"><span class="evn_prod">Пункт 2</span> некое описание</a></li>
                                    <li class="hello"><a href="/hello/"><span class="evn_prod">Пункт 3</span> Rнекое описание</a></li>
                                    <li class="food"><a href="/food/"><span class="evn_prod">Пункт 4</span> некое описание</a></li>
                                    <li class="clearly"><a href="/clearly/"><span class="evn_prod">Пункт 5</span>  некое описание</a></li>

                                </ul>
                            </div><!-- /mega_drop -->
                        </div>


                    </li>
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
        <div class="hint error"></div>
        <div class="hint info"></div>
        <div class="hint warning"></div>
        <div class="hint success"></div>
</body>
</html>