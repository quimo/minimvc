<!doctype html>
<html lang="it">
    <head>
        <?php include __DIR__ . '/parts/head.tpl.php'; ?>
    </head>
    <body>
        <header>
            <?php include __DIR__ . '/parts/header.tpl.php'; ?>
        </header>
        <main>
            <form method="post">
                <input type="email" name="email" id="email">
                <input type="password" name="password" id="password">
                <input type="submit" name="submit" value="login">
            </form>
        </main>
        <footer>
            <?php include __DIR__ . '/parts/footer.tpl.php'; ?>
        </footer>
    </body>
</html>