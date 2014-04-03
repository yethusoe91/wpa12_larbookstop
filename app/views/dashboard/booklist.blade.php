@extends ('layouts.admin_master')
@section('content')
<div id="page-wrapper">

<div class="row">
    <div class="col-md-12">     
        <table class="table table-striped table-bordered table-hover table-striped" id="myTable">
            <thead>
                <tr role="row">
                    <th  style="text-align: center;" >
                        <input type="checkbox">
                    </th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>publisher</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>        
            @foreach ($books as $book)                                   
                <tr>
                    <td  style="text-align: center;">
                        <input type="checkbox">
                    </td>
                    <td>{{$book->bookname}}</td>
                    <td>{{$book->author }}</td>
                    <td>{{$book->publisher }}</td>
                    <td class="text-center">
                     {{ link_to_route('book.edit' , 'Edit', array('id' => $book->id ), array('class' => 'btn btn-success glyphicon glyphicon-align-right')); }}
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>  
                    {{ $books->links(); }}
  
    </div>

</div>
</div>
@stop
