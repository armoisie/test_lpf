<nav> 
    <form action="/" method ="get">
        <select id="lang" name="lang">
            <option value="fr" <?= (isset($_GET['lang']) && $_GET['lang'] == 'fr')?"selected":"" ?>>français</option>
            <option value="en" <?= (isset($_GET['lang']) && $_GET['lang'] == 'en')?"selected":"" ?>>english</option>
            <option value="es" <?= (isset($_GET['lang']) && $_GET['lang'] == 'es')?"selected":"" ?>>español</option>
        </select>
    </form>
</nav>
<main>