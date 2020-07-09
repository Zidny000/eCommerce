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
                            <form action="{{url('/admin/'.$product->id.'/update_confirm')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="col-md-12 ">
                                    <div class="input-group">
                                        <label>name</label>
                                        <input class="form-control" name="name" value="{{$product->title}}" type="text">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-5"> <span class="upload-image">upload image</span>
                                    <label class="fileContainer"> <span>upload</span>
                                        <input type="file" name="image" value="{{$product->image}}" >
                                    </label>


                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>price</label>
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input class="form-control" name="price" placeholder="$20" type="text" value="{{$product->price}}">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label>category</label>
                                    <select name="type">
                                        @foreach($types as $type)
                                            @if($product->type == $type)
                                            <option value="{{$product->type}}" selected >{{$product->type}}</option>
                                            @else
                                            <option value="{{$type}}">{{$type}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">

                                        <label>Product Description</label>
                                        <textarea name="detail" cols="30" rows="10"  >{{$product->details}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>operating system</label>
                                        <input class="form-control" name="operating" value="{{$product->operating}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>display</label>
                                        <input class="form-control" name="display" value="{{$product->display}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>processor</label>
                                        <input class="form-control" name="processor" value="{{$product->processor}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>processor tech</label>
                                        <input class="form-control" name="processor_tech" value="{{$product->processor_tech}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>graphics</label>
                                        <input class="form-control" name="graphics" value="{{$product->graphics}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>memory</label>
                                        <input class="form-control" name="memory" value="{{$product->memory}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>hard drive</label>
                                        <input class="form-control" name="hard_drive" value="{{$product->hard_drive}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>wireless</label>
                                        <input class="form-control" name="wireless" value="{{$product->wireless}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>power supply</label>
                                        <input class="form-control" name="power_supply" value="{{$product->power_supply}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>battery</label>
                                        <input class="form-control" name="battery" value="{{$product->battery}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>sort info 1</label>
                                        <input class="form-control" name="sort_info1" value="{{$product->sort1}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <label>sort info 2</label>
                                        <input class="form-control" name="sort_info2" value="{{$product->sort2}}" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-5">
                                    <div class="input-group">
                                        <label>sort info 3</label>
                                        <input class="form-control" name="sort_info3" value="{{$product->sort3}}" type="text">
                                    </div>
                                </div>











                                <div class="col-md-12">
                                    <div class="buttonz">
                                        <button type="submit">Update</button>

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