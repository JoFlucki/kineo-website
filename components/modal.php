<div class="modal-wrapper">
    <div id="modal" class="">
        <div id="modal-content">
            <div id="title" style="text-align:left">
                <h1>Le Kineo Festival fait son retour !</h1>
            </div>
            <div id="description" style="text-align:left">
                Cette année, on te fait découvrir 3 style de danse urbaine avec des pointes dans chacun de ces styles.
                Et tout ça entouré de concerts avec des artistes incroyables et variés, de la nourriture, et une bonne vibe 💜
                <br>
                <br>
                Date : <span style="color:#886ce4;">3 juin de 14:00-22:00</span>
                <br>
                Lieu : <span style="color:#886ce4;">Kiosque à musique à Yverdon-les-Bains</span>
                <br>
                Rendez-vous sur notre <a style="color:#886ce4;" href="https://www.instagram.com/kineo_danceschool/"> page Instagram</a> pour plus d'infos.
            </div>
            <div id="close-button">retourner sur le site</div>
        </div>
    </div>
    <script>
        var close = document.getElementById("close-button");
        close.addEventListener('click', function handleClick() {
            hideModal();
            displayModal = false;
        });

        if (displayModal) {
            showModal();
        } else {
            hideModal();
        }
    </script>
</div>