
@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <h3>| ข้อเสนอแนะ</h3>
            <div class="panel panel-default">
     
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>ข้อเสนอแนะ</th>
                                    <th>อนุมัติ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $key => $comment)
                                    <tr data-entry-id="{{ $comment->id }}">
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->comment }}</td>
                                        <td>  <form action="{{url('/toggle-approve')}}" method="POST">
                                            {{csrf_field()}}
                                             
                                            <input <?php if($comment->approve == 1){echo "checked";}?> type="checkbox" name='approve'>
                    
                                        <input type="hidden" name="commentId" value="{{$comment->id}}">
                                            <input class="btn btn-success" type="submit" value="ตกลง">
                                
                                        </form></td>

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
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection




