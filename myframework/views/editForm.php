

<form action="/crud/editList" method="post">
    <input name="name" type="text" value="<? echo $data["name"]?>"/><br>
    <input name="id" type="hidden" value="<?echo $data["id"]?>" /><br>
    <input type="submit">
</form>