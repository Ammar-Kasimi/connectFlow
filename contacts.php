<?php include 'header.php'; ?>

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
                        <tr>
                            <td class="fw-bold">Alice Dupont</td>
                            <td class="text-muted">alice@test.com</td>
                            <td>06 12 34 56 78</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">Modifier</a>
                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</button>
                            </td>
                        </tr>
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
                <form method="POST" action="">
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
                        <input type="tel" name="phone" class="form-control bg-light">
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                Voulez-vous vraiment supprimer ce contact ?
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger shadow-sm">Confirmer</button>
            </div>
        </div>
    </div>
</div>

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>