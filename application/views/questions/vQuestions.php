<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы</div>

    <!-- Блок меню слева   -->
    <div class="dvMenu">
        <div class="dvUser shadowBlock">
            <h4 class="lenta">Профиль</h4>
            <form action="" name="frmUserAuth">
                <a href="#" class="btnColor">Авторизироваться</a>
            </form>
        </div>
        <div class="dvCategory shadowBlock">
            <h4 class="lenta">Категории</h4>
            <div class="catTitle">
                <a href="" class="">Наука</a><br />
                <div>
                    <a href="" class="greenCat">физика</a>
                    <a href="" class="greenCat">математика</a>
                    <a href="" class="greenCat">информатика</a>
                    <a href="" class="catMore"><img alt="" src="../../../stfile/img/questions/right-icon.png"></a>
                </div>
            </div>
            <div class="catTitle">
                <a href="" class="">Досуг</a><br />
                <div>
                    <a href="" class="greenCat">дизайн</a>
                    <a href="" class="greenCat">кино</a>
                    <a href="" class="greenCat">хобби</a>
                    <a href="" class="catMore"><img alt="" src="../../../stfile/img/questions/right-icon.png"></a>
                </div>
            </div>
            <div class="catTitle">
                <a href="" class="">Компьютеры</a><br />
                <div>
                    <a href="" class="greenCat">игры</a>
                    <a href="" class="greenCat">windows</a>
                    <a href="" class="greenCat">железо</a>
                    <a href="" class="catMore"><img alt="" src="../../../stfile/img/questions/right-icon.png"></a>
                </div>
            </div>
        </div>
    </div>

    <!--  Блок вопросов  -->
    <div class="dvQuestions">

        <!--    Блок с поиском    -->
        <div class="dvSearch">
            <form action="/questions/ask" class="frmQuestion" name="frmQuestion" method="POST" onsubmit="$('[name=btnSearch]').click(); return false;">
                <input type="text" name="question" maxlength="300" id="search" placeholder="Введите свой вопрос" required>
                <input type="button" name="btnSearch" value="Найти" class="submit">
                <input type="button" name="btnAsk" value="Спросить" onclick="form.submit()" class="submit">
            </form>
        </div>

        <div id="searchResult"></div>

        <!--   Блок с топом вопросов     -->
        <div class="dvTop shadowBlock">
            <table cellspacing="0" width="100%">
                <tr class="lenta">
                    <th class="tblTitle lenta">Самые популярные</th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/user-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/comment-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/clock-icon.png"></th>
                </tr>
                <tr class="border">
                    <td><a href="">Компьютерная акустика в пределах 2000</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat" >Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">ravado</a></td>
                    <td class="answers">12</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">где в Тольятти можно приобрести сибирского хаски?</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">includ</a></td>
                    <td class="answers">2</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">FL studioКак сделать чтоб в пиано ролл ноты растягивались?</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#" class="">bobuk</a></td>
                    <td class="answers">1</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">какая прошивка имеет efs на samsung galaxy mini</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">122</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">як перекласти українською никто мне не указ</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Геометрия</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">10</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">Работы и исследования,посвященные театру эпохи романтизма</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">121</td>
                    <td class="time">12:32</td>
                </tr>
                 <tr class="border">
                    <td><a href="">Компьютерная акустика в пределах 2000</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                     <td class="answers">82</td>
                     <td class="time">12:32</td>
                </tr>
            </table>
        </div>

        <!--   Блок с последними задаными вопросами     -->
        <div class="dvLastQuestions shadowBlock">
            <table cellspacing="0px" width="100%">

                <tr class="lenta">
                    <th class="tblTitle lenta">Новые</th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/user-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/comment-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/clock-icon.png"></th>
                </tr>
                <tr class="border">
                    <td><a href="">Компьютерная акустика в пределах 2000</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">ravado</a></td>
                    <td class="answers">12</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">где в Тольятти можно приобрести сибирского хаски?</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">includ</a></td>
                    <td class="answers">2</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">FL studioКак сделать чтоб в пиано ролл ноты растягивались?</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">bobuk</a></td>
                    <td class="answers">1</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">какая прошивка имеет efs на samsung galaxy mini</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">122</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">як перекласти українською никто мне не указ</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Геометрия</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">10</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">Работы и исследования,посвященные театру эпохи романтизма</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">121</td>
                    <td class="time">12:32</td>
                </tr>
                 <tr class="border">
                    <td><a href="">Компьютерная акустика в пределах 2000</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                     <td class="answers">82</td>
                     <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">Компьютерная акустика в пределах 2000</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">ravado</a></td>
                    <td class="answers">12</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">где в Тольятти можно приобрести сибирского хаски?</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">includ</a></td>
                    <td class="answers">2</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">FL studioКак сделать чтоб в пиано ролл ноты растягивались?</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">bobuk</a></td>
                    <td class="answers">1</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">какая прошивка имеет efs на samsung galaxy mini</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">122</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">як перекласти українською никто мне не указ</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Геометрия</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">10</td>
                    <td class="time">12:32</td>
                </tr>
                <tr class="border">
                    <td><a href="">Работы и исследования,посвященные театру эпохи романтизма</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                    <td class="answers">121</td>
                    <td class="time">12:32</td>
                </tr>
                 <tr class="border">
                    <td><a href="">Компьютерная акустика в пределах 2000</a>
                        <span class="spnTags"> <a href="#" class="greenCat">Физика</a><a href="#" class="greenCat">Алгоритмы</a> </span>
                    </td>
                    <td class="username"><a href="#">imho</a></td>
                     <td class="answers">82</td>
                     <td class="time">12:32</td>
                </tr>
            </table>

        </div>
    </div>
</div>