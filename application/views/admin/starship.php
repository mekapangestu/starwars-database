        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Starship of Star Wars Story</h1>

            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Starship List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Manufacturer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Manufacturer</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1;
                                foreach ($starship as $key => $item) : $id = explode('/', $starship[$key]["url"]); ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $starship[$key]["name"]; ?></td>
                                        <td><?= $starship[$key]["model"]; ?></td>
                                        <td><?= $starship[$key]["manufacturer"]; ?></td>
                                        <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detailsModal" onclick='getStarshipsDetails(<?= $id[5]; ?>)'><i class="fa fa-eye"></i> Details</button></td>
                                    </tr>
                                <?php $no++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Details Modal-->
        <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            <li class="list-group-item">Name : <span style="font-weight: bold;" id="name"></span></li>
                            <li class="list-group-item">Model : <span style="font-weight: bold;" id="model"></span></li>
                            <li class="list-group-item">Manufacturer : <span style="font-weight: bold;" id="manufacturer"></span></li>
                            <li class="list-group-item">Cost in Credits : <span style="font-weight: bold;" id="cost_in_credits"></span></li>
                            <li class="list-group-item">Length : <span style="font-weight: bold;" id="length"></span></li>
                            <li class="list-group-item">Max Atmosphering Speed : <span style="font-weight: bold;" id="max_atmosphering_speed"></span></li>
                            <li class="list-group-item">Crew : <span style="font-weight: bold;" id="crew"></span></li>
                            <li class="list-group-item">Passengers : <span style="font-weight: bold;" id="passengers"></span></li>
                            <li class="list-group-item">Cargo Capacity : <span style="font-weight: bold;" id="cargo_capacity"></span></li>
                            <li class="list-group-item">Consumables : <span style="font-weight: bold;" id="consumables"></span></li>
                            <li class="list-group-item">Hyperdrive Rating: <span style="font-weight: bold;" id="hyperdrive_rating"></span></li>
                            <li class="list-group-item">MGLT : <span style="font-weight: bold;" id="MGLT"></span></li>
                            <li class="list-group-item">Starship Class : <span style="font-weight: bold;" id="starship_class"></span></li>
                            <li class="list-group-item">Pilots : <span style="font-weight: bold;" id="pilots"></span></li>
                            <li class="list-group-item">Films : <span style="font-weight: bold;" id="films"></span></li>
                            <li class="list-group-item">Created : <span style="font-weight: bold;" id="created"></span></li>
                            <li class="list-group-item">Edited : <span style="font-weight: bold;" id="edited"></span></li>
                            <li class="list-group-item">Url : <span style="font-weight: bold;" id="url"></span></li>

                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>