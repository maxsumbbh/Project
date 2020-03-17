@extends('layouts.admin')
@section('content')
<div class="content">
   
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('admin/bslideshow/create', $title = 'เพิ่มรูปภาพ', ['class' => 'btn btn-success btn-sm'], $secure = null); ?>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รูปภาพ</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($slideshows as $slideshow)
                        <tr>
                            <td>
                                <a href="{{ asset('images/'.$slideshow->image)}}">
                                <img src="{{ asset('images/resize/'.$slideshow->image) }}" style="width:100px"></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bslideshow.destroy', $slideshow->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');">
                                    <button type="submit" class="btn btn-danger">ลบ</button></a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
    @endsection
    @section('scripts')
    @parent
@endsection
