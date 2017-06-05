<?php include 'header.php' ?>
        <main id="contact">
            <ul class="profile-tabs">
                <li><a href=""><img src="img-layout/user-icon.svg" alt="utilisateur">Mon compte</a></li>
                <li><a href=""><img src="img-layout/events-icon.svg" alt="événements">Evénements</a></li>
                <li><a href=""><img src="img-layout/localisation-icon.svg" alt="événements">Autour de moi</a></li>
                <li><a href=""><img src="img-layout/inbox-icon.svg" alt="inbox">Inbox</a></li>
                <li><a href=""><img src="img-layout/follow-icon.svg" alt="follow">Nous suivre</a></li>
            </ul>
            <section class="contact">
                <h2>Contact</h2>
                <div class="wrap-form-contact">
                    <p>Pose nous ta question, nous te garantissons une réponse en moins de 24h! Parceque nos <span>tripeeters</span> sont ceux qui font ce site et qu’on se doit de les chouchouter !</p>
                    <img src="img-layout/smiley.svg" alt="smiley">
                    <a href="" class="inscription-btn">Tu es déjà tripeeter</a>
                    <form action="post">
                        <div class="wrap-form clearfix">
                            <div>
                                 <input type="text" placeholder="Ton nom">
                            </div>
                            <div>
                                <input type="email" placeholder="Ton mail">
                            </div>
                        </div>
                        <div>
                            <textarea rows="10" cols="50" placeholder="Ton message"></textarea>
                        </div>
                        <div>
                            <input class="inscription-btn" type="submit" value="Envoyer">
                        </div>
                    </form>
                    <p>Parceque nous encourageons nos tripeeters à se parler entre eux, nous avons également mis en place une page dédiée aux messages, partages de photos et autres ! C’est
                        <a href="">par ici ></a></p>
                </div>
            </section>
        </main>
<?php include 'footer.php' ?>
