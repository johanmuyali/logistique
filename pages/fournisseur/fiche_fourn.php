<div class="modal modal-dialog-scrollable fade modal-lg" id="ficheFournisseur" tabindex="-1" aria-labelledby="ficheFournisseur" aria-hidden="true">
<div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ficheFournisseurLabel">Fiche Fournisseur : Société Alpha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        <!-- Onglets -->
        <ul class="nav nav-tabs" id="fournisseurTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="infos-tab" data-bs-toggle="tab" data-bs-target="#infos" type="button" role="tab">Informations</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="evaluations-tab" data-bs-toggle="tab" data-bs-target="#evaluations" type="button" role="tab">Évaluations</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab">Documents</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="historique-tab" data-bs-toggle="tab" data-bs-target="#historique" type="button" role="tab">Historique</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="conformite-tab" data-bs-toggle="tab" data-bs-target="#conformite" type="button" role="tab">Conformité</button>
          </li>
        </ul>
        <div class="tab-content mt-3">
          <!-- Onglet Informations générales -->
          <div class="tab-pane fade show active" id="infos" role="tabpanel" aria-labelledby="infos-tab">
            <div class="row mb-4">
              <div class="col-md-6">
                <p><strong>Nom :</strong> Société Alpha</p>
                <p><strong>Type :</strong> Transport</p>
                <p><strong>Statut :</strong> <span class="badge bg-success">Actif</span></p>
                <p><strong>Contact principal :</strong> Jean Kalume</p>
                <p><strong>Téléphone :</strong> +24399999999999</p>
                <p><strong>Email :</strong> jean.Kalume@societealpha.com</p>
                <p><strong>Adresse :</strong> 12 rue de la Logistique, 75000 Kibwe, Goma</p>
              </div>
              <div class="col-md-6">
                <p><strong>Site web :</strong> <a href="https://www.societealpha.com" target="_blank">www.societealpha.com</a></p>
                <p><strong>Date d'inscription :</strong> 15 Janvier 2020</p>
                <p><strong>Dernière évaluation :</strong> 10 Avril 2025</p>
                <p><strong>Score global :</strong> 92%</p>
                <p><strong>Niveau de risque :</strong> <span class="badge bg-success">Faible</span></p>
              </div>
            </div>
          </div>
          <!-- Onglet Évaluations -->
          <div class="tab-pane fade" id="evaluations" role="tabpanel" aria-labelledby="evaluations-tab">
            <div class="row">
              <div class="col-md-6">
              <div class="mb-3 text-center">
              <div id="evaluationChart" style="width:100%;max-width:600px;height:400px;margin:auto;"></div>
            </div>
              </div>
              <div class="col-md-6">
                <div class="mt-4">
              <h6>Critères d'évaluation</h6>
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Critère</th>
                    <th>Score</th>
                    <th>Commentaire</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Qualité</td>
                    <td>95%</td>
                    <td>Très bonne qualité constante</td>
                  </tr>
                  <tr>
                    <td>Délais</td>
                    <td>90%</td>
                    <td>Respect des délais sauf en février 2025</td>
                  </tr>
                  <tr>
                    <td>Service</td>
                    <td>92%</td>
                    <td>Bon service client</td>
                  </tr>
                  <tr>
                    <td>Conformité</td>
                    <td>88%</td>
                    <td>Certifications à jour</td>
                  </tr>
                  <tr>
                    <td>Communication</td>
                    <td>85%</td>
                    <td>Amélioration possible sur le suivi</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-success btn-sm mb-2">Ajouter / Modifier une évaluation</button>
            </div>
              </div>
            </div>
            
            <div class="row justify-content-center ">
              <div class="col-md-10">
                <h6>Historique des évaluations</h6>
                <ul class="list-group">
                  <li class="list-group-item">10/04/2025 - Score global 92% - <span class="text-success">Validé</span></li>
                  <li class="list-group-item">15/01/2024 - Score global 89% - <span class="text-success">Validé</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Onglet Documents -->
          <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
            <div class="mb-3">
              <h6>Liste des documents</h6>
              <ul class="list-group mb-2">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Contrat cadre 2024
                  <span>
                    <span class="badge bg-success me-2" title="Valide jusqu'au 31/12/2024">Valide</span>
                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i></a>
                  </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Certificat ISO 9001
                  <span>
                    <span class="badge bg-warning text-dark me-2" title="Expire bientôt">Expire bientôt</span>
                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i></a>
                  </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Questionnaire fournisseur
                  <span>
                    <span class="badge bg-danger me-2" title="Expiré">Expiré</span>
                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i></a>
                  </span>
                </li>
              </ul>
              <form class="d-flex align-items-center gap-2">
                <input type="file" class="form-control form-control-sm" />
                <button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-upload me-1"></i>Ajouter</button>
              </form>
            </div>
          </div>
          <!-- Onglet Historique -->
          <div class="tab-pane fade" id="historique" role="tabpanel" aria-labelledby="historique-tab">
            <h6>Journal d'activité</h6>
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>Date/Heure</th>
                    <th>Utilisateur</th>
                    <th>Action</th>
                    <th>Objet</th>
                    <th>Détail</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>24/04/2025 09:15</td>
                    <td>Marie Laurent</td>
                    <td><span class="text-success"><i class="fas fa-plus-circle"></i> Ajout</span></td>
                    <td>Contrat fournisseur</td>
                    <td><a href="#"><i class="fas fa-file-alt me-1"></i>Voir le document</a></td>
                  </tr>
                  <tr>
                    <td>23/04/2025 17:40</td>
                    <td>Ali Ben Said</td>
                    <td><span class="text-primary"><i class="fas fa-check-circle"></i> Validation</span></td>
                    <td>Commande CMD-20250415-001</td>
                    <td><i class="fas fa-truck me-1"></i>Statut passé à "Livrée"</td>
                  </tr>
                  <tr>
                    <td>20/02/2025 13:30</td>
                    <td>Jean Kalume</td>
                    <td><span class="text-danger"><i class="fas fa-exclamation-triangle"></i> Incident</span></td>
                    <td>Livraison</td>
                    <td><i class="fas fa-box-open me-1"></i>Marchandise endommagée</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button class="btn btn-outline-primary btn-sm mt-2"><i class="fas fa-file-export me-1"></i>Exporter l'historique</button>
          </div>
          <!-- Onglet Conformité -->
          <div class="tab-pane fade" id="conformite" role="tabpanel" aria-labelledby="conformite-tab">
            <h6>Conformité et code de conduite</h6>
            <ul>
              <li>Code de bonne conduite signé : <span class="badge bg-success">Oui</span></li>
              <li>Questionnaire fournisseur (Annexe 10) : <a href="#" class="btn btn-sm btn-outline-primary">Voir / Remplir</a></li>
              <li>Certifications à jour : <span class="badge bg-success">Oui</span></li>
              <li>Dernier audit conformité : 10/04/2025</li>
            </ul>
            <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fas fa-book me-1"></i>Consulter le code de conduite</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <span class="me-auto text-muted">Connecté en tant que <strong>Responsable Achats</strong></span>
        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
        <button class="btn btn-primary">Modifier</button>
        <button class="btn btn-success">Ajouter évaluation</button>
        <button class="btn btn-warning">Signaler incident</button>
        <button class="btn btn-outline-info">Exporter fiche</button>
      </div>
    </div>
  </div>
</div>
