@extends('layout.adminMaster')



@section('admin_content')

    <div class="panel-body">

        <div class="content-area">
            <div class="sub-bar">
                <div class="sub-title">
                    <h4>Dashboard:</h4>
                    <span>Welcome To web Admin Panel!</span>
                </div>
                <ul class="bread-crumb">
                    <li><a href="#" title="">Home</a></li>
                    <li>Dashbord</li>
                </ul>
            </div>
            <div class="gap no-gap">
                <div class="inner-bg  ">
                    <div class="element-title">
                        <h4>about product</h4>
                        <span>Please fill the form bellow.</span> </div>
                    <div class="add-prod-from ">
                        <div class="row ">
                            <form action="{{url('/admin/addProduct')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="col-md-12 ">
                                    <div class="input-group">
                                        <label>name</label>
                                        <input class="form-control" name="name" placeholder="name" type="text">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-5"> <span class="upload-image">upload image</span>
                                    <label class="fileContainer"> <span>upload</span>
                                        <input type="file" name="image" value="upload">
                                    </label>

                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>price</label>
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input class="form-control" name="price" placeholder="price" type="text">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label>category</label>
                                    <select name="type">
                                        <option value="Laptop">Laptop</option>
                                        <option value="Desktop">Desktop</option>
                                        <option value="Tablet">Tablet</option>

                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">

                                    <label>Product Description</label>
                                    <textarea name="detail" cols="30" rows="10" placeholder="Description" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>operating system</label>
                                        <input class="form-control" name="operating" placeholder="operating system" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>display</label>
                                        <input class="form-control" name="display" placeholder="display" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>processor</label>
                                        <input class="form-control" name="processor" placeholder="processor" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>processor tech</label>
                                        <input class="form-control" name="processor_tech" placeholder="processor tech" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>graphics</label>
                                        <input class="form-control" name="graphics" placeholder="graphics" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>memory</label>
                                        <input class="form-control" name="memory" placeholder="memory" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>hard drive</label>
                                        <input class="form-control" name="hard_drive" placeholder="hard drive" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>wireless</label>
                                        <input class="form-control" name="wireless" placeholder="wireless" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>power supply</label>
                                        <input class="form-control" name="power_supply" placeholder="power supply" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>battery</label>
                                        <input class="form-control" name="battery" placeholder="battery" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>sort info 1</label>
                                        <input class="form-control" name="sort_info1" placeholder="sort info" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>sort info 2</label>
                                        <input class="form-control" name="sort_info2" placeholder="sort info" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-5">
                                    <div class="input-group">
                                        <label>sort info 3</label>
                                        <input class="form-control" name="sort_info3" placeholder="sort info" type="text">
                                    </div>
                                </div>











                                <div class="col-md-12">
                                    <div class="buttonz">
                                        <button type="submit">save</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottombar -->
    </div>

@endsection