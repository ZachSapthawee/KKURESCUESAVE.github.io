@extends('layouts.app')


@section('content')
<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">บันทึกข้อมูลผู้ป่วย</div> -->

                    <div class="card-body p-5">
                         @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif 
                        <br>
                        <h2>ข้อมูลผู้ป่วย</h2>
                        <br>
                        <form action="{{url('/pages')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row ">
                                <label class="col-sm-3 col-form-label textright hid ">ชื่อ</label>
                                <div class="col-sm-5 col-md-6 ">
                                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="ชื่อ">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label  class="col-sm-3 col-form-label textright hid ">นามสกุล</label>
                                <div class="col-sm-5 col-md-6 ">
                                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="นามสกุล">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnickname" class="col-sm-3 col-form-label textright hid ">ชื่อเล่น</label>
                                <div class="col-sm-5 col-md-6 ">
                                    <input type="text" name="nickname" class="form-control" id="nickname" placeholder="ชื่อเล่น">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  id="textname" for="inputage" class="col-sm-3 col-form-label textright hid ">อายุ</label>
                                <div class="col-sm-5 col-md-6 ">
                                    <input type="text" name="age" class="form-control" id="age" placeholder="อายุ">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label  id="textname" for="FormControlSelectgender" class="col-sm-3 col-form-label textright hid ">เพศ</label>
                                    <div class="col-sm-5">
                                        <select class="col-sm-8 form-control" name="gender" id="FormControlSelectgender" placeholder="เลือกเพส" require> 
                                            <option>เลือกเพศ</option>
                                            <option>ชาย</option>
                                            <option>หญิง</option>
                                        </select>
                                    </div> 
                            </div>
                            <div class="form-group row">
                                <label for="inputidcard" class="col-sm-3 col-form-label textright hid ">เลขบัตรประชาชน</label>
                                <div class="col-sm-5 col-md-6 ">
                                    <input type="text" name="idcard" class="form-control" id="inputidcard" placeholder="เลขบัตรประชาชน">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputweight" class="col-sm-3 col-form-label textright hid ">น้ำหนัก</label>
                                <div class="col-sm-2 col-md-2 mb-3">
                                    <input type="text" name="weight" class="form-control " id="inputweight" placeholder="น้ำหนัก">
                                </div>
                                <label for="inputheight" class="col-sm-2 col-form-label  hid" style ="text-align: end;"> ส่วนสูง</label>
                                <div class="col-sm-2 col-md-2 ">
                                    <input type="text" name="height" class="form-control " id="inputheight" placeholder="ส่วนสูง">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtel" class="col-sm-3 col-form-label textright hid ">เบอร์โทร</label>
                                <div class="col-sm">
                                    <input type="text" name="tel" class="col-sm-6 form-control d-flex justify-content-end" id="inputtel" placeholder="เบอร์โทร">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label textright hid ">คณะ</label>
                                <div class="col-sm ">
                                    <select id="Faculty" name="Faculty" class="col-sm-6 form-control Faculty">
                                        <option>เลือกคณะ</option>
                                        @foreach ($faculty_list as $key)
                                            <option value="{{$key->Fac_id}}">{{$key->Faculty}}
                                        @endforeach   
                                    </select>
                                </div>
                            </div> 
                            
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label textright hid ">สาขา</label>
                                <div class="col-sm">
                                    <select class="col-sm-6 form-control major" id="Major" name="Major">
                                        <option>เลือกสาขา</option>
                                    </select>
                                </div>
                            </div> 
                                
                                <br>
                                <br>
                            

                            <div class="form-group ">
                                <h2>อาการ/เหตุการณ์ที่ได้รับแจ้ง</h2>
                                <div class="col-sm d-flex justify-content-center">
                                    <textarea class="form-control col-sm-6" name="detailreport" id="FormControlTextareadetail" rows="5"></textarea>
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            <div class="form-group ">
                                    <h2>ซักประวัติผู้ป่วย SAMPLE</h2>
                                    <div class="col-sm">
                                        <div class="col-sm d-flex justify-content-center">
                                                <textarea class="form-control col-sm-6" name="historytaking" id="historytaking" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-sm-3 col-form-label textright hid ">โรคประจำตัว</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="disease" class="form-control" id="disease" placeholder="โรคประจำตัว"  required autofocus>
                                        @if ($errors->has('disease'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('disease') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label  class="col-sm-3 col-form-label textright hid ">ข้อมูลการแพ้ยา</label>
                                    <div class="col-sm-6">
                                            <input type="text" name="drugallergy" class="form-control" id="drugallergy" placeholder="ข้อมูลการแพ้ยา"  required autofocus>
                                            @if ($errors->has('drugallergy'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('drugallergy') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div> 


                            <button type="submit" class="btn btn-success btn-lg float-right mt-5">บันทึก</button>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
