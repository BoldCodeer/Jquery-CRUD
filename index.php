<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="content mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Keith Andrew Relles - AJAX CRUD TECHNICAL EXAM</h4>
                        
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                            ADD
                        </button> -->

                        <!-- Insert Modal -->
                        <!-- <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="error-message">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Product Name</label>
                                        <input type="text" class="form-control name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Unit</label>
                                        <input type="number" class="form-control unit">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Price</label>
                                        <input type="number" class="form-control price">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Date of Expiry</label>
                                        <input type="text" class="form-control expiry">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Inventory</label>
                                        <input type="number" class="form-control inventory">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Inventory Cost</label>
                                        <input type="number" class="form-control cost">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Image</label>
                                        <input type="text" class="form-control image">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary product_add_ajax">Submit</button>
                            </div>
                            </div>
                        </div>
                        </div> -->

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#testProductModal">
                            Add
                        </button>

                        <!-- Insert Modal -->
                        <div class="modal fade" id="testProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="error-message">

                                        </div>
                                    </div>
                                    <form action="ajax-crud/code.php" id="insertData" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Product Name</label>
                                                <input type="text" class="form-control name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Unit</label>
                                                <input type="number" class="form-control unit">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Price</label>
                                                <input type="number" id="price" class="form-control price">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Date of Expiry</label>
                                                <input type="date" class="form-control expiry">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Inventory</label>
                                                <input type="number" id="inv" class="form-control inventory">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Inventory Cost</label>
                                                <input type="number" id="inv_cost" class="form-control cost" disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Product Image</label>
                                                    <input type="file" class="form-control prod_image">
                                                    <div id="imagePreview"></div>
                                            </div>
                                        </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary save_prod_image">Submit</button>
                                    <!-- product_add_ajax -->
                                </div>
                                </form>
                            </div>
                        </div>
                        </div>

                        <!-- View Modal -->
                        <div class="modal fade" id="prodViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detail View</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="name_view"></p>
                                <p class="unit_view"></p>
                                <p class="price_view"></p>
                                <p class="expiry_view"></p>
                                <p class="inventory_view"></p>
                                <p class="cost_view"></p>
                                <img style="width:200px; height: 200px" class="image_view" src="" alt="Product Image">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="prodEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">   
                                <form id="editData" action="ajax-crud/code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" id="id_edit">
                                        <div class="col-md-12">
                                            <div class="error-message-update">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Product Name</label>
                                            <input type="text" id="edit_name" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Unit</label>
                                            <input type="number" id="edit_unit" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Price</label>
                                            <input type="number" id="edit_price" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Date of Expiry</label>
                                            <input type="date" id="edit_expiry" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Inventory</label>
                                            <input type="number" id="edit_inventory" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Inventory Cost</label>
                                            <input type="number" id="edit_cost" class="form-control" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Image</label>
                                            <input type="file" id="edit_image" class="form-control">
                                        </div>
                                        <div> 
                                            <i>Current image: <span id="current-image-display"></span></i>
                                            <input type="hidden" id="current-image">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary product_update_ajax">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        </div>

                        <!-- Delete Modal -->
                        <!-- <div class="modal fade" id="prodDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm and Delete Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <tr>
                                        <td><input type="hidden" id="id_delete"></td>
                                    </tr>
                                    <div class="col-md-12">
                                        Are you sure want to delete this data?
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger product_delete_ajax">Yes Delete</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div> -->

                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="delete-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this item?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger" id="confirm-delete">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="message-show">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Unit</th>
                                        <th>Price</th>
                                        <th>Date Expiry</th>
                                        <th>Inventory</th>
                                        <th>Cost</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="productdata">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            getdata();

            // ADD
            // Get references to the input fields
            const input1 = document.getElementById('inv');
            const input2 = document.getElementById('inv_cost');
            const input3 = document.getElementById('price');

            input1.value = 0;
            input3.value = 0;

            // Add an input event listener to input1
            input1.addEventListener('input', function() {
                // Get the values from input1 and input3 and convert them to numbers
                const valueFromInput1 = parseFloat(input1.value) || 0; // Use parseFloat to handle decimal values
                const valueFromInput3 = parseFloat(input3.value) || 0;

                // Calculate the total
                const total = valueFromInput1 * valueFromInput3;

                // Update the value of input2 with the calculated total
                input2.value = total.toFixed(2); // Display the total with 2 decimal places
            });

            // Edit
            // Get references to the input fields
            const input4 = document.getElementById('edit_inventory');
            const input5 = document.getElementById('edit_cost');
            const input6 = document.getElementById('edit_price');

            // Add an input event listener to input1
            input4.addEventListener('input', function() {
                // Get the values from input1 and input3 and convert them to numbers
                const valueFromInput4 = parseFloat(input4.value) || 0; // Use parseFloat to handle decimal values
                const valueFromInput6 = parseFloat(input6.value) || 0;

                // Calculate the total
                const total = valueFromInput4 * valueFromInput6;

                // Update the value of input2 with the calculated total
                input5.value = total.toFixed(2); // Display the total with 2 decimal places
            });


            $('.save_prod_image').click(function (e) {
                e.preventDefault();

                var formData = new FormData($('#insertData')[0]);

                // Add other form data to the formData object
                formData.append('name', $('.name').val());
                formData.append('unit', $('.unit').val());
                formData.append('price', $('.price').val());
                formData.append('expiry', $('.expiry').val());
                formData.append('inventory', $('.inventory').val());
                formData.append('cost', $('.cost').val());

                // Append the image file to the formData object
                formData.append('prod_image', $('.prod_image')[0].files[0]);

                formData.append('checking_add_image', true);

                //console.log(formData);

                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('#testProductModal').modal('hide');
                        $('.message-show').append('\
                            <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                <strong>Hey!</strong> ' + response + '.\
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                            </div>\
                        ');

                        // Clear the form fields
                        $('.name').val("");
                        $('.unit').val("");
                        $('.price').val("");
                        $('.expiry').val("");
                        $('.inventory').val("");
                        $('.cost').val("");
                        $('.prod_image').val(""); // Clear the file input

                        // Refresh the product data
                        $('.productdata').empty();
                        getdata();
                    },
                    error: function (error) {
                        console.log(error);
                        // Handle errors here
                    }
                });
            });


            // Handle the Delete button click in the confirmation modal
            $('#confirm-delete').click(function () {
                var prod_id = $(this).data('prod_id');
                $('#delete-confirmation-modal').modal('hide');

                // Send an AJAX request to delete the item
                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: {
                        'checking_delete': true,
                        'prod_id': prod_id,
                    },
                    success: function (response) {
                        $('.message-show').append('\
                            <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                <strong>Hey!</strong> ' + response + '.\
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                            </div>\
                        ');

                        // Refresh the data
                        $('.productdata').empty();
                        getdata();
                    }
                });
            });

            $(document).on("click", ".deletebtn", function () {

                var prod_id = $(this).closest('tr').find('.prod_id').text();
                $('#confirm-delete').data('prod_id', prod_id);

                // Show the confirmation modal
                $('#delete-confirmation-modal').modal('show');
            });

            $('.product_update_ajax').click(function (e){
                e.preventDefault();

                // var prod_id   = $('#id_edit').val();
                // var name      = $('#edit_name').val();
                // var unit      = $('#edit_unit').val();
                // var price     = $('#edit_price').val();
                // var expiry    = $('#edit_expiry').val();
                // var inventory = $('#edit_inventory').val();
                // var cost      = $('#edit_cost').val();
                // var image     = $('#edit_image').val();

                var formData = new FormData($('#editData')[0]);

                formData.append('prod_id', $('#id_edit').val());
                formData.append('name', $('#edit_name').val());
                formData.append('unit', $('#edit_unit').val());
                formData.append('price', $('#edit_price').val());
                formData.append('expiry', $('#edit_expiry').val());
                formData.append('inventory', $('#edit_inventory').val());
                formData.append('cost', $('#edit_cost').val());
                formData.append('prev_image', $('#current-image').val());

                // Append the image file to the formData object
                formData.append('edit_image', $('#edit_image')[0].files[0]);

                formData.append('checking_update', true);

                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                        $('#prodEditModal').modal('hide');
                        $('.message-show').append('\
                            <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                <strong>Hey!</strong> ' + response + '.\
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                            </div>\
                        ');

                        // Clear the form fields
                        $('#edit_name').val("");
                        $('#edit_unit').val("");
                        $('#edit_price').val("");
                        $('#edit_expiry').val("");
                        $('#edit_inventory').val("");
                        $('#edit_cost').val("");

                        // Refresh the product data
                        $('.productdata').empty();
                        getdata();
                    },
                    error: function (error) {
                        console.log(error);
                        // Handle errors here
                    }
                });

                // if(name != '' && unit != '' && price != '' && expiry != '' && inventory != '' && cost != '' && image != '')
                // {
                //     $.ajax({
                //         type: "POST",
                //         url: "ajax-crud/code.php",
                //         data: {
                //             'checking_update':true,
                //             'prod_id': prod_id,
                //             'product_name': name,
                //             'unit': unit,
                //             'price': price,
                //             'expiry': expiry,
                //             'inventory': inventory,
                //             'cost': cost,
                //             'image': image,
                //         },
                //         success: function (response) {
                //             $('#prodEditModal').modal('hide');
                //             $('.message-show').append('\
                //                 <div class="alert alert-success alert-dismissible fade show" role="alert">\
                //                     <strong>Hey!</strong> '+response+'.\
                //                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                //                 </div>\
                //             ');
                //             $('.productdata').empty();
                //             getdata();

                //         }
                //     });
                // }
                // else
                // {
                //     $('.error-message-update').append('\
                //         <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                //             <strong>Hey!</strong> Please enter all fields.\
                //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                //         </div>\
                //     ');

                // }
                
            });

            $(document).on("click", ".editbtn", function () {
                var prod_id = $(this).closest('tr').find('.prod_id').text();
                // alert(prod_id);

                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: {
                        'checking_edit': true,
                        'prod_id': prod_id,
                    },
                    success: function (response) {
                        //console.log(response);
                        $.each(response, function (key, prodedit) { 
                            console.log(prodedit);
                            $('#id_edit').val(prodedit['id']);
                            $('#edit_name').val(prodedit['product_name']);
                            $('#edit_unit').val(prodedit['unit']);
                            $('#edit_price').val(prodedit['price']);
                            $('#edit_expiry').val(prodedit['date_expiry']);
                            $('#edit_inventory').val(prodedit['available_inventory']);
                            $('#edit_cost').val(prodedit['available_inventory_cost']);
                            $('#current-image-display').text(prodedit['image']);
                            $('#current-image').val(prodedit['image']);
                        });
                        $('#prodEditModal').modal('show');
                    }
                });
            });

            $(document).on("click", ".viewbtn", function () {
                var prod_id = $(this).closest('tr').find('.prod_id').text();
                //alert(prod_id);
                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: {
                        'checking_view': true,
                        'prod_id': prod_id,
                    },
                    success: function (response) {
                        //console.log(response);
                        $.each(response, function (key, prodview) { 
                            //console.log(prodview);
                            $('.name_view').text(prodview['product_name']);
                            $('.unit_view').text(prodview['unit']);
                            $('.price_view').text(prodview['price']);
                            $('.expiry_view').text(prodview['date_expiry']);
                            $('.inventory_view').text(prodview['available_inventory']);
                            $('.cost_view').text(prodview['available_inventory_cost']);

                            var imageUrl = 'upload/' + prodview['image'];

                            $('.image_view').attr('src', imageUrl);
                        });
                        $('#prodViewModal').modal('show');
                    }
                });
            });

            // $(".editbtn").click(function () {
            //     var prod_id = $(this).closest('tr').find('.prod_id').text();
            //     alert(prod_id);
            //     // $.ajax({
            //     //     type: "POST",
            //     //     url: "ajax-crud/code.php",
            //     //     data: {
            //     //         'checking_view': true,
            //     //         'prod_id': prod_id,
            //     //     },
            //     //     success: function (response) {
            //     //         //console.log(response);
            //     //         $.each(response, function (key, prodview) { 
            //     //             //console.log(prodview);
            //     //             $('.name_view').text(prodview['product_name']);
            //     //             $('.unit_view').text(prodview['unit']);
            //     //             $('.price_view').text(prodview['price']);
            //     //             $('.expiry_view').text(prodview['date_expiry']);
            //     //             $('.inventory_view').text(prodview['available_inventory']);
            //     //             $('.cost_view').text(prodview['available_inventory_cost']);

            //     //             var imageUrl = 'upload/' + prodview['image'];

            //     //             $('.image_view').attr('src', imageUrl);
            //     //         });
            //     //         $('#prodViewModal').modal('show');
            //     //     }
            //     // });
            // });

            $('.product_add_ajax').click(function (e){
                e.preventDefault();

                var name      = $('.name').val();
                var unit      = $('.unit').val();
                var price     = $('.price').val();
                var expiry    = $('.expiry').val();
                var inventory = $('.inventory').val();
                var cost      = $('.cost').val();
                var image     = $('.image').val();

                if(name != '' && unit != '' && price != '' && expiry != '' && inventory != '' && cost != '' && image != '')
                {
                    $.ajax({
                        type: "POST",
                        url: "ajax-crud/code.php",
                        data: {
                            'checking_add':true,
                            'product_name': name,
                            'unit': unit,
                            'price': price,
                            'expiry': expiry,
                            'inventory': inventory,
                            'cost': cost,
                            'image': image,
                        },
                        success: function (response) {
                            $('#addProductModal').modal('hide');
                            $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> '+response+'.\
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                                </div>\
                            ');
                            $('.productdata').empty();
                            getdata();

                            $('.name').val("");
                            $('.unit').val("");
                            $('.price').val("");
                            $('.expiry').val("");
                            $('.inventory').val("");
                            $('.cost').val("");
                            $('.image').val("");
                        }
                    });
                }
                else
                {
                    $('.error-message').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> Please enter all fields.\
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                        </div>\
                    ');

                }
                
            });
        });
        function getdata()
        {
            $.ajax({
                type: "GET",
                url: "ajax-crud/fetch.php",
                success: function (response) {
                    $.each(response, function (key, value) { 
                        $('.productdata').append('<tr>'+
                            '<td class="prod_id">' + value['id'] + '</td>' +
                            '<td>' + value['product_name'] + '</td>' +
                            '<td>' + value['unit'] + '</td>' +
                            '<td>' + value['price'] + '</td>' +
                            '<td>' + value['date_expiry'] + '</td>' +
                            '<td>' + value['available_inventory'] + '</td>' +
                            '<td>' + value['available_inventory_cost'] + '</td>' +
                            '<td><img style="width: 100px; 125px;" src="upload/' + value['image'] + '"></td>' +
                            '<td>' +
                                '<a href="#" class="viewbtn">VIEW</a><br>' +
                                '<a href="#" class="editbtn">EDIT</a><br>' +
                                '<a href="#" class="deletebtn">DELETE</a><br>' +
                            '</td>' +
                        '</tr>');
                    });

                }
            });
        }
    </script>
  </body>
</html>