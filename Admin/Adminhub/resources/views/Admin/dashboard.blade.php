@extends('layouts.admin')

@section('title')
    Dashboard | Shop
@endsection

@section('content')
        <div class="row">
          <div class="col-md-6">
            <div class="card card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Backend development</h5>
                <h4 class="card-title">Tasks</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Signer un contrat pour "De quoi les organisateurs de la conférence ont-ils peur?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Des lignes de la grande littérature russe? Ou des e-mails de mon patron?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Inondé: un an plus tard, évaluation de ce qui a été perdu et de ce qui a été trouvé lorsqu'une pluie ravageuse a balayé le métro de Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Liste de toutes les personnes</h5>
                <h4 class="card-title">Statistiques des employés</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive table-hover">
                  <table class="table" id="myTable">
                    <thead class=" text-primary">
                      <th>Nom Complet</th>
                      <th>Pays</th>
                      <th>Ville</th>
                      <th class="text-right">Salaire</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Mrabet saad</td>
                        <td>Maroc</td>
                        <td>Tanger</td>
                        <td class="text-right">27000 Dh</td>
                      </tr>
                      <tr>
                        <td>Rami Ayman</td>
                        <td>Maroc</td>
                        <td>Salé</td>
                        <td class="text-right">29000 Dh</td>
                      </tr>
                      <tr>
                        <td>Tahiri Abdellatif</td>
                        <td>Maroc</td>
                        <td></td>
                        <td class="text-right">30000 Dh</td>
                      </tr>
                      <tr>
                        <td>Boudiab Fadoua</td>
                        <td>Maroc</td>
                        <td></td>
                        <td class="text-right">26000 Dh</td>
                      </tr>
                      <td>Benali imane</td>
                        <td>Maroc</td>
                        <td>tanger</td>
                        <td class="text-right">28000 Dh</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
  @endsection

@section('scripts')
<script>
  $(document).ready( function () {
    $('#myTable').DataTable(
      {
        lengthMenu: [5, 10, 20]
      }
    );
  } );
</script>
@endsection