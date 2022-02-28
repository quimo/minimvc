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
            <h1>Posts</h1>
            <?php foreach ($data as $row): ?>
                <article>
                    <h2><?php echo $row->title ?></h2>
                    <div>
                        <?php echo $row->content ?><
                    </div>
                </article>
            <?php endforeach ?>
            <p><a href="home">Goto Home</a></p>
        </main>
        <footer>
            <?php include __DIR__ . '/parts/footer.tpl.php'; ?>
        </footer>
    </body>
</html>