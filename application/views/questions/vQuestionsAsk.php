<div id="dvContent">
    <div class="spnTitle Page">Задать вопрос</div>

    <!--  Блок с информацией по каждому полю справа  -->
    <div class="dvRightHelp">

    </div>

    <!--  Главный блок с заданием вопроса  -->
    <div class="dvAsk">
        <form action="" method="POST" id="frmAskQuestion">
            <div>
                <h5>1 введите краткое содержание вашего вопроса </h5>
                <input type="text" class="inpColor" placeholder="Введите заголовок вопроса (не более 300 символов)" value="<?php if(!empty($question)){echo $question;}?>" name="questionTitle">
                <h5>2 опишите интересующий вас вопрос в полной мере </h5>
                <textarea class="inpColor" placeholder="Введите текст вопроса" name="questionFull"></textarea>

            </div>

            <h5>3 выберите категорию к которому максимально относиться ваш вопрос</h5>
            <div class="ask">
            <div class="dvQuestCategory">
                <a class="btnSilver">Наука</a>
                <a class="btnSilver">Компьютеры</a>
                <a class="btnSilver">Досуг</a>
                <a class="btnSilver">Наука</a>
                <a class="btnSilver">Компьютеры</a>
                <a class="btnSilver">Досуг</a>
                <a class="btnSilver">Наука</a>
                <a class="btnSilver">Компьютеры</a>
                <a class="btnSilver">Досуг</a>
            </div>

             <div class="dvQuestSubCategory">
                 <table class="tblCategory">
                     <tr>
                         <td><input type="checkbox">физика</td>
                         <td><input type="checkbox">dd</td>
                         <td><input type="checkbox">физика</td>
                         <td><input type="checkbox">физика</td>
                     </tr>

                     <tr>
                         <td><input type="checkbox">физика</td>
                         <td><input type="checkbox">физика</td>
                         <td><input type="checkbox">физика</td>
                         <td><input type="checkbox">физика</td>
                     </tr>
                 </table>
             </div>
                </div>
            <a class="btnColor"> Задать вопрос </a>
    
        </form>
    </div>


</div>