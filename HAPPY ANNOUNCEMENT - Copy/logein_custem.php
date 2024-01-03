<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Connexion</h4>
        <button type="button" class="close" data-dismiss="modal" style="color: black;">&times;</button>
      </div>
      <div class="modal-body">
        <form role="form" method="POST">
          <div class="form-group">
            <label for="usrname">Nom d'utilisateur</label>
            <input type="text" name="c_email" class="form-control" id="usrname" placeholder="Entrer l'email">
          </div>
          <div class="form-group">
            <label for="psw">Mot de passe</label>
            <input type="password" name="c_pass" class="form-control" id="psw" placeholder="Entrer le mot de passe">
          </div>
          <button type="submit" name="login" class="btn btn-primary btn-block">Se connecter</button>
        </form>
      </div>
      <div class="modal-footer">
        <p class="text-muted">Vous n'êtes pas membre? <a href="customer_register.php">S'inscrire</a></p>
      </div>
    </div>

  </div>
</div>
