<?= 'Страница №2<br><br>' ?>
<?= 'Ваше имя: ' ?>
<? if(isset($_COOKIE['name'])): ?>
        <br/>
		<? echo $_COOKIE['name']; ?>
<? endif; ?>
<a href="/">На главную страницу</a>