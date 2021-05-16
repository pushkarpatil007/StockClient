<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/dashboard") ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/members-master/list") ?>">Members Master</a></li>
            <li class="breadcrumb-item active">Edit Member</li>
        </ol>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <form method="post" action="<?php echo base_url('admin/members-master/save') ?>">
                <div class="form-group">
                    <label for="inputAddress">Member ID : <?php echo$member->id ?></label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="First Name" value="<?php echo$member->first_name ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" value="<?php echo$member->last_name ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo$member->email ?>">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Mobile</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile" value="<?php echo$member->mobile ?>">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Password</label>
                    <input type="password" class="form-control" id="email" placeholder="Password" value="<?php echo$member->password ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

    </div>
</main>