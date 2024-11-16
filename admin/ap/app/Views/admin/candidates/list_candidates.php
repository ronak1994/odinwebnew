<?= $this->include('admin/common/header') ?>
<?= $this->include('admin/common/menu') ?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Manage Blog</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <button type="button" class="btn btn-rounded btn-primary open-add-form">
                    <span class="btn-icon-left text-primary">
                        <i class="fa fa-plus"></i>
                    </span>Add New Blog
                </button>
            </div>
        </div>
        <!-- Filter Row -->
        <div class="col-12 d-none">
            <div class="filter cm-content-box box-primary">
                <div class="content-title">
                    <div class="cpa">
                        <i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
                    </div>
                    <div class="tools">
                        <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="cm-content-body form excerpt">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <input type="text" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1"
                                    placeholder="Title">
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0 d-none">
                                <select class="form-control default-select dashboard-select-2 h-auto wide"
                                    aria-label="Default select example">
                                    <option selected>Select Status</option>
                                    <option value="1">Published</option>
                                    <option value="2">Draft</option>
                                    <option value="3">Trash</option>
                                    <option value="4">Private</option>
                                    <option value="5">Pending</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <input type="date" name="datepicker" class="form-control mb-xl-0 mb-3">
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <button class="btn btn-primary" title="Click here to Search" type="button"><i
                                        class="fa fa-search me-1"></i>Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filter Row End -->

        <!-- Candidate List Start -->
        <div class="col-12 mx-0 mtm-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List of Blog</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example4" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                // print_r($users);

                                if ($users !== null && !empty($users)): ?>
                                    <?php foreach ($users as $index => $user): ?>
                                        <?php
                                        // Split the content into an array of words
                                        $words = explode(' ', strip_tags($user->content));

                                        // Display only the first 100 words
                                        if (count($words) > 20) {
                                            $content = implode(' ', array_slice($words, 0, 20)) . '...';
                                        } else {
                                            $content = implode(' ', $words);
                                        }
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $index + 1 ?>
                                            </td>
                                            <td>
                                                <img src="<?= $user->image_url ?>" class="rounded-lg me-1" width="44"
                                                    alt="">
                                            </td>
                                            <td style="width: 20%;">

                                                <div class="d-flex align-items-center open-view-form" style="cursor: pointer;" data-id="<?= $user->id ?>">

                                                    <span class="w-space-no">
                                                        <?= $user->name ?>

                                                    </span>
                                                </div>

                                            </td>

                                            <td style="width: 20%;">
                                                <span>
                                                    <i class="fa fa-mobile color-muted"></i>
                                                    <?= $content ?>


                                                </span>
                                            </td>


                                            <td>
                                                <?php
                                                // Assuming $user->created_at is in the format '06-26-2024 09:15 PM'
                                                $createdAt = DateTime::createFromFormat('Y-m-d', $user->created_at);

                                                if ($createdAt) {
                                                    echo $createdAt->format('d/m/Y'); // Output in dd/mm/yyyy format
                                                } else {
                                                    echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                                }
                                                ?> </td>
                                            <td>
                                                <div class="switch">
                                                    <input type="checkbox" data-id="<?= $user->id ?>"
                                                        id="switch<?= $user->id ?>" <?= $user->status == 'Enable' ? 'checked' :
                                                                                        '' ?> class="status_update" value="
                                            <?= $user->status ?>">
                                                    <label for="switch<?= $user->id ?>" class="switch-label"></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button data-bs-toggle="modal" data-bs-target="#basicModal"
                                                    class="btn btn-danger btn-rounded delete-user"
                                                    data-id="<?= $user->id ?>">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <button class="btn btn-warning btn-rounded open-edit-form"
                                                    data-id="<?= $user->id ?>">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center">User not found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Candidate List End -->

    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to delete this admin?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger confirm-delete">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal End -->

<!-- Overlay -->
<div class="overlay"></div>

<!-- Add New Candidate Form -->
<div class="right-sidebar big" id="addCandidateForm">
    <div class="sliding-form">
        <?= $this->include('admin/candidates/candidate_form') ?>
    </div>
</div>
<!-- Overlay -->
<div class="overlay"></div>

<!-- Add New Candidate Form -->
<div class="right-sidebar big" id="userInfo">
    <div class="sliding-form">
        <?= $this->include('admin/candidates/user_info_slider') ?>
    </div>
</div>


<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Operation completed successfully.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
   

    $('.open-edit-form').click(function() {
        var deptId = $(this).data('id');
        $.get(`<?= base_url('admin/candidates/view/getbyid') ?>/${deptId}`, function(data) {

            var userData = data[0];

            console.log(userData);
            // Populate form fields with userData
            $('#user_id').val(userData.user.id);
            $('#author').val(userData.user.author);
            // $('#content').summernote('code', userData.user.content);
            $('#content').val( userData.user.content);
            $('#first_name').val(userData.user.name);
            $('#meta_des').val(userData.user.meta_des);
            $('#meta_tag').val(userData.user.meta_tag);
            $('#blog_tag').val(userData.user.blog_tag);
            $('#meta_title').val(userData.user.meta_title);
            $('#profile_pic').val(userData.user.user_img);
            $('#profile_pic_preview').attr('src', userData.user_img);
            // $('#profile_img').attr('src', userData.user_img);
            const formattedDate = new Date(userData.user.created_at).toISOString().split('T')[0];
            $('#date').val(formattedDate);
            // Populate job preference fields
          



            $('#formTitle').text('Edit User Data');
            $('#addCandidateForm').addClass('show');
            $('.overlay').addClass('show');
        });
    });

    $('.delete-user').click(function() {
        var deptId = $(this).data('id');

        // console.log(deptId);
        $('.confirm-delete').attr('data-id', deptId);
    });

    $('.confirm-delete').click(function() {
        var deptId = $(this).data('id');

        $.ajax({
            type: 'POST',
            url: `<?= base_url('/admin/candidates/view/delete') ?>/${deptId}`,
            success: function(response) {
                location.reload();
            }
        });
    });
    $('.status_update').click(function() {
        var deptId = $(this).data('id'); // Get the data-id attribute of the clicked checkbox
        // var status = $(this).value('data'); // Get the data-id attribute of the clicked checkbox

        $.ajax({
            type: 'POST',
            url: `<?= base_url('/admin/candidates/view/status_update') ?>/${deptId}`,
            success: function(response) {
                location.reload(); // Reload the page upon successful AJAX request
            },
            error: function(xhr, status, error) {
                // Handle any errors here
                console.error('Error:', error);
            }
        });
    });

    $(document).ready(function() {
        $('.open-add-form').click(function() {
            $('#addCandidateForm').addClass('show');
            $('.overlay').addClass('show');
        });
        $('.close-form, .overlay').click(function() {
            $('.right-sidebar').removeClass('show');
            $('.overlay').removeClass('show');
        });

    });
</script>

<?= $this->include('admin/common/footer') ?>