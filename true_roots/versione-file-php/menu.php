<?php include "header.php"; ?>

<div class="listino">
    <h3>Listino</h3>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#pizza">Pizza</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#panini">Panini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#orientale">Orientale</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#bevande">Bevande</a>
          </li>
      </ul>
</div>
    
    <div class=" shop" id="shop">

    </div>
    <section id="prenota">
        <h5>Contattaci per prenotare un tavolo. Ti contatteremo al più presto per confermare la
            disponibilità.
        </h5>
        <form action="#" method="post" class="p-3 p-md-4">
            <div class="form-row">
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="phone">Telefono</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefono">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="date">Data</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Data">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="time">Ora</label>
                    <input type="time" class="form-control" name="time" id="time" placeholder="Ora">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="people">Persone</label>
                    <input type="number" class="form-control" name="people" id="people" placeholder="Persone">
                </div>
            </div>
            <div class="form-group">
                <label for="message">Messaggio</label>
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Messaggio"
                    required></textarea>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary">Invia</button>
            </div>
        </form>

<?php include "footer.php"; ?>