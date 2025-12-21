<?php include 'header.php';
require_once "contacts_logic.php";
?>


<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="mb-0 text-primary fw-bold">Liste des contacts</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact): ?>
                            <tr>
                                <td class="fw-bold"><?php echo htmlspecialchars($contact['name']); ?></td>
                                <td class="text-muted"><?php echo htmlspecialchars($contact['email']); ?></td>
                                <td><?php echo htmlspecialchars($contact['number']); ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button name="modify" data-id="<?php echo $contact['id']; ?>"
                                            data-name="<?php echo htmlspecialchars($contact['name']); ?>"
                                            data-number="<?php echo htmlspecialchars($contact['number']); ?>"
                                            data-email="<?php echo htmlspecialchars($contact['email']); ?>"
                                            class="btn modify_btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editModal">Modifier
                                        </button>
                                        <form action="contacts_logic.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $contact['id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-outline-danger" name="delete">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary bg-gradient text-white py-3">
                <h5 class="mb-0">Ajouter un contact</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="contacts_logic.php">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom complet *</label>
                        <input type="text" name="name" class="form-control bg-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email *</label>
                        <input type="email" name="email" class="form-control bg-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Téléphone</label>
                        <input type="tel" name="number" class="form-control bg-light">
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" name="save" class="btn btn-primary btn-lg shadow-sm">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-3">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title fw-bold text-primary">Modifier le contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="contacts_logic.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="edit_id" id="modal_id">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" name="name" id="modal_name" class="form-control bg-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" id="modal_email" class="form-control bg-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Téléphone</label>
                        <input type="tel" name="number" id="modal_number" class="form-control bg-light">
                    </div>
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" name="update" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="code.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>