        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Character of Star Wars Story</h1>

            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Character List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <!-- <table id="tblpeople" class="table table-striped table-bordered" style="width:100%"> -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Height</th>
                                    <th>Mass</th>
                                    <th>Birth Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Height</th>
                                    <th>Mass</th>
                                    <th>Birth Year</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1;
                                foreach ($people as $key => $item) : $id = explode('/', $people[$key]["url"]); ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $people[$key]["name"]; ?></td>
                                        <td><?= $people[$key]["height"]; ?></td>
                                        <td><?= $people[$key]["mass"]; ?></td>
                                        <td><?= $people[$key]["birth_year"]; ?></td>
                                        <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detailsModal" onclick='getPeopleDetails(<?= $id[5]; ?>)'><i class="fa fa-eye"></i> Details</button></td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
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
                            <li class="list-group-item">Height : <span style="font-weight: bold;" id="height"></span></li>
                            <li class="list-group-item">Mass : <span style="font-weight: bold;" id="mass"></span></li>
                            <li class="list-group-item">Hair Color : <span style="font-weight: bold;" id="hair_color"></span></li>
                            <li class="list-group-item">Skin Color : <span style="font-weight: bold;" id="skin_color"></span></li>
                            <li class="list-group-item">Eye Color : <span style="font-weight: bold;" id="eye_color"></span></li>
                            <li class="list-group-item">Birth Year : <span style="font-weight: bold;" id="birth_year"></span></li>
                            <li class="list-group-item">Gender : <span style="font-weight: bold;" id="gender"></span></li>
                            <li class="list-group-item">Homeworld : <span style="font-weight: bold;" id="homeworld"></span></li>
                            <li class="list-group-item">Films : <span style="font-weight: bold;" id="films"></span></li>
                            <li class="list-group-item">Species : <span style="font-weight: bold;" id="species"></span></li>
                            <li class="list-group-item">Vehicles : <span style="font-weight: bold;" id="vehicles"></span></li>
                            <li class="list-group-item">Starships : <span style="font-weight: bold;" id="starships"></span></li>
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