<div class="content">
          <!-- content nav -->
       <?php include_once "content_nav.php" ?>
          <!-- content body -->
          <div class="row g-3 mb-3">
            <!-- Synthèse Approvisionnements -->
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Synthèse Approvisionnements<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-center">
                  <div class="row ">
                    <div class="col md-4">
                      <p title="commande en cours" class="font-sans-serif lh-1 mb-1 fs-4">127</p><span class="badge badge-soft-success rounded-pill fs--2">en cours</span>
                    </div>
                    <div class="col md-4">
                      <p title="commande en retard " class="font-sans-serif lh-1 mb-1 fs-4">25</p><span class="badge badge-soft-danger rounded-pill fs--2">en retard</span>
                    </div>
                    <div class="col md-4">
                      <p title="commande à valider " class="font-sans-serif lh-1 mb-1 fs-4">73</p><span class="badge badge-soft-primary rounded-pill fs--2">à valider</span>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Performance Livraisons -->
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2">Performance Livraisons</h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                      <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">95%</div><span class="badge rounded-pill fs--2 bg-200 text-primary"><span class="fas fa-caret-up me-1"></span>3.6%</span>
                    </div>
                    <div class="col-auto ps-0 mt-n4">
                      <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Gestion des Stocks -->
            <div class="col-md-12 col-xxl-3">
              <div class="card h-md-100">
              <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Gestion de stock<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                </div>
              <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                      <thead class="bg-light">
                      <tr class="text-900">
                        <th>Product</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Stock Status</th>
                        <th class="text-end">Reorder Level</th>
                        <th class="pe-x1 text-end" style="width: 8rem">Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr class="border-bottom border-200">
                        <td>
                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/ecommerce/1.jpg" width="60" alt="" />
                          <div class="flex-1 ms-3">
                          <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">iPad Pro 2020 11</a></h6>
                          <p class="fw-semi-bold mb-0 text-500">Tablet</p>
                          </div>
                        </div>
                        </td>
                        <td class="align-middle text-center fw-semi-bold">50</td>
                        <td class="align-middle text-center">
                        <span class="badge badge-soft-success rounded-pill fs--2">In Stock</span>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">20</td>
                        <td class="align-middle pe-x1 text-end">
                        <button class="btn btn-sm btn-primary">Reorder</button>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/ecommerce/2.jpg" width="60" alt="" />
                          <div class="flex-1 ms-3">
                          <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">iPhone XS</a></h6>
                          <p class="fw-semi-bold mb-0 text-500">Smartphone</p>
                          </div>
                        </div>
                        </td>
                        <td class="align-middle text-center fw-semi-bold">10</td>
                        <td class="align-middle text-center">
                        <span class="badge badge-soft-warning rounded-pill fs--2">Low Stock</span>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">15</td>
                        <td class="align-middle pe-x1 text-end">
                        <button class="btn btn-sm btn-primary">Reorder</button>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/ecommerce/3.jpg" width="60" alt="" />
                          <div class="flex-1 ms-3">
                          <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Amazfit Pace (Global)</a></h6>
                          <p class="fw-semi-bold mb-0 text-500">Smartwatch</p>
                          </div>
                        </div>
                        </td>
                        <td class="align-middle text-center fw-semi-bold">0</td>
                        <td class="align-middle text-center">
                        <span class="badge badge-soft-danger rounded-pill fs--2">Out of Stock</span>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">10</td>
                        <td class="align-middle pe-x1 text-end">
                        <button class="btn btn-sm btn-primary">Reorder</button>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/ecommerce/4.jpg" width="60" alt="" />
                          <div class="flex-1 ms-3">
                          <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Lotto AMF Posh Sports Plus</a></h6>
                          <p class="fw-semi-bold mb-0 text-500">Shoes</p>
                          </div>
                        </div>
                        </td>
                        <td class="align-middle text-center fw-semi-bold">30</td>
                        <td class="align-middle text-center">
                        <span class="badge badge-soft-success rounded-pill fs--2">In Stock</span>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">10</td>
                        <td class="align-middle pe-x1 text-end">
                        <button class="btn btn-sm btn-primary">Reorder</button>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <!-- Listes des taches -->
            <div class="col-lg-6 pe-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                 <div class="card-header bg-light">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="mb-0">Tâches en Cours</h6>
                    </div>
                    <div class="col-auto text-center pe-x1">
                      <select class="form-select form-select-sm">
                        <option>Working Time</option>
                        <option>Estimated Time</option>
                        <option>Billable Time</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                        <div class="col ps-x1 py-1 position-static">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl me-3">
                                    <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span
                                            class="fs-0 text-primary">A</span></div>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                            href="#!">Appel d'Offres Fournisseur X</a><span
                                            class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col py-1">
                            <div class="row flex-end-center g-0">
                                <div class="col-auto pe-2">
                                    <div class="fs--1 fw-semi-bold">12:50:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                        <div class="col ps-x1 py-1 position-static">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl me-3">
                                    <div class="avatar-name rounded-circle bg-soft-success text-dark"><span
                                            class="fs-0 text-success">L</span></div>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                            href="#!">Livraison Commande Y</a><span
                                            class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col py-1">
                            <div class="row flex-end-center g-0">
                                <div class="col-auto pe-2">
                                    <div class="fs--1 fw-semi-bold">25:20:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Afficher
                        toutes les tâches<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
              </div>
            </div>
              <!-- Fournisseurs à Évaluer -->
              <div class="col-6 col-lg-6 mb-3">
                  <div class="card border-danger shadow h-100">
                    <div class="card-header bg-danger text-white d-flex align-items-center">
                      <span class="fas fa-exclamation-triangle me-2 fs-4"></span>
                      <h6 class="mb-0 flex-grow-1">Alertes Critiques</h6>
                      <button class="btn btn-sm btn-light text-danger" title="Rafraîchir"><span class="fas fa-sync-alt"></span></button>
                    </div>
                    <div class="card-body bg-light">
                      <!-- Exemple d'alerte critique : Rupture de stock -->
                      <div class="alert alert-warning d-flex align-items-center mb-3 shadow-sm" role="alert">
                        <span class="fas fa-box-open me-2 fs-5"></span>
                        <div>
                          <strong>Rupture de stock</strong> : Article <span class="badge bg-warning text-dark">X123</span>
                          <div class="small text-muted">Entrepôt Central – 25 avril 2025, 09:15</div>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-warning ms-auto">Voir</a>
                      </div>
                      <!-- Exemple d'alerte critique : Livraison en retard -->
                      <div class="alert alert-danger d-flex align-items-center mb-3 shadow-sm" role="alert">
                        <span class="fas fa-truck-loading me-2 fs-5"></span>
                        <div>
                          <strong>Livraison en retard</strong> : Commande <span class="badge bg-danger">#CMD789</span>
                          <div class="small text-muted">Fournisseur ABC – 24 avril 2025, 18:00</div>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-danger ms-auto">Détails</a>
                      </div>
                      <!-- Exemple d'alerte critique : Incident qualité -->
                      <div class="alert alert-info d-flex align-items-center mb-3 shadow-sm" role="alert">
                        <span class="fas fa-exclamation-circle me-2 fs-5"></span>
                        <div>
                          <strong>Incident qualité</strong> : Lot <span class="badge bg-info text-dark">LOT456</span>
                          <div class="small text-muted">Inspection – 23 avril 2025, 14:30</div>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-info ms-auto">Suivre</a>
                      </div>
                      <!-- Si aucune alerte -->
                      <!-- <div class="text-center text-success fw-bold py-4"><span class="fas fa-check-circle me-2"></span>Aucune alerte critique</div> -->
                    </div>
                  </div>
                </div>

            
            
          </div>
          <div class="row">
            <!-- Total des dépenses -->
            <div class="col-lg-12 ps-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-header">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0">Total des dépenses</h6>
                    </div>
                    <div class="col-auto d-flex">
                      <select class="form-select form-select-sm select-month me-2">
                        <option value="0">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                        <option value="4">May</option>
                        <option value="5">Jun</option>
                        <option value="6">July</option>
                        <option value="7">August</option>
                        <option value="8">September</option>
                        <option value="9">October</option>
                        <option value="10">November</option>
                        <option value="11">December</option>
                      </select>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100 pe-0">
                  <!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
                  <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
       
          
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.14.0</p>
              </div>
            </div>
          </footer>
        </div>