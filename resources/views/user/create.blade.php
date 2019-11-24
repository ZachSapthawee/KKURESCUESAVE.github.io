@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <!-- <div class="card-header">บันทึกข้อมูลผู้ป่วย</div> -->

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <h2>ข้อมูลผู้ป่วย</h2>
                    <form action="{{url('/user')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="inputfristname" class="col-sm-3 col-form-label">ชื่อ</label>
                            <div class="col-sm-5">
                                <input type="text" name="fristname" class="form-control" id="fristname" placeholder="ชื่อ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputlastname" class="col-sm-3 col-form-label">นามสกุล</label>
                            <div class="col-sm-5">
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="นามสกุล">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnickname" class="col-sm-3 col-form-label">ชื่อเล่น</label>
                            <div class="col-sm-5">
                                <input type="text" name="nickname" class="form-control" id="nickname" placeholder="ชื่อเล่น">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputage" class="col-sm-3 col-form-label">อายุ</label>
                            <div class="col-sm-2">
                                <input type="text" name="age" class="form-control" id="age" placeholder="อายุ">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="FormControlSelectgender" class="col-sm-1 col-form-label">เพศ</label>
                                <div class="col-sm">
                                    <select class="col-sm-3 form-control" name="gender" id="FormControlSelectgender">
                                        <option>ชาย</option>
                                        <option>หญิง</option>
                                    </select>
                                </div> 
                        </div>
                        <div class="form-group row">
                            <label for="inputidcard" class="col-sm-3 col-form-label">เลขบัตรประชาชน</label>
                            <div class="col-sm-5">
                                <input type="text" name="idcard" class="form-control" id="inputidcard" placeholder="เลขบัตรประชาชน">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputweight" class="col-sm-3 col-form-label">น้ำหนัก</label>
                            <div class="col-sm-2">
                                <input type="text" name="weight" class="form-control" id="inputweight" placeholder="น้ำหนัก">
                            </div>
                            <label for="inputheight" class="col-sm-1 col-form-label">ส่วนสูง</label>
                            <div class="col-sm-2">
                                <input type="text" name="height" class="form-control" id="inputheight" placeholder="ส่วนสูง">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtel" class="col-sm-3 col-form-label">เบอร์โทร</label>
                            <div class="col-sm-5">
                                <input type="text" name="tel" class="form-control" id="inputtel" placeholder="เบอร์โทร">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">คณะ</label>
                            <div class="col-sm">
                                <select id="Faculty" name="Faculty" class="col-sm-6 form-control Faculty">
                                    <option>เลือกคณะ</option>
                                    @foreach ($faculty_list as $key)
                                        <option value="{{$key->Fac_id}}">{{$key->Faculty}}
                                    @endforeach   
                                </select>
                            </div>
                        </div> 
                        
                        <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">สาขา</label>
                                <div class="col-sm">
                                    <select class="col-sm-6 form-control major" id="major" name="major">
                                        <option>เลือกสาขา</option>
                                    </select>
                                </div>
                            </div> 
                            

                        

                        <div class="form-group ">
                            <h2>อาการ/เหตุการณ์ที่ได้รับแจ้ง</h2>
                            <div class="col-sm">
                                <textarea class="form-control col-sm-10" id="FormControlTextareadetail" rows="5"></textarea>
                            </div>
                        </div>

                        <table  class="table table-bordered">
                                <tr align="center">
                                    <th width="116" rowspan="2">Time</th>
                                    <th colspan="4">Vital sign</th>
                                    <th width="145" rowspan="2">O2 sat</th>
                                    <th width="136" rowspan="2">DTX</th>
                                </tr>
                                <tr >
                                    <th width="100">T</th>
                                    <th width="100">BP</th>
                                    <th width="100">PR</th>
                                    <th width="100">RR</th>
                                </tr> 
                                <tr align="center">
                                    <div class="col-sm-5">
                                    <td><input type="time" class="form-control"></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                    <td><input type="text" class="form-control" ></td>
                                    </div>
                                </tr>
                        </table>

                        <div class="form-group ">
                                <h2>ซักประวัติผู้ป่วย SAMPLE</h2>
                                <div class="col-sm">
                                    <textarea class="form-control col-sm-10" id="FormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div>


                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(ready){
        $('.Faculty').change(function(){
                if($(this).val()!=''){
                    var select=$(this).val();
                    console.log(select);
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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
