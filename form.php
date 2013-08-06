<form method="post">
<input type="text" name="title">
<input type="text" name="content">
<input type="submit">
</form>

<p><?= print("Title: {$_POST["title"]}")?></p>
<p><?= print("Content: {$_POST["content"]}")?></p>
