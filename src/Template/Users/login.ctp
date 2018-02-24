<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>

<div class="container" id="logincontainer">
    <div class="row">
        <div class="col-5 offset-3 text-center">
            <img src="img/login.png" class="img-fluid">
            <form>
              <div class="form-group">
                <input type="name" name="name" class="form-control" placeholder="Username" id="name" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>
</div>
</div>
<?= $this->Form->end() ?>
