        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Species of Star Wars Story</h1>

            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Species List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Classification</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Classification</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1;
                                foreach ($species as $key => $item) : $id = explode('/', $species[$key]["url"]); ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $species[$key]["name"]; ?></td>
                                        <td><?= $species[$key]["classification"]; ?></td>
                                        <td><?= $species[$key]["designation"]; ?></td>
                                        <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detailsModal" onclick='getSpeciesDetails(<?= $id[5]; ?>)'><i class="fa fa-eye"></i> Details</button></td>
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
                            <li class="list-group-item">Classification : <span style="font-weight: bold;" id="classification"></span></li>
                            <li class="list-group-item">Designation : <span style="font-weight: bold;" id="designation"></span></li>
                            <li class="list-group-item">Average Height : <span style="font-weight: bold;" id="average_height"></span></li>
                            <li class="list-group-item">Hair Color : <span style="font-weight: bold;" id="hair_color"></span></li>
                            <li class="list-group-item">Skin Color : <span style="font-weight: bold;" id="skin_color"></span></li>
                            <li class="list-group-item">Eye Color : <span style="font-weight: bold;" id="eye_color"></span></li>
                            <li class="list-group-item">Average Lifespan : <span style="font-weight: bold;" id="average_lifespan"></span></li>
                            <li class="list-group-item">Homeworld : <span style="font-weight: bold;" id="homeworld"></span></li>
                            <li class="list-group-item">Language : <span style="font-weight: bold;" id="language"></span></li>
                            <li class="list-group-item">People : <span style="font-weight: bold;" id="people"></span></li>
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