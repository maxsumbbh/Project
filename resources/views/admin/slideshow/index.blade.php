@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ ส่วนสไลด์โชว์</h3>
            <br>
            <?= link_to('admin/bslideshow/create', $title = 'เพิ่มรูปภาพ', ['class' => 'btn btn-success btn-sm'], $secure = null); ?>
            <br><br>
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
                                <a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');"><?= Form::open(array('url' => 'admin/bslideshow/' . $slideshow->id, 'method' => 'delete')) ?>
                                <button type="submit" class="btn btn-danger">ลบ</button>
                                {!! Form::close() !!}
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
</div>
@endsection
