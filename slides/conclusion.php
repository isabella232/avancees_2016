<section  data-background-image='./lib/images/background_2.jpg'>
    <section>
        <h2>Et pour 2017 ?</h2>
    </section>
    <section>
        <h2>Coding Style Guide</h2>
        <p style="font-size:1.4em">PSR2</p>
        <ul>
            <li>Uniforme sur tous les pôles
            <li>Assure une meilleure lisibilité du code
        </ul>
    </section>
    <section>
        <h2>CSP</h2>
        <ul>
            <li>Ajoute une couche de sécurité côté navigateur
            <li>Très simple à mettre en place
            <li>Possibilité de l'utiliser comme simple logger
            <li>Dévélopement plus rigoureux
        </ul>
        <pre><code data-trim data-noescape>header('Content-Security-Policy', 'directives');</code></pre>

        <aside class="notes">
            <ul>
                <li>Définit régles sécurité à appliquer, ex: pas de inline non signé
                <li>Simple composition de directive dans un header http
                <li>header définissant un end point de reception de log
                <li>Nous empêche d'écrire du js inline non signé (par un nonce ou autre)
            </ul>
        </aside>
    </section>

    <section>
        <h2>Tests</h2>
        <video data-autoplay style="width:45%;float:left;" src="./lib/videos/testtotomatique.mp4"></video>
        <div style="width:45%;float:right;">
            <ul>
                <li>BDD / TDD</li>
                <li>Acceptance / Functional / Unit</li>
                <li>Depuis janvier:
                    <ul>
                        <li>Codeception</li>
                        <li>Browserstack</li>
                        <li>Litmus</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <h2>Puppet skilled</h2>
        <p>Librairie pour codeigniter</p>
        <ul>
            <li>Composer</li>
            <li>Supprime le principe des librairies en singleton</li>
            <li>Container</li>
            <li>ORM</li>
            <li>Event</li>
            <li>Authentification</li>
            <li>...</li>
        </ul>
        <aside class="notes">
            Besoin de monde pour tester / documenter
        </aside>
    </section>

    <section>
        <h6>Encore plus d'automatisation !</h6>
        <h2>Robo</h2>
        <ul>
            <li>Présent sur WP</li>
            <li>Présent sur Codeigniter</li>
            <li>Présent sur Carbone</li>
        </ul>
        <aside class="notes">
            Besoin de monde pour tester / documenter / fournir de nouvelles commandes
        </aside>
    </section>

    <section>
        <h2>De nouveaux membres</h2>
        <h6>Pour encore plus d'avancée !</h6>
        <p><strong>Romi: </strong>Chef de projet</p>
        <p><strong>Nathan: </strong>Développeur</p>
        <p><strong>Heng: </strong> Stagiaire</p>
        <aside class="notes">
            <ul>
                <li>Romi:  CDP + Retour et amélioration méthodo TMA</li>
                <li>Nathan:  DEV + Retour et amélioration méthodo TMA</li>
                <li>Heng:  Stagiaire + Travaux sur les tests unitaires automatisés sous wordpress</li>
            </ul>
        </aside>
    </section>
</section>

<section data-background="./lib/images/background_wwy.png">
    <h2>We want you</h2>
    <h6>For GLOBALIS Army</h6>
    <ul>
        <li>Améliorer</li>
        <li>Tester</li>
        <li>Documenter</li>
    </ul>
</section>

<section data-background="./lib/images/end.gif">
    <h2>C'est fini!</h2>
    <img src="./lib/images/thanks.gif"/>
</section>
