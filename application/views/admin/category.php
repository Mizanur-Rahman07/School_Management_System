<?php 
        $this->load->view('admin/header');

?>

<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Category (2) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New category</a></h3>
            <div style="padding: 40px 15px 0px 15px;">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mizan</td>
                                <td><input type="checkbox" name="status"></td>
                                <td class="center">
                                    <a href="" class="btn btn-danger" ><i class="fa fa-trash-o" oria-hidden="true"></i></a>
                                    <a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add category popup model start -->

<!-- button popup link start -->
<!-- data-toggle="modal" data-target="#myModal" -->
<!-- button popup link end -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add new Category</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . '/School/category' ?>" id="add_category">
                    <div class="form-group">
                        <label>Enter Category Name</label>
                        <input type="text" name="name" class="form-control" id="category" placeholder="Enter category Name" required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit"  class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Add category popup model end -->


<?php
        $this->load->view('admin/footer');
?>