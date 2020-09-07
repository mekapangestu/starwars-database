        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Film of Star Wars Story</h1>

            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Film List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Director</th>
                                    <th>Release Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Director</th>
                                    <th>Release Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1;
                                foreach ($film as $key => $item) :
                                    $id = explode('/', $film[$key]["url"]); ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $film[$key]["title"]; ?></td>
                                        <td><?= $film[$key]["director"]; ?></td>
                                        <td><?= $film[$key]["release_date"]; ?></td>
                                        <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#detailsModal" onclick='getFilmDetails(<?= $id[5]; ?>)'><i class="fa fa-eye"></i> Details</button></td>
                                    </tr>
                                <?php endforeach; ?>
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
                            <li class="list-group-item">Title : <span style="font-weight: bold;" id="title"></span></li>
                            <li class="list-group-item">Episode ID : <span style="font-weight: bold;" id="episode_id"></span></li>
                            <li class="list-group-item">Opening Crawl : <span style="font-weight: bold;" id="opening_crawl"></span></li>
                            <li class="list-group-item">Director : <span style="font-weight: bold;" id="director"></span></li>
                            <li class="list-group-item">Producer : <span style="font-weight: bold;" id="producer"></span></li>
                            <li class="list-group-item">Release Date : <span style="font-weight: bold;" id="release_date"></span></li>
                            <li class="list-group-item">Characters : <span style="font-weight: bold;" id="characters"></span></li>
                            <li class="list-group-item">Planets : <span style="font-weight: bold;" id="planets"></span></li>
                            <li class="list-group-item">Starships : <span style="font-weight: bold;" id="starships"></span></li>
                            <li class="list-group-item">Vehicles : <span style="font-weight: bold;" id="vehicles"></span></li>
                            <li class="list-group-item">Species : <span style="font-weight: bold;" id="species"></span></li>
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