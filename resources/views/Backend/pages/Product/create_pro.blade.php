@extends('AdminLayout')
@section('admin_content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Sản phẩm</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Sản phẩm</li>
                    <li class="breadcrumb-item active">Thêm Sản phẩm</li>
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
                        <h3>Thêm Sản Phẩm</h3>
                        <span style=" margin-top: 3px;">
                              @include('Backend.admin.alert')
                        </span>
                    </div>
                    <form class="form theme-form" action="{{route('product.store')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tên thương hiệu</label>
                                        <div class="col-sm-9">
                                            <select name="brand_id" class="form-select select_brand">
                                                <option value= "">Thương hiệu: </option>
                                                @foreach ($brand as $key => $br)
                                                    <option value="{{$br->id}}">{{$br->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Chọn danh mục:</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits select_2" name="category_id" >
                                                <option value= "">danh mục: </option>
                                                {!!$htmlOption!!}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"  type="text" id="slug" onkeyup="ChangeToSlug()" name="pro_name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                        <input class="form-control"  id="convert_slug" type="text" name="slug">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Giá tiền</label>
                                        <div class="col-sm-9">
                                        <input class="form-control"  type="text"  name="pro_price">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="col-sm-3 col-form-label pt-0">Màu sắc</label>
                                                <div >
                                                    @foreach ($color as $key=> $value)
                                                        <input style="font-size: 20px"  class="form-check-input" type="checkbox"  value="{{$value->id}}" name="id_attr[]">
                                                        <i data-feather="shopping-bag" style="margin-right: 10px; position: relative; top: 2px; color:{{$value->attr_value}}"></i>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Kích thước</label>
                                                <div >
                                                    @foreach ($size as $key=> $value)
                                                        <input style="font-size: 20px"  class="form-check-input" type="checkbox" value="{{$value->id}}" name="id_attr[]">
                                                        <span style="font-size: 16px; margin-right: 6px; position: relative; top: 3px;">{{$value->attr_value}} </span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                        <input class="form-control"  type="file"  name="feature_image">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ảnh chi tiết</label>
                                        <div class="col-sm-9">
                                        <input class="form-control"  type="file" multiple  name="image_path[]">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nhập tag cho sản phẩm:</label>
                                        <div class="col-sm-9" >
                                            <select name="tags[]" class="form-control tag_select" multiple="multiple">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nội dung</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control tinymce_edit" style="resize: none" rows="6" cols="6" name="pro_content" placeholder="Nội dung sản phẩm"></textarea>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" name="pro_status" >
                                                <option value= "0">Ẩn </option>
                                                <option value="1">Hiển thị</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Thêm</button>
                                <a href="{{route('product.index')}}">
                                    <input class="btn btn-light" style="width: 136px;" value="Xem chi tiết">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script src="/path-to-your-tinymce/tinymce.min.js"></script>
<script>
    var editor_config = {
      path_absolute : "/",
      selector: 'textarea.tinymce_edit',
      relative_urls: false,
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table directionality",
        "emoticons template paste textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      file_picker_callback : function(callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.openUrl({
          url : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no",
          onMessage: (api, message) => {
            callback(message.content);
          }
        });
      }
    };

    tinymce.init(editor_config);
</script> --}}
@endsection
