@extends('layouts.app')

@section('content')



<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

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
                            <br>
                            <h2>แก้ไขข้อมูลผู้ป่วย</h2>
                            <br>
                            {{-- {{action('/update','PersonalController@update',$id)}} --}}
                            {{-- @foreach($personal_list as $key => $value) --}}
                            <form action="/update_personal" method="POST" >
                                {{-- @endforeach  --}}
                                <!-- if there are creation errors, they will show here -->
                                {{-- @if($errors->all())
                                <ul class="has-error">
                                @foreach ($errors->all() as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                                </ul>
                                @endif
                                {{csrf_field()}}
                                {{ method_field('PUT') }} --}}

                                @csrf

            
                                <div class="form-group row {{ $errors->has('fristname') ? ' has-error' : '' }}" >
                                    <label  class="col-sm-3 col-form-label d-flex justify-content-end">ชื่อ</label>
                                        <div class="col-sm-5 col-md-6">
                                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="ชื่อ" value="{{$personal_list->firstname}}" required autofocus>
                                            @if ($errors->has('firstname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>
            
                                <div class="form-group row">
                                    <label  class="col-sm-3 col-form-label d-flex justify-content-end">นามสกุล</label>
                                        <div class="col-sm-5 col-md-6 ">
                                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="นามสกุล" value="{{$personal_list->lastname}}" required autofocus>
                                            @if ($errors->has('lastname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label d-flex justify-content-end">ชื่อเล่น</label>
                                            <div class="col-sm-5 col-md-6 ">
                                            <input type="text" name="nickname" class="form-control" id="nickname" placeholder="ชื่อเล่น" value="{{$personal_list->nickname}}" required autofocus>
                                                @if ($errors->has('nickname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('nickname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
            
                                    </div><div class="form-group row">
                                            <label  class="col-sm-3 col-form-label d-flex justify-content-end">อายุ</label>
                                                <div class="col-sm-5 col-md-6 ">
                                                <input type="text" name="age" class="form-control" id="age" placeholder="อายุ" value="{{$personal_list->age}}" required autofocus>
                                                    @if ($errors->has('age'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('age') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
            
                                    <div class="form-group row">
                                            <label for="FormControlSelectgender" class="col-sm-3 col-form-label d-flex justify-content-end">เพศ</label>
                                            <div class="col-sm-5">
                                                <select class="col-sm-8 form-control" name="gender" id="FormControlSelectgender" >
                                                    <option>ชาย</option>
                                                    <option>หญิง</option>
                                                </select>
                                            </div> 
                                    </div>
            
                                <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label d-flex justify-content-end">เลขบัตรประชาชน</label>
                                            <div class="col-sm-5 col-md-6 ">
                                            <input type="text" name="idcard" class="form-control" id="idcard" placeholder="เลขบัตรประชาชน" value="{{$personal_list->idcard}}" required autofocus>
                                                @if ($errors->has('idcard'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('idcard') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                    </div>
            
                                <div class="form-group row">
                                        <label for="inputweight" class="col-sm-3 col-form-label d-flex justify-content-end">น้ำหนัก</label>
                                        <div class="col-sm-2 col-md-2 ">
                                            <input type="text" name="weight" class="form-control " id="inputweight" placeholder="น้ำหนัก" value="{{$personal_list->weight}}" required autofocus>
                                            @if ($errors->has('weight'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('weight') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <label for="inputheight" class="col-sm-2 col-form-label d-flex justify-content-start">ส่วนสูง</label>
                                        <div class="col-sm-2 col-md-2 ">
                                            <input type="text" name="height" class="form-control " id="inputheight" placeholder="ส่วนสูง" value="{{$personal_list->height}}" required autofocus>
                                            @if ($errors->has('height'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('height') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="inputtel" class="col-sm-3 col-form-label d-flex justify-content-end">เบอร์โทร</label>
                                            <div class="col-sm">
                                                <input type="text" name="tel" class="col-sm-6 form-control d-flex justify-content-end" id="inputtel" placeholder="เบอร์โทร"  value="{{$personal_list->tel}}" required autofocus>
                                                @if ($errors->has('tel'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('tel') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
            
            
                                <div class="form-group row">
                                    <label  class="col-sm-3 col-form-label d-flex justify-content-end">คณะ</label>
                                    <div class="col-sm ">
                                        <select id="Faculty" name="Faculty" class="col-sm-6 form-control Faculty">
                                            <option>เลือกคณะ</option>
                                            @foreach ($faculties as $key)
                                                @if($key->Fac_id == $personal_list->Faculty)
                                                <option value="{{$key->Fac_id}}" selected>{{$key->Faculty}}</option>
                                                @else 
                                                <option value="{{$key->Fac_id}}" >{{$key->Faculty}}</option>
                                                @endif
                                            @endforeach   

                                           
                                            

                                        </select>
                                    </div>
                                </div> 
                                
                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label d-flex justify-content-end">สาขา</label>
                                        <div class="col-sm">
                                            <select class="col-sm-6 form-control major" id="major" name="major">
                                                <option>เลือกสาขา</option>
                                                @foreach ($majors as $key)
                                                @if($key->name == $personal_list->major)
                                                <option value="{{$key->major_id}}" selected>{{$key->name}}</option>
                                                @else 
                                                <option value="{{$key->major_id}}" >{{$key->name}}</option>
                                                @endif
                                            @endforeach   
                                            </select>
                                        </div>
                                    </div> 
                                    
                                    <br>
                                    <br>
                                
            
                                <div class="form-group ">
                                    <h2>อาการ/เหตุการณ์ที่ได้รับแจ้ง</h2>
                                    <div class="col-sm d-flex justify-content-center">
                                        <textarea class="form-control col-sm-10" name="detailreport" id="FormControlTextareadetail" rows="5" value="{{$personal_list->textareadetail}}" required autofocus><?=$personal_list['detailreport']?></textarea>
                                    </div>
                                </div>
            
                                
                                <br>
                                <br>
                                    <div class="form-group ">
                                        <h2>ซักประวัติผู้ป่วย SAMPLE</h2>
                                        <div class="col-sm">
                                            <div class="col-sm d-flex justify-content-center">
                                                    <textarea class="form-control col-sm-10" name="historytaking" id="FormControlTextarea1" rows="5" value="{{$personal_list->historytaking}}" required autofocus><?=$personal_list['historytaking']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-3 col-form-label d-flex justify-content-end">โรคประจำตัว</label>
                                            <div class="col-sm-5 col-md-7 ">
                                                <input type="text" name="disease" class="form-control" id="disease" placeholder="โรคประจำตัว" value="{{$personal_list->disease}}" required autofocus>
                                                @if ($errors->has('disease'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('disease') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-3 col-form-label d-flex justify-content-end">ข้อมูลการแพ้ยา</label>
                                            <div class="col-sm-5 col-md-7 ">
                                                <input type="text" name="drugallergy" class="form-control" id="drugallergy" placeholder="ข้อมูลการแพ้ยา" value="{{$personal_list->drugallergy}}" required autofocus>
                                                @if ($errors->has('drugallergy'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('drugallergy') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$personal_list->id}}" >
                                    <button type="button"  value="print" onclick="window.print()" class="btn btn-primary float-right btn-lg  mt-5">Print</button>
                                    <button type="submit" class="btn btn-success btn-lg float-right mt-5">Update</button>
                        </form>
                     
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



