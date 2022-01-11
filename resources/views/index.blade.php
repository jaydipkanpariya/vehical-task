@extends('layout.app')

@section('content')
<section class="section-container">
    <div class="container-fluid">
      <div class="car-detail">
        <div class="car-detail-check my-3 d-flex">
          <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inventorymodel">Check
            Inventory</a>
          <div class="check-inventory-icon mx-3">
            <div class="input-group align-items-center">
              <input type="checkbox" name="checkinventory" id="checkinventory" class="mx-2" checked />
              <label for="checkinventory">
                <span class="check-icon">Car Not Available In Inventory</span>
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 col-sm-12 col-12">
            <div class="car-detail-upper d-flex">
              <div class="car-detail-inner">
                <div class="tag d-flex mb-3">
                  <label class="tag-360">360'</label>
                  <label class="tag-available btn-success mx-3 px-2 rounded-pill">Available</label>
                </div>
                <div class="car-img-div">
                  <img src="{{ asset('assets/img/car.png')}}" class="img-fluid" alt="Car" width="150" />
                </div>
              </div>
              <div class="car-detail-text">
                <p>2017</p>
                <h6 class="fw-bold">Hyundai, Santro Magna</h6>
                <p>1500 kms, Petrol, Automatic, Cosmic Red Selling Price</p>
                <p class="fw-bold">₹ 44,78,516</p>
              </div>
              <div class="card-days-upper d-flex flex-column justify-content-around align-items-center">
                <i class="fas fa-times bg-danger text-white p-2"></i>
                <p class="days-left d-flex justify-content-center align-items-center text-white flex-column">
                  <span>15</span>
                  days
                </p>
                <select>
                  <option value="primary">Primary Car</option>
                  <option value="primary">Secondary Car</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="car-select my-3">
        <div id="newRow">
          <div class="form my-3" id="secondary123">
            <div class="row">
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="selectorder">select Order</label>
                  <select class="form-select w-100 text-primary fw-bold w-100" id="selectorder" name="selectorder">
                    <option value="primary">Primary Car</option>
                    <option value="secondary">Secondary Car</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="make">Make*</label>
                  <select class="form-select w-100 text-primary fw-bold w-100" id="make" name="make">
                    <option value="marutisuzuki">Maruti Suzuki</option>
                    <option value="volvo">Volvo</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="model">Modle*</label>
                  <select class="form-select w-100 text-primary fw-bold w-100" id="model" name="model">
                    <option value="baleno">Baleno</option>
                    <option value="kia">KIA</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="variant">Variant*</label>
                  <select class="form-select w-100 text-primary fw-bold w-100" id="variant" name="variant">
                    <option value="sigma">Sigma</option>
                    <option value="primary">Secondary Car</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="manufacturerYear">Manufacturer Year*</label>
                  <select class="form-select w-100 text-primary fw-bold w-100" id="manufacturerYear"
                    name="manufacturerYear">
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="fuel">Fuel Type*</label>
                  <select class="form-select w-100 text-primary fw-bold w-100" id="fuel" name="fuel">
                    <option value="petrol">Petrol</option>
                    <option value="diesel ">Diesel</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="transmission">Transmission*</label>
                  <select class="form-select w-100 text-primary fw-bold w-100" id="transmission" name="transmission">
                    <option value="automation">Automatic</option>
                    <option value="manual">Manual</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="budget">Budget*</label>
                  <select class="form-select w-100 text-primary fw-bold" id="budget" name="budget">
                    <option value="2to3">2-3</option>
                    <option value="3to4">3-4</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-danger" data-id="123" id="remove">
                  <i class="fas fa-minus-circle mx-2"></i>Remove
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-success mx-3 add" id="add">
        <i class="fas fa-plus-circle mx-2"></i>Add
      </button>
    </div>
  </section>
@endsection
@section('modal')
<!-- modal for check Inventory -->
<div class="modal fade" id="inventorymodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div id="addthecarshow" style="display: none">
        <div id="addthecar">

        </div>
        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-danger cancelAssigned">
            cancel
          </button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">
            Add Assigned Car</button>
        </div>
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Used Car Inventory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table id="myTable" class="display table-responsive">
          <thead>
            <tr>
              <th>Id</th>
              <th>Car Images</th>
              <th>Model</th>
              <th>Variant</th>
              <th>Fuel</th>
              <th>Transmission</th>
              <th>Reg No.</th>
              <th>Loaction</th>
              <th>Vehicle Age</th>
              <th>Selling Price</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr id="tr1">
              <td>123</td>
              <td> <img src="{{ asset('assets/img/car.png')}}" class="img-fluid" alt="Car" width="100" /></td>
              <td>Maruti Suzuki</td>
              <td>Vitara Brezza</td>
              <td>ZID plus Dual Tone</td>
              <td>Diesel</td>
              <td>Autometic</td>
              <td>MH07EA3322</td>
              <td>180</td>
              <td>₹ 4,50,000</td>
              <td class="text-success">Available</td>
              <td class="d-flex align-items-center justify-content-center"><i class="far fa-eye mx-2"></i>
                <button id="addcar" data-id="1" class="btn btn-success addcar">
                  <i class="fas fa-user-check"></i>
                </button>
              </td>
            </tr>
            <tr id="tr2">
              <td>124</td>
              <td> <img src="{{ asset('assets/img/car.png')}}" class="img-fluid" alt="Car" width="100" /></td>
              <td>Vlovo</td>
              <td>Vitara Brezza1</td>
              <td>ZID plus Dual Tone</td>
              <td>CNG</td>
              <td>Autometic</td>
              <td>MH07EA3322</td>
              <td>180</td>
              <td>₹ 4,50,000</td>
              <td class="text-success">Available</td>
              <td class="d-flex align-items-center justify-content-center"><i class="far fa-eye mx-2"></i>
                <button id="addcar" data-id="2" class="btn btn-success addcar">
                  <i class="fas fa-user-check"></i>
                </button>
              </td>
            </tr>
            <tr id="tr3">
              <td>125</td>
              <td> <img src="{{ asset('assets/img/car.png')}}" class="img-fluid" alt="Car" width="100" /></td>
              <td>Maruti Suzuki</td>
              <td>Vitara Brezza</td>
              <td>ZID plus Dual Tone</td>
              <td>Diesel</td>
              <td>Autometic</td>
              <td>MH07EA3322</td>
              <td>180</td>
              <td>₹ 4,50,000</td>
              <td class="text-success">Available</td>
              <td class="d-flex align-items-center justify-content-center"><i class="far fa-eye mx-2"></i>
                <button id="addcar" data-id="3" class="btn btn-success addcar">
                  <i class="fas fa-user-check"></i>
                </button>
              </td>
            </tr>
            <tr id="tr4">
              <td>126 </td>
              <td> <img src="{{ asset('assets/img/car.png')}}" class="img-fluid" alt="Car" width="100" /></td>
              <td>Maruti Suzuki</td>
              <td>Vitara Brezza</td>
              <td>ZID plus Dual Tone</td>
              <td>Diesel</td>
              <td>Autometic</td>
              <td>MH07EA3322</td>
              <td>180</td>
              <td>₹ 4,50,000</td>
              <td class="text-success">Available</td>
              <td class="d-flex align-items-center justify-content-center"><i class="far fa-eye mx-2"></i>
                <button id="addcar" data-id="4" class="btn btn-success addcar">
                  <i class="fas fa-user-check"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection