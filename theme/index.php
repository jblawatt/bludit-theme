<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <?php echo Theme::metaTags("title"); ?>
    <?php echo Theme::metaTags("description"); ?>
    <?php echo Theme::css("css/bs.css"); ?>
    <?php echo Theme::css("css/styles.css"); ?>
    <?php /* echo Theme::favicon("favicon.png"); */ ?>

    <?php echo Theme::plugins("siteHead"); ?>

    <meta name="generator" content="Bludit" />
</head>

<body>
    <?php echo Theme::plugins("siteBodyBegin"); ?>
    <header class="container">
        <div class="row">
            <div class="col text-center">
                <h1><?php echo $site->title(); ?></h1>
                <div><?php echo $site->slogan(); ?></div>
            </div>
            <div class="row">
                <div class="col">
                    <nav class="nav justify-content-center mt-4 mb-3">
                        <a href="/" class="nav-link">Startseite</a>
                        <a href="/about" class="nav-link">About</a>
                    </nav>
                </div>
            </div>
    </header>
    <main class="container">
        <?php if ($WHERE_AM_I == "home") : ?>
            <div class="row">
                <div class="col text-center">
                    <img src="" class="rounded mx-auto d-block" id="img-jens" alt="...">

                    <div class="mt-5 mb-5 text-small">
                        <small>
                            Feedback gern an <strong>jblawatt (at) gmail (punkt) com</strong>
                    </div>
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Posts</h2>
                    <p class="text-center">
                        Hier eine Sammlung längerer Beiträge, die eher selten und unregelmäßig erscheinen.
                    </p>
                    <p>
                    <ul class="list-unstyled">
                        <?php foreach ($content as $page) : ?>
                            <li>
                                <a href="<?php echo $page->permalink(); ?>">
                                    <?php echo $page->title(); ?>
                                </a> <small>2021-10-08</small>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    </p>
                </div>
            </div>
        <?php elseif ($WHERE_AM_I == "page") : ?>
            <?php foreach ($content as $page) : ?>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center"><?php echo $page->title() ?></h2>
                        <div class="meta text-center">
                            <p>
                                <?php echo $page->date("c"); ?>
                            </p>
                            <p>
                                <?php foreach ($page->tags(true) as $tag) : ?>
                                    <a href="#"><?php echo $tag; ?></a>
                                <?php endforeach; ?>
                            </p>
                        </div>
                        <div class="content">
                            <p class="text-center">
                                <strong>
                                    <?php echo $page->description(); ?>
                                </strong>
                            </p>
                            <p>
                                <?php echo $page->content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <h2>NOT FOUND</h2>
        <?php endif; ?>
    </main>
    <footer class="container">
        <div class="row">
            <div class="col">
                <hr>
                <nav class="nav justify-content-center">
                    <a href="/" class="nav-link">Home</a>
                    <a href="#" class="nav-link">GitHub</a>
                    <a href="#" class="nav-link">RSS</a>
                </nav>
                <p class="text-muted text-center">
                    <small>
                        <?php echo $site->footer(); ?>
                    </small>
                </p>
            </div>
        </div>
    </footer>
    <?php echo Theme::plugins("siteBodyEnd"); ?>
</body>

</html>
