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
            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Comments</th>
                            <th>Approval</th>              
                        </tr>
                    </table>
                    <tbody>
                        @forelse ($comments as $comment)
                        <tr>
                            <td>{{$comment->comment}}</td>
                            <td>
                                <form action="{{url('/toggle-approve')}}" method="POST">
                                    {{csrf_field()}}
                                     
                                    <input <?php if($comment->approve == 1){echo "checked";}?> type="checkbox" name='approve'>
            
                                <input type="hidden" name="commentId" value="{{$comment->id}}">
                                    <input class="btn btn-primary" type="submit" value="Done">
                        
                                </form>
                            </td>
                        </tr>         
                        @empty
                        <h4>No Data</h4>
                        @endforelse
                    </tbody>  
                    <br>
                    {!! $comments->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
