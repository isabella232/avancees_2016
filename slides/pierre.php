<!-- PIERRE -->
<section data-background-image='./lib/images/background_pierre.png'>

    <section>
        <h2>It's time for a new stack !</h2>
        <ul>
            <li>Inspired by roots/bedrock</li>
            <li>Folder structure</li>
            <li>Dependencies</li>
            <li>Versionning</li>
            <li>Environments</li>
            <li>Theming</li>
            <li>Performances</li>
            <li>Security</li>
        </ul>
        <aside class="notes">
            <ul>
                <li>Blog -> Appli</li>
                <li>Robustesse ? Exp TMA</li>
                <li>Industrialisation (sécu, perf, ...)</li>
                <li>Essais, erreurs, projets ratés, retours en arrière</li>
                <li>Bedrock ? besoin custom + robo + rsync + htaccess</li>
            </ul>
        </aside>
    </section>

    <section>
        <h2>Welcome to ...</h2>
        <img class="fragment"  src="./lib/images/logo/wp-cubi.png" alt="wp-cubi" style="border:none;box-shadow: none;"/>
        <aside class="notes">
            <ul>
                <li>1 an de travail (MG, PB, DD + Front + RG)</li>
                <li>Sur 4 projets</li>
                <li>Brainstorming au regalia</li>
            </ul>
        </aside>
    </section>

    <section>
        <h2>What's inside ?</h2>
        <pre class="fragment" style="font-size: 0.5em;background: #3f3f3f;color: #dcdcdc; font-weight:bolder;">
|-- .robo
|-- .rsyncignore
|-- RoboFile.php
|-- composer.json
|-- config/
|   |-- application.php
|   |-- environments/
|   |-- htaccess/
|   |-- local.php.sample
|   |-- salt-keys.php
|   |-- vars.php
|-- phpcs.xml
|-- vendor/
|-- web/
|   |-- .htaccess
|   |-- .user.ini
|   |-- app/
|   |   |-- languages/
|   |   |-- modules/
|   |   |-- mu-modules/
|   |   |-- themes/
|   |-- index.php
|   |-- media/
|   |-- wp/
`-- wp-cli.yml
        </pre>
        <aside class="notes">
            <ul>
                <li>Ou est WordPress ?</li>
                <li>Composer</li>
                <li>Robo (+ tard)</li>
                <li>Config</li>
                <li>htaccess</li>
                <li>rsync</li>
                <li>web</li>
            </ul>
        </aside>
    </section>

    <section>
        <h2>Goodbye Phing, Hello Robo</h2>
        <ul>
            <li>PHP OOP task runner</li>
            <li>Continuous integration</li>
            <li>Globalis / WP base tasks</li>
            <li>RoboFile.php</li>
        </ul>
        <aside class="notes">
            <ul>
                <li>GitFlow</li>
                <li>htaccess</li>
                <li>install / build</li>
                <li>deploy</li>
                <li>update plugins</li>
            </ul>
        </aside>
    </section>

    <section>
        <h2>(mu-)plugins stack</h2>
        <ul style="margin-bottom:30px">
            <li>advanced-custom-fields</li>
            <li>security (disable-rest-api / disable-xmlrpc)</li>
            <li>debug/monitoring (environment info, mail-trapping, query-monitor, wp-crontrol, user-switching)</li>
            <li>optimization (soil, ewww-image-optimize)</li>
            <li>SEO (seo-framework, disallow-indexing)</li>
            <li>and many others (plugins autoloader, wpg-custom-login ... )</li>
        </ul>
        <aside class="notes">
            <ul>
                <li>env de dev complet</li>
                <li>plugins récurrents qualité+</li>
                <li>plugins customs</li>
            </ul>
        </aside>
    </section>

    <section>
        <h2>Sage and Globbox</h2>
        <ul>
            <li>Theme structure</li>
            <li>Sass preprocessing</li>
            <li>Template wrapping</li>
            <li>Cache buster</li>
            <li>Image optimization</li>
        </ul>
        <aside class="notes">
            <ul>
                <li>theme starter / structure</li>
                <li>preprocessing + make</li>
                <li>bootstrap ? globbox</li>
            </ul>
        </aside>
    </section>

    <section>
        <h2>What next ?</h2>
        <video data-autoplay loop style="width: 55%;" src="./lib/videos/wordpress.mp4"></video>
        <aside class="notes">
            <ul>
                <li>GitHub + Packagist + Create project</li>
                <li>wp-globalis-tools -> clean + packagist</li>
                <li>Documentation</li>
                <li>Robo base tasks (sync DB, sync media ...)</li>
                <li>Theme generator</li>
                <li>Site web ?</li>
                <li>Présentation publique au WP Tech 2017 ?</li>
            </ul>
        </aside>
    </section>

</section>
