<div id="dvContent">
    <div class="spnTitle Page">Тесты: тест создан</div>
    <?php
/*        if(!$user_auth) { echo 'Не зарегистрированный пользователь'; }
        else {
            if(!$post_set) { echo 'Не было передано никаких параметров'; }
        }
    */?>

    <div class="dvTstCreated">
        <div class="" style="text-align: center"><img src="/stfile/img/user/ok.png" alt="success">
            <div class="page-header">
                <h5>Тест создан! <small></small></h5>
            </div>
        </div>

        <div class="" style="text-align: center">Ссылка на ваш тест: <input type="text" value="http://edu.ka/tests/usertest/<?php echo $result; ?>"><br />
        <a class="btn btn-large btn-primary" href="http://edu.ka/tests/usertest/<?php echo $result; ?>"">Перейти к созданому тесту</a>
        <a class="btn btn-large" href="/tests/all">Посмотреть другие тесты</a>
        <br />
            <!--<div class="page-header">
                <h5>Нам интересно ваше мнение <small></small></h5>
            </div>
        <textarea rows="5" style="width: 440px; margin-top: 10px;">das</textarea><br />
            <input type="button" class="btn" value="Отправить">-->
        </div>
    </div>
</div>