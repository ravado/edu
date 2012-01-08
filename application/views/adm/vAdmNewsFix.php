<input class="inpColor ReferName" type="text" id="inpNewsDel" placeholder="ID Новости">
<a class="btnSilver" name="btnNewsTitle">Показать новость</a><br />
<form action="/adm/news/fixnews" method="POST" name="frmNewsFix" style="display: none;">
    <input type="hidden" name="id">
    <input class="inpColor NewsTitle" type="text" name="title" id="inpNewsTitle" placeholder="Заголовок новости">
    <textarea id="txtNewsPre" name="text_pre"></textarea>
    <textarea id="txtNewsFull" name="text_full"></textarea>
    <input class="inpColor ReferName" type="text" name="refer_name" id="inpReferName" placeholder="Название источника">
    <input class="inpColor ReferLink" type="text" name="refer_link" id="inpReferLink" placeholder="Ссылка на источник">
    <a class="btnSilver News" id="btnNewsSubm">Изменить</a>
</form>