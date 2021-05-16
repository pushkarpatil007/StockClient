<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Members Master</li>
        </ol>
        <!--
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        -->
        <div class="lg-12 mb-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddMember"><i class="fas fa-user-plus"></i> Add Member</button>

            <!-- Modal Add -->
            <div class="modal fade" id="modalAddMember" tabindex="-1" role="dialog" aria-labelledby="modalAddCompanyTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <form method="post" action="<?php echo base_url() ?>members-master/add" id="formAddMember">

                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAddCompanyTitle">Add Company</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Comapny Name" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleFormControlInput1">City</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="city" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Company</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- Modal Add Ends -->


        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Member List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                foreach($members as $m) {
                            ?>
                            <tr>
                                <td><?php echo $m->id ?></td>
                                <td><?php echo $m->first_name .' '. $m->last_name ?></td>
                                <td><?php echo $m->email ?></td>
                                <td><?php echo $m->mobile ?></td>
                                <td>
                                    <a href="<?php echo base_url("admin/members-master/edit/" . $m->id) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</button></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>