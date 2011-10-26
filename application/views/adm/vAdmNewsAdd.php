<form action="/adm/news/submit" method="POST" name="formNews">
    <input class="inpColor NewsTitle" type="text" name="title" placeholder="Заголовок новости">
    <textarea id="txtNewsPre" name="text_pre"></textarea>
    <textarea id="txtNewsFull" name="text_full"></textarea>
    <input class="inpColor ReferName" type="text" name="refer_name" placeholder="Название источника">
    <input class="inpColor ReferLink" type="text" name="refer_link" placeholder="Ссылка на источник">
    <a class="btnSilver News" onclick="addNewNews()">Добавить новость</a>
</form>