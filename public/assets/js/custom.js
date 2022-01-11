$("#add").click(function () {
    // create date var
    var dt = new Date();
    var count = dt.getHours() + "" + dt.getMinutes() + "" + dt.getSeconds();

    var html = $("#newRow").append(
      `<div class="" id="secondary` +
      count +
      `">
              <div class="row">
                <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="selectorder">select Order</label>
                  <select
                    class="form-select w-100 text-primary fw-bold w-100"
                    id="selectorder"
                    name="selectorder"
                  >
                    <option value="primary">Primary Car</option>
                    <option value="secondary">Secondary Car</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="make">Make*</label>
                  <select
                    class="form-select w-100 text-primary fw-bold w-100"
                    id="make"
                    name="make"
                  >
                    <option value="marutisuzuki">Maruti Suzuki</option>
                    <option value="volvo">Volvo</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="model">Modle*</label>
                  <select
                    class="form-select w-100 text-primary fw-bold w-100"
                    id="model"
                    name="model"
                  >
                    <option value="baleno">Baleno</option>
                    <option value="kia">KIA</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="variant">Variant*</label>
                  <select
                    class="form-select w-100 text-primary fw-bold w-100"
                    id="variant"
                    name="variant"
                  >
                    <option value="sigma">Sigma</option>
                    <option value="primary">Secondary Car</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="manufacturerYear">Manufacturer Year*</label>
                  <select
                    class="form-select w-100 text-primary fw-bold w-100"
                    id="manufacturerYear"
                    name="manufacturerYear"
                  >
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="fuel">Fuel Type*</label>
                  <select
                    class="form-select w-100 text-primary fw-bold w-100"
                    id="fuel"
                    name="fuel"
                  >
                    <option value="petrol">Petrol</option>
                    <option value="diesel ">Diesel</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="transmission">Transmission*</label>
                  <select
                    class="form-select w-100 text-primary fw-bold w-100"
                    id="transmission"
                    name="transmission"
                  >
                    <option value="automation">Automatic</option>
                    <option value="manual">Manual</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group flex-column border rounded">
                  <label for="budget">Budget*</label>
                  <select
                    class="form-select w-100 text-primary fw-bold"
                    id="budget"
                    name="budget"
                  >
                    <option value="2to3">2-3</option>
                    <option value="3to4">3-4</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button class="btn btn-danger" id="remove" data-id=` +
      count +
      `>
                  <i class="fas fa-minus-circle mx-2"></i>Remove
                </button>
               
              </div>
                </div>
            </div>`
    );
    count++;
  });

  // remove row
  $(document).on("click", "#remove", function () {
    var h = $(this).data("id");
    $("#secondary" + h).remove();
  });
  // datatable Scripter
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
  $(".removcars123").click(function () {
    alert("Are you sure you want to remove this car?");
    // var t = $(this).data("id");
    // $('#cardCardapp' + t).remove();

  });
  function sfdd(id) {
    $('#cardCardapp' + id).remove();
  }
  $('.cancelAssigned').click(function () {
    $('#addthecarshow').hide();
  });
  $(".addcar").click(function () {
    var t = $(this).data("id");

    var d0 = $('#tr' + t).find("td").eq(0).html();
    var d1 = $('#tr' + t).find("td").eq(1).html();
    var d2 = $('#tr' + t).find("td").eq(2).html();


    $('#addthecarshow').show();
    var html = $("#addthecar").append(
      `   <div id="cardCardapp` + t + `" class="row mt-4 mx-4">
          <div class="col-md-5 col-sm-12 col-12">
            <div class="car-detail-upper d-flex">
              <div class="car-detail-inner">
                <div class="tag d-flex mb-3">
                  <label class="tag-360">360'</label>
                  <label class="tag-available btn-success mx-3 px-2 rounded-pill">Available</label>
                </div>
                <div class="car-img-div">
                  <img src="assets/img/car.png" class="img-fluid" alt="Car" width="150" />
                </div>
              </div>
              <div class="car-detail-text">
                <p>2017</p>
                <h6 class="fw-bold">`+ d2 + `</h6>
                <p>1500 kms, Petrol, Automatic, Cosmic Red Selling Price</p>
                <p class="fw-bold">₹ 44,78,516</p>
              </div>
              <div class="card-days-upper d-flex flex-column justify-content-around align-items-center">
                <button onClick="sfdd(`+ t + `);" data-id="` + t + `" class="removcars"><i  class="fas fa-times bg-danger text-white p-2 "></i></button>
                <p class="days-left d-flex justify-content-center align-items-center text-white flex-column">
                  <span>15</span>
                  days
                </p>

              </div>
            </div>
          </div>
        </div>`
    );


  })
