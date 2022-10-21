<?php include "header.php"; ?>
        <div class="container-fluid contattaci">
            <h5>Dove Siamo</h5>
            <div class="map-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.6908838895033!2d16.40427631473312!3d40.83475293803477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13387b971edcf24d%3A0x5f5d6bc377cf6463!2sPizzeria%20True%20Roots!5e0!3m2!1sen!2sit!4v1666077586860!5m2!1sen!2sit"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <h5>Contattaci</h5>
            <form action="#" method="post" role="form" class="p-3 p-md-4">
                <div class="row">
                    <div class="col-xl-6 form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Oggetto</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Oggetto" required>
                </div>
                <div class="form-group">
                    <label for="message">Messaggio</label>
                    <textarea class="form-control" name="message" rows="5" placeholder="Messaggio" required></textarea>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Invia</button>
                </div>
            </form>
        </div>
        <?php include "footer.php"; ?>