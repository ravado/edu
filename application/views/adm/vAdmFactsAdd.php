<form action="" id="frmFacts">
<select id="fctMonth" name="fctMonth" class="span2">
    <option value="01">Январь</option>
    <option value="02">Февраль</option>
    <option value="03">Март</option>
    <option value="04">Апрель</option>
    <option value="05">Май</option>
    <option value="06">Июнь</option>
    <option value="07">Июль</option>
    <option value="08">Август</option>
    <option value="09">Сентябрь</option>
    <option value="10">Октябрь</option>
    <option value="11">Ноябрь</option>
    <option value="12">Декабрь</option>
</select>

<select class="span1" id="fctDay" name="fctDay">
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    <option value="05">5</option>
    <option value="06">6</option>
    <option value="07">7</option>
    <option value="08">8</option>
    <option value="09">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>

<select class="pull-right" id="fctKind" name="fctKind">
    <option value="event">Памятные события этого дня</option>
    <option value="born">В этот день родились</option>
    <option value="folk">Народный фольклор</option>
</select>

    <textarea rows="2" style="width: 580px; resize: vertical;" id="txtFact">asd</textarea>
    <a class="btn btn-large  " style="width: 76px;" id="btnAddFact"> Добавить</a>

        <table id="tblAddedFacts" style="text-align: left;" class="table ">
            <thead>
                <tr>
                    <th style="width: 625px;">Текст факта</th>
                    <th style="width: 50px;"></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </form>

        <a class="btn btn-primary btn-large" id="btnWriteFacts">Записать эти факты</a>

