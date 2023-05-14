@extends('AdminLayout')
@section('admin_content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Liệt kê tin tức</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Tin tức</li>
                    <li class="breadcrumb-item active">Liệt kê tin tức</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
      <!-- Zero Configuration  Starts-->
      <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0" style="display:flex; justify-content: space-between;">
                <h3>Tin tức</h3>
                <span style=" margin-top: 3px;">
                    @include('Backend.admin.alert')
              </span>
            </div>

            <div class="card-body">
                <a href="{{route('blogs.create')}}">
                    <button class="btn btn-primary mb-3" >Thêm tin tức</button>
                </a>
                <div class="table-responsive">
                <table class="display" id="basic-1">
                    <thead>
                    <tr style="text-align: center">
                        <th style="width: 20px">STT</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Hình ảnh</th>
                        <th>Danh mục</th>
                        <th>Nội dung</th>
                        <th>Thời gian</th>
                        <th style="width: 120px;">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1
                        @endphp
                     @foreach ($blogs as $key => $blog)
                        <tr>
                            <td style="text-align: center ; width: 20px">{{ $stt++ }}</td>
                            <td style="text-align: center">{{ $blog->title}}</td>
                            <td style="text-align: center">{{ $blog->subtitle}}</td>
                            <td style="text-align: center">
                                <img src="{{$blog->blog_path}}" alt="" style="width: 200px; height: 130px; border-radius: 6px">
                            </td>
                            <td style="text-align: center">{{ $blog->category}}</td>
                            <td style="text-align: center">{{ $blog->content}}</td>
                            <td style="text-align: center">{{ $blog->created_at->format(" d-m-Y")}}</td>
                            <td>
                            <ul class="action" style="justify-content: center;">
                                <li class="edit"> <a href="{{route('blogs.edit', $blog->id)}}"><i class="icon-pencil-alt"></i></a></li>

                                <form class="form theme-form" action="{{route('blogs.destroy', $blog->id)}}" method="Post">
                                  @method('DELETE')
                                    @csrf
                                        <button class="delete" style="cursor: pointer; border:none"  onclick="return confirm('Bạn có muốn xóa tin tức này không ?');"><i class="icon-trash"></i></button>
                                </form>
                            </ul>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
      <!-- Zero Configuration  Ends-->
@endsection
