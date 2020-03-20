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
                       
                    </tbody>  
                    <br>
                  
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
