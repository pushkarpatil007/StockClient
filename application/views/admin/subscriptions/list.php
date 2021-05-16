<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Subscription Master</li>
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
            <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Subscription</button>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Subscription List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Member ID</th>
                                <th>Plan</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Payment ID</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Member ID</th>
                                <th>Plan</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Payment ID</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                foreach($subscriptions as $s) {
                            ?>
                            <tr>
                                <td><?php echo $s->id ?></td>
                                <td><?php echo $s->member_id ?></td>
                                <td><?php echo $s->plan ?></td>
                                <td><?php echo $s->start_date ?></td>
                                <td><?php echo $s->end_date ?></td>
                                <td><?php echo $s->payment_id ?></td>
                                <td><?php echo $s->active ?></td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</button></a>
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