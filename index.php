<?php
session_start();
if (!isset($_SESSION["show_modal"])) {
    $_SESSION["show_modal"] = true;
}
?>


<!DOCTYPE html>
<html lang="fr-ch">

<?php
include 'components/header.php';
include 'components/modal.php';

if ($_SESSION["show_modal"]) {
    $_SESSION["show_modal"] =  false;
} else {
    echo "<script>hideModal();</script>";
}
?>

<div class="overflow-wrapper">

    <body class="landing-page">
        <?php include 'components/navbar.php' ?>
        <main>
            <div class="home-block home-block-ho" id="home">
                <div class="home-block-ho-row1">
                    <div class="title">
                        <h1>Kineo dance school</h1>
                        <h3 id="welcome">Découvrez-en plus sur une communauté autour de la culture hip-hop, accessible à chacun.</h3>
                    </div>

                    <div class="landing-page-doodle-container">
                        <img class="landing-page-doodle" src="res/img/home_page_doodle.png" alt="Doodles with a dancing shoe and headphones">
                    </div>
                </div>
                <div class="home-block-ho-row2">
                    <div class="downward-arrow">
                        <a href="index.php#presentation">
                            <img src="res/img/icons/keyboard_arrow_down.svg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="home-block home-block-pre" id="presentation">
                <div class="home-block-pre-row row1">
                    <div>
                        <h2>Présentation de l'association</h2>
                        <p>Kineo propose des cours de danse et des événements en voulant développer différentes relations bienveillantes.</p>
                    </div>
                </div>
                <div class="home-block-pre-row row2">
                    <div class="pre-block pre-block1">
                        <img src="res/img/relation_a_soi.png">
                        <h3>Relation à soi</h3>
                        <p>Tu pourras développer ta condition physique et les fondations liées à la forme de
                            danse proposée. Tu apprendras également à prendre confiance en toi et en ton corps tout en développant ta créativité. </p>
                    </div>
                    <div class="pre-block pre-block2">
                        <img src="res/img/relation_aux_autres.png">
                        <h3>Relation aux autres</h3>
                        <p>Tu pourras vivre des relations basées sur le respect. Tu découvriras la culture hip-hop et pourras partager autour de thématiques telles que
                            l’acceptation des autres, le racisme ou la communauté.</p>
                    </div>
                    <div class="pre-block pre-block3">
                        <img src="res/img/relation_a_dieu.png">
                        <h3>Relation à Dieu</h3>
                        <p> Tu pourras entendre parler d’une manière de lier la danse à la foi chrétienne. Tu développeras l’écoute et la
                            tolérance de vécus différents du tien et tu ne seras jamais forcé à vivre ou exprimer des choses qui ne te correspondent pas.</p>
                    </div>
                </div>
            </div>
            <div class="home-block home-block-va" id="values">
                <div class="home-block-va-row row1">
                    <h2>Les valeurs de l'association</h2>
                </div>
                <div class="home-block-va-row row2">
                    <img src="res/img/heart_sized.png">
                    <div class="value-content">
                        <h3>Amour</h3>
                        <p>Chacun est accepté tel qu’il est par l’équipe d’encadrement mais également par les autres participants. </p>
                    </div>
                </div>
                <div class="home-block-va-row row3">
                    <img src="res/img/seed_sized.png">
                    <div class="value-content">
                        <h3>Croissance</h3>
                        <p>Le développement personnel de chacun est mis en avant. Le but est de pousser les gens à être la meilleure version d’eux-mêmes. </p>
                    </div>
                </div>
                <div class="home-block-va-row row4">
                    <img src="res/img/green_tick_sized.png">
                    <div class="value-content">
                        <h3>Authenticité</h3>
                        <p>Chacun peut partager ce qu’il vit, son parcours, ses croyances et venir tel qu’il est. </p>
                    </div>
                </div>
                <div class="home-block-va-row row5">
                    <img src="res/img/flags_sized.png">
                    <div class="value-content">
                        <h3>Respect</h3>
                        <p>Ce qui est partagé par chacun est accepté et valorisé. Les différences sont vues comme une richesse.</p>
                    </div>
                </div>
                <div class="home-block-va-row row6">
                    <img src="res/img/things_sized.png">
                    <div class="value-content">
                        <h3>Éducation</h3>
                        <p>L’histoire de la culture hip-hop est partagée et des thématiques telles que le racisme, la mixité sociale, la violence sont abordées. </p>
                    </div>
                </div>
            </div>
            <div class="home-block home-block-co">
                <div class="home-block-co-row triangle-code"></div>
                <div class="home-block-co-row row1" id="comity">
                    <h2>Le comité</h2>
                </div>
                <div class="home-block-co-row row2">
                    <div class="left-arrow"><img src="res/img/icons/keyboard_arrow_left.svg"></div>
                    <div class="comity-presentation" id="0">
                        <img src="res/img/isa_pfp.png">
                        <div class="comity-presentation-text">
                            <h3>Isa Huguenin - Présidente</h3>
                            <p class="comity-description"> Isa travaille en tant qu'animatrice pour l’Armée du Salut. Elle s’est formée en tant qu’enseignante à la HEP-BEJUNE et a exercé
                                pendant 2 ans avant d’accepter la place qu’elle occupe actuellement. La pédagogie et la transmission aux plus jeunes sont donc des éléments essentiels dans sa
                                pratique de tous les jours. Isa a commencé la danse d’abord dans le cadre familial et lors de camps. Elle s’est ensuite formée dans diverses écoles de danse,
                                notamment à New York. Elle a formé un crew en 2018, avec lequel elle a participé à plusieurs championnats suisses et au championnat du monde de Hip-Hop.
                                La culture hip-hop lui tient particulièrement à cœur afin que chacun puisse y trouver sa place et un moyen d’expression.
                            </p>
                        </div>
                    </div>
                    <div class="comity-presentation right" id="1">
                        <img src="res/img/johan_pfp.png">
                        <div class="comity-presentation-text">
                            <h3>Johan Staïesse - Responsable finances</h3>
                            <p class="comity-description">
                                Johan est actuellement étudiant à l'Université de Lausanne en HEC (Hautes études commerciales) dans le but de poursuivre une carrière dans le marketing.
                                Il a un intérêt particulier pour le monde des affaires mais également pour la justice sociale. Il a fait du bénévolat dans un centre communautaire de
                                l'Armée du Salut de Chicago pendant un semestre, encadrant des jeunes en leur proposant des programmes de mentorat, de basketball ou encore de danse.
                                Le domaine du hip-hop accompagne Johan depuis de nombreuses années, que ce soit autour de la musique, du sport ou de la mode, en encourageant l’accueil
                                de toute personne sans discrimination aucune.
                            </p>
                        </div>
                    </div>
                    <div class="comity-presentation right" id="2">
                        <img src="res/img/coco_pfp.png">
                        <div class="comity-presentation-text">
                            <h3>Corinne Mazitu - Responsable événements</h3>
                            <p class="comity-description">
                                Corinne Mazitu, architecte HES de métier, est une personne passionnée et organisée. Au sein de Kineo, elle sera la responsable du secteur événementiel.
                                Ayant grandi dans la culture hip-hop et par amour de la danse, elle a commencé à développer ses connaissances en prenant des cours de waack et autres styles.
                                Son esprit critique redoutable permettra d'organiser des événements dans le soucis du détail afin que tous les participants se sentent acceuillis ,
                                s'amusent et puissent échanger dans un environnement sûr.
                            </p>
                        </div>
                    </div>
                    <div class="right-arrow"><img src="res/img/icons/keyboard_arrow_right.svg"></div>
                </div>
            </div>
            <div class="home-block home-block-cla" id="classes">
                <div class="home-block-cla-row row1">
                    <img src="res/img/doodle_random_4_rbg.png">
                    <div>
                        <h2>Horaires</h2>
                        <p>Les cours auront lieu dans les locaux de l’Armée du Salut, Haldimand 59, 1400 Yverdon-les-Bains avec ces horaires :</p>
                    </div>
                </div>
                <div class="home-block-cla-row row2"><img src="res/img/timetable.png"></div>
            </div>
            <div class="home-block home-block-fe">
                <div class="home-block-fe-row row1">
                    <div>
                        <h2>Cotisations</h2>
                        <p>Le prix ne doit pas être un frein à la participation aux activités. Nous voulons rendre cette communauté accessible à chacun.
                            Nous pouvons donc vous proposer un échange différent lors d’un entretien si ce prix devait poser problème.</p>
                    </div>
                </div>
                <div class="home-block-fe-row row2">
                    <h3>Enfants</h3>
                    <p>30.- CHF/mois</p>
                </div>
                <div class="home-block-fe-row row3">
                    <div>
                        <h3>Adolescents/étudiants</h3>
                        <p>40.- CHF/mois</p>
                    </div>
                    <img src="res/img/doodle_random_3_rbg.png">
                </div>
                <div class="home-block-fe-row row4">
                    <h3>Adultes</h3>
                    <p>50.- CHF/mois</p>
                </div>
            </div>
            <div class="home-block home-block-sup" id="support">
                <div class="home-block-sup-row row1">
                    <div>
                        <h2>Comment nous soutenir</h2>
                        <p>Nous sommes convaincus que ce projet peut aider les jeunes dans leur développement et influencer de manière positive la jeune génération.
                            Mais pour réaliser ce projet, nous avons besoin de votre aide. Il existe différents moyens de nous aider et nous soutenir.</p>
                    </div>
                </div>
                <div class="home-block-sup-row row2">
                    <div class="sup-block sup-block1">
                        <h3>Collaboration</h3>
                        <p>Vous êtes vous-mêmes investis dans le milieu de l’événementiel, du hip-hop ou de la jeunesse
                            et vous êtes prêt à nous offrir des ressources que vous avez pour l’organisation d’un événement.</p>
                    </div>
                    <div class="sup-block sup-block2">
                        <h3>Sponsoring</h3>
                        <p>Différentes offres sont possibles pour le sponsoring, <a href="res/docs/sponsors.pdf">téléchargez</a> notre dossier de sponsoring pour plus d’informations.</p>
                    </div>
                    <div class="sup-block sup-block3">
                        <h3>Donateur</h3>
                        <p>Le cœur de l’association vous parle et vous avez envie de nous soutenir financièrement,
                            vous pouvez nous faire un don pour nous aider à démarrer et continuer ce projet.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php' ?>
    </body>
</div>

</html>