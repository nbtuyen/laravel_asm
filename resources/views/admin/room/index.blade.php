<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.css')}}" />
<style>
        .owl-carousel img{
        width: 100%;
    }
    .table td{
        text-align: center;
    }
    .table th{
        text-align: center;
        
    }
</style>
@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Phòng</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class=""></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh Sách phòng</h3>
                        </div>
                        <div class="card-body">
                            <table class="table tabl-stripped">
                                <thead>
                                    <th>STT</th>
                                    <th>Tên Phòng</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Mô Tả</th>
                                    {{-- <th>Đặc Trưng</th>
                                    <th>Trạng Thái</th> --}}
                                    <!-- <th>Ngày Tạo</th>
                                    <th>Ngày Sửa</th> -->
                                    <th>
                                        <a href="{{route('room_add')}}" class="btn btn-sm btn-success">Tạo mới</a>
                                    </th>
                                </thead>
                                <tbody>
                                   @foreach ($list_room as $index =>$item)
                                        <tr>
                                <td width=50px> {{$index + 1}}</td>
                                <td width=200px>{{$item->name}}</td>
                                <td  style="width: 200px;">
                                <div class="owl-carousel" style="width:200px" >
                                <img id="mat_truoc_preview"src="{{ $item->image?''.Storage::url($item->image):'http://placehold.it/100x100' }}"alt="your image" class="img-responsive" width=100% height=50% >
                                <img id="mat_truoc_preview"src="{{ $item->image1?''.Storage::url($item->image1):'http://placehold.it/100x100' }}"alt="your image" class="img-responsive"width=100% height=50% />
                                <img id="mat_truoc_preview"src="{{ $item->image2?''.Storage::url($item->image2):'http://placehold.it/100x100' }}"alt="your image" class="img-responsive"width=100% height=50% />
                                <img id="mat_truoc_preview"src="{{ $item->image3?''.Storage::url($item->image3):'http://placehold.it/100x100' }}"alt="your image" class="img-responsive"width=100% height=50% />
                                <img id="mat_truoc_preview"src="{{ $item->image4?''.Storage::url($item->image4):'http://placehold.it/100x100' }}"alt="your image" class="img-responsive"width=100% height=50% />
                                </div>
                                </td>
                                <td>{{ number_format($item->price, 0) }} đ</td>

                                <td style="overflow: hidden;text-overflow: ellipsis; width:30%">{{$item->discription}}</td>
                                <!-- <td style="overflow: hidden;text-overflow: ellipsis; width:10%">{{$item->features}}</td>
                                <td>{{$item->status == 1 ? "Hiển Thị" : "Ẩn" }}</td> -->
                                <!-- <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td> -->
                                
                                <td>
                                    <a href="{{route('room_detail', ['id' => $item->id])}}" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="{{route('room_delete', ['id' => $item->id])}}"  class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
<div class="col d-flex justify-content-center">
            {{$list_room->links()}}
        </div>
        <!-- /.content-wrapper -->
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
                $('.owl-carousel').owlCarousel({
            loop:true,
            items:1,
        })
    </script>
@endsection