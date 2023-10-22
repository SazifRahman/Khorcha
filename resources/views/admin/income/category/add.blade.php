@extends('layouts.admin');
@section('content')
                    
  <div class="row">
      <div class="col-md-12 ">
          <form method="POST" action="{{url('dashboard/income/category/submit')}}">
            @csrf
              <div class="card mb-3">
                <div class="card-header">
                  <div class="row">
                      <div class="col-md-8 card_title_part">
                          <i class="fab fa-gg-circle"></i> Add Income Category Information
                      </div>  
                      <div class="col-md-4 card_button_part">
                          <a href="{{url('dashboard/income/category/submit')}}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i> All Category</a>
                      </div>  
                  </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                      <label class="col-sm-3 col-form-label col_form_label"> Income Category <span class="req_star">*</span>:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form_control" id="" name="name">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-3 col-form-label col_form_label">Remarks:</label>
                      <div class="col-sm-7">
                        <textarea class="form-control form_control" id="" name="remarks"></textarea>
                      </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-sm btn-dark"> SUBMIT </button>
                </div>  
              </div>
          </form>
      </div>
  </div>

@endsection