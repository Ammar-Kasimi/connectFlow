<?php include 'header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-success bg-gradient text-white text-center py-3">
                <h4 class="mb-0">Créer un compte</h4>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="register_logic.php">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom d'utilisateur</label>
                        <input type="text" name="username" class="form-control bg-light" minlength="3" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mot de passe</label>
                        <input type="password" name="password" class="form-control bg-light" minlength="6" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Confirmer le mot de passe</label>
                        <input type="password" name="confirm_password" class="form-control bg-light" required>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-success btn-lg shadow-sm">S'inscrire</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center bg-white py-3">
                <small>Déjà inscrit ? <a href="login.php" class="fw-bold text-success">Se connecter</a></small>
            </div>
        </div>
    </div>
</div>

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
