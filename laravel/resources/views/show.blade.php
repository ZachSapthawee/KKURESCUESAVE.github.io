@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row page-header">
            <div class="col-xs-12 col-md-6 col-lg-6">
                 <h3>รายชื่อผู้ป่วย</h3>
             </div>
             {{-- <div class="col-xs-12 col-md-6 col-lg-6">
                     <a href="{{ URL('/blogs/create') }}" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Create Blog</a>
             </div> --}}
        </div>
         <!-- /.row -->
         
         <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <div class="table-responsive text-nowrap">
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <td>#</td>
                    <td>ชื่อ</td>
                    <td>นามสกุล</td>
                    <td>ชื่อเล่น</td>
                    <td>อายุ</td>
                    <td>โรคประจำตัว</td>
                    <td>สาขา</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
            <?php $i = 0; ?>
            @foreach($personal_list as $key => $value)
            <?php $i++?>
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{ $value->firstname }}</td>
                    <td>{{ $value->lastname }}</td>
                    <td>{{ $value->nickname }}</td>
                    <td>{{ $value->age }}</td>
                    <td>{{ $value->disease }}</td>
                    <td>{{ $value->major }}</td>
        
                    <!-- we will also add show, edit, and delete buttons -->
                    <td>
        
                        <!-- delete the nerd (uses the destroy method DESTROY /blogs/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        <form class="form-horizontal" method="POST" action="{{ URL('pages/'.$value->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            
                            <!-- show the nerd (uses the show method found at GET /users/{id} -->
                            {{-- <a class="btn btn-xs btn-success" href="{{ URL::to('create/' . $value->id) }}">Show</a> --}}
            
                            <!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
                            <a class="btn btn-xs btn-info" href="{{ URL::to('pages/'.$value->id.'/edit') }}">Show</a>
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </form>
        
        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
</div>
<script type="text/javascript">
    $(function(ready){
            $('.Faculty').change(function(){
                    if($(this).val()!=''){
                        var select=$(this).val();
                        var _token=$('input[name="_token"]').val();
                        $.ajax({
                            url:"{{route('create.fetch')}}",
                            method:"POST",
                            data:{select:select,_token:_token},
                            success:function(result){
                                //จะทำไรต่อดีวะ
                                $('.major').html(result);
                            }
                        })
                    }
            });
    });
    </script>
@endsection