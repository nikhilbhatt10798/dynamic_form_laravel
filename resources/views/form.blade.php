<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="h2 text-center"> Dynamice Form </div>
    </header>
    <main class="container">
        <div id="result">

        </div>
        <div class="card">
            <div class="card-header text-center">
                User
                <button class="btn btn-success" style="float: right;" onclick="addProduct()">Add product</button>
              </div>
            <div class="card-body">
                <form id="dynamic_form" >
                    <div id="user_detail">
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control"  name="name" placeholder="Enter Name">
                              </div>
                              <div class="form-group col-4">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                              </div>
                              <div class="form-group col-4">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="number" class="form-control"  pattern="[0-9]{10}" name="phone" placeholder="Enter Phone Number">
                              </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-4">
                                <label for="country">Country</label>
                                <select class="form-control" name="country">
                                    <option>India</option>
                                  </select>
                              </div>
                              <div class="form-group col-4">
                                <label for="State">State</label>
                                <select class="form-control" name="state">
                                    <option>Uttarakhand</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Punjab</option>
                                  </select>
                              </div>
                              <div class="form-group col-4">
                                  <label for="zip">Zip</label>
                                  <input type="number" pattern="[0-9]{6}" class="form-control" name="zip" placeholder="Enter Zip code">
                              </div>
                        </div>
                    </div>
                     <div id="product_detail">
                        {{-- <div id="0product" class="border border-grey p-2 m-2">
                            <div class="text-center">
                                Product
                            <span class="btn btn-danger" style="float: right;" onclick="removeProduct('0product')">remove</span>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Product Name</label>
                                    <input type="text" class="form-control" name="product_name[]"  >
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Product Quantity</label>
                                    <input type="number" class="form-control" name="product_quantity[]"  >
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Product Brand</label>
                                    <input type="text" class="form-control" name="product_Brand[]"  >
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Product Catagory</label>
                                    <input type="text" class="form-control" name="product_catagory[]"  >
                                </div>
                            </div>
                        </div> --}}
                     </div>


                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

    let count = 0;
    function addProduct(){
        count++;
        html = `
        <div id="${count}Product" class="border border-grey p-2 m-2">
                        <div class="text-center">
                            Product
                        <span class="btn btn-danger" style="float: right;" onclick="removeProduct('${count}Product')">remove</span>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Product Name</label>
                                <input type="text" class="form-control" name="product_name[]"  >
                            </div>
                            <div class="form-group col-6">
                                <label for="">Product Quantity</label>
                                <input type="number" class="form-control" name="product_quantity[]"  >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Product Brand</label>
                                <input type="text" class="form-control" name="product_Brand[]"  >
                            </div>
                            <div class="form-group col-6">
                                <label for="">Product Catagory</label>
                                <input type="text" class="form-control" name="product_catagory[]"  >
                            </div>
                        </div>
                    </div> `;

        $('#product_detail').append(html);
    }
    function removeProduct(id){
        // console.log(id);
        $('#'+id).remove();
    }
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $(document).ready(function(e){
    $('#dynamic_form').on('submit',function(e){
        e.preventDefault();
        const form = document.getElementById('dynamic_form');
        // console.log(form);
        const formData = new FormData(form);
        const token = "{{ csrf_token() }}";
        // console.log(Array.from(formData));

        $.ajax({
            type:'post',
            url:"{{ route('submit') }}",
            data:formData,
            contentType: false,
            cache: false,
            processData:false,
            success:function(result){
                console.log(result);
                if(result=="done"){
                    form.reset();
                    count=0;
                    let resHtml = `<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>created Successfully!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>`
$('#result').html(resHtml)
$('#product_detail').html('');
                }
                if(result=="not done"){
                    resHtml = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Something is wrong try again!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>`
$('#result').html(resHtml)
                }
            },
            error:function(error){
                console.log(error);
            }
        });
    });
    });
</script>
</html>
