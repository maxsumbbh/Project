@extends('layouts.admin')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>dash</title>
   

</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Comments</th>
                <th>Approval</th>
            </tr>
        </thead>
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

</body>
</html>
@endsection