<?php
include 'header.php';
require_once 'profile_logic.php';

?>
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-5 text-center">
                <h2 class="text-primary fw-bold mb-4">Bonjour, <?php echo $user; ?>!</h2>

                <div class="bg-light p-4 rounded-3 border mb-4">
                    <p class="mb-2"><strong>Nom d'utilisateur :</strong> <span class="text-primary"><?php echo $user; ?></span></p>
                    <p class="mb-2"><strong>Date d'inscription :</strong> <?php echo $registere_date; ?></p>
                    <p class="mb-0"><strong>Dernière connexion :</strong> <?php echo $last_login; ?></p>
                </div>

                <a href="contacts.php" class="btn btn-primary btn-lg shadow px-5">Gérer mes contacts</a>
            </div>
        </div>
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>