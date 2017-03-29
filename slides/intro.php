<section data-background-image='./lib/images/background_1.jpg'>
    <section>
        <h2>Veille techno et méthodo: Avancées 2016 et objectifs 2017</h2>
    </section>

    <section>
        <h2>Veille: Quésaco ?</h2>
        <ul>
            <li>Deux formes de veilles:
                <ul>
                    <li>Veille de formation: Tester une techno
                    <li>Veille process: Automatisation / Méthodo
                </ul>
        </ul>
    </section>

    <section>
        <h2>Acteurs</h2>
        <ul>
            <li>Chef de projets</li>
            <li>Lead Dev</li>
            <li class="fragment"><strong>Vous !!</strong></li>
        </ul>
    </section>

<?php
$technoSections = [
    'LAMP' => [
        'PHP' => './lib/images/logo/php.png',
        'HTML 5 - CSS 3 - Javascript' => './lib/images/logo/html_css_js.png',
        'MySQL' => './lib/images/logo/mysql.jpg',
        'Linux' => './lib/images/logo/linux.png',
        'Apache' => './lib/images/logo/apache.png',
    ],
    'Alternatives' => [
        "Node JS" => './lib/images/logo/nodejs.png',
        "nginx" => './lib/images/logo/nginx.png',
        "solr" => './lib/images/logo/solr.png',
        'redis' => './lib/images/logo/redis.png',
    ],
    'Frameworks' => [
        'codeigniter' => './lib/images/logo/codeigniter.png',
        'wordpress' => './lib/images/logo/wordpress.png',
        'carbone' => './lib/images/logo/carbone.png',
        'zend' => './lib/images/logo/zend.png',
        'symfony' => './lib/images/logo/symfony.png',
    ],
    'Librairies' => [
        'Bootstrap' => './lib/images/logo/bootstrap.png',
        'JQuery' => './lib/images/logo/jquery.png',
        'Sage' => './lib/images/logo/sage.png',
        'Phinx' => './lib/images/logo/phinx.png',
        'Apidoc' => './lib/images/logo/apidoc.png',
        'WP Cli' => './lib/images/logo/wp-cli.png',
    ],
    'Gestionnaires dépendances' => [
        'Composer' => './lib/images/logo/composer.png',
        'NPM' => './lib/images/logo/npm.png',
        'Bower' => './lib/images/logo/bower.svg',
    ],
    'Task builder' => [
        'Gulp' => './lib/images/logo/gulp.png',
        'grunt' => './lib/images/logo/grunt.png',
        'Make' => './lib/images/logo/make.jpeg',
        'Robo' => './lib/images/logo/robo.png',
    ],
    'Outils' => [
        'Git' => './lib/images/logo/git.png',
        'Gitlab' => './lib/images/logo/gitlab.png',
        'Github' => './lib/images/logo/github.png',
        'Rsync' => './lib/images/logo/rsync.png',
        'Sass' => './lib/images/logo/sass.png',
        'Postman' => './lib/images/logo/postman.png',
        'Redmine' => './lib/images/logo/redmine.png',
        'Electron' => './lib/images/logo/electron.png',
        'Cloud OVH' => './lib/images/logo/ovh.png',
        'Botify' => './lib/images/alex/botify.png',
        'Uptrends' => './lib/images/alex/uptrends.png',
    ],
];

$count = 0;
$lastSection = null;
// Main block
foreach ($technoSections as $section => $values):
    if ($section !== $lastSection) {
        ++$count;
        $lastSection = $section;
    }
?>
<section>
    <h2>Technos / Outils utilisées en 2016</h2>
    <p><?= $section ?></p>
<?php
$width =  15;
$notes = [];
foreach ($values as $name => $src):
    $notes[] = $name;
?>
    <img src="<?= $src ?>" alt="<?= $name ?>" style="vertical-align: middle;border:none;width:<?= $width ?>%;box-shadow:none;"/>
<?php
endforeach; ?>
    <aside class="notes">
        <ul>
        <?= join('<li>', $notes) ?>
        </ul>
    </aside>
    </section>
<?php
endforeach;
$count++;
?>
<section>
    <h2>Technos / Outils utilisées en 2016</h2>
    <p>Et encore beaucoup d'autres ! </p>
    <small>La diapo suivante est trop petite...</small>
</section>
<section>
    <h2>Technos / Outils utilisées en 2016</h2>
<?php
$tmp = [];
$count = 0;
$lastSection = null;
$technoSections['Frameworks']['WP Cubi'] = './lib/images/logo/wp-cubi.png';
foreach ($technoSections as $section => $values) {
    if ($section !== $lastSection) {
        ++$count;
        $lastSection = $section;
    }
    foreach ($values as $atl => $src) {
        $tmp[]= [
            'src' => $src,
            'fragment' => $count,
            'alt' => $atl,
        ];
    }
}

// Img
shuffle($tmp);
?>
<div id='intro_techno_img_block'>
<?php
foreach ($tmp as $data):
?>
<img data-autoslide="50" class="fragment"  src="<?= $data['src'] ?>" alt="<?= $data['alt'] ?>" style="vertical-align: middle;border:none;width:8%;box-shadow: none;"/>
<?php
endforeach;
?>
<div class="fragment"></div>
    </section>

    <section>
        <h2>Contributions projets open source</h2>
        <ul>
            <li>Pull requests
                <ul>
                    <li>wpscanteam/wpscan
                    <li>picturepan2/spectre
                    <li>globalis-ms/carbone
                    <li>felixfbecker/php-language-server
                    <li>wp-cli/wp-cli
                </ul>
            <li>Proposition d'amélioration
                <ul>
                    <li>Sage: Automating theme initialization
        </ul>
        <aside class="notes">
            <ul>
                <li>Pull requests
                    <ul>
                        <li>WP-Scan: Allow --cache-dir option in command line parameters (pierre),
                        <li>picturepan2/spectre: nico (wording)
                        <li>Carbone: licence MIT : 19 Nov 2015, 20 pull requests, 17 acceptées en 2016
                        <li>PHP Implementation of the VS Code Language Server Protocol: Fix crash when returning null instead of a Type when trying to infer node type (esteban),
                        <li>WP-Cli: Feature fix wp cli install (pierre),
                    </ul>
                <li>Proposition d'amélioration;
                    <ul>
                        <li>Sage: Automating theme initialization (with a Yeoman generator ?) (pierre)
            </ul>
        </aside>
    </section>
</section>
