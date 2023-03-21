{{-- @extends('ADmin.admin_layout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Thuộc tính của sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Thuộc tính sản phẩm</li>
                    <li class="breadcrumb-item active">Sửa thuộc tính sản phẩm</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0" style="display:flex; justify-content: space-between;">
                      <h3>Sửa thuộc tính Sản Phẩm</h3>
                      <span style=" margin-top: 3px;">
                        @include('Backend.admin.alert')
                      </span>
                    </div>

                    <form class="form theme-form" action="{{route('attribute.update',$attr->id)}}" method="Post">
                        @method('PUT')
                        @csrf
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên thuộc tính</label>
                                    <div class="col-sm-9">
                                        <select class="form-select digits" value="{{$attr->attr_name}}" name="attr_name" id="InputName">
                                            <option value="color">Màu sắc</option>
                                            <option value="size">Kích thước</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row value1"  >
                                    <label class="col-sm-3 col-form-label pt-0">Giá trị</label>
                                    <div class="col-sm-9">
                                      <input id="slug1" class="form-control form-control-color" style="max-width: 16rem;" value="{{$attr->attr_value}}" type="color" name="attr_value">
                                    </div>
                                </div>
                                <div class="row value2" style="display: none">
                                    <label class="col-sm-3 col-form-label pt-0">Giá trị</label>
                                    <div class="col-sm-9">
                                      <input id="slug2" class="form-control " type="text"   value="{{$attr->attr_value}}"  name="">
                                    </div>
                                </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-end">
                        <div class="col-sm-9 offset-sm-3">
                        <button class="btn btn-primary" name="add_properties" type="submit">Cập nhật</button>
                        <a  href="{{route('attribute.index')}}">
                            <input class="btn btn-light" style="width: 136px;" value="Trở lại">
                        </a>
                        </div>
                    </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('public/Backend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script>
    $('#InputName').change(function(event){
        var _ip = $('#InputName').val();
        if(_ip == 'size'){
            $('.value2').show();
            $('#slug2').attr({
                name: 'properties_value',
            });
            $('.value1').hide();
            $('#slug1').attr({
                name: '',
            });
        }
        else{
            $('.value1').show();
            $('#slug1').attr({
                name: 'properties_value',
            });
            $('.value2').hide();
            $('#slug2').attr({
                name: '',
            });
        }
    })
</script>
@endsection --}}
