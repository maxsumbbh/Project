@extends('layouts.admin')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| อนุมัติความคิดเห็น</h3>
            <br>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ความคิดเห็น</th>
                            <th>อนุมัติ</th>
                          
                        </tr>
                        @foreach ($comments as $comment)
                        <tr>
                            <td>{{ $comment->comment }}</td>
                            <td>  <form action="{{url('/toggle-approve')}}" method="POST">
                                {{csrf_field()}}
                                 
                                <input <?php if($comment->approve == 1){echo "checked";}?> type="checkbox" name='approve'>
        
                            <input type="hidden" name="commentId" value="{{$comment->id}}">
                                <input class="btn btn-success" type="submit" value="ตกลง">
                    
                            </form></td>
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
