<?php include 'header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-5 col-lg-4">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary bg-gradient text-white text-center py-3">
                <h4 class="mb-0">Connexion</h4>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="login_logic.php">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom d'utilisateur</label>
                        <input type="text" name="username" class="form-control bg-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mot de passe</label>
                        <input type="password" name="password" class="form-control bg-light" required>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm">Se connecter</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center bg-white py-3">
                <small>Pas encore de compte ? <a href="register.php" class="fw-bold">Créer un compte</a></small>
            </div>
        </div>
    </div>
</div>
</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>