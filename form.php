<form method="post">
<input type="text" name="title">
<input type="text" name="content">
<input type="submit">
</form>

<p><?= ("Title: {$_POST["title"]}")?></p>
<p><?= ("Content: {$_POST["content"]}")?></p>
