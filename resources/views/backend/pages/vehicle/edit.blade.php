@extends('backend.layouts.master')
@section('content')

  		<div class="content-wrapper">
  			<div class="container-fluid">

  				<div class="row">
  					<div class="col-md-12">

  						<h2 class="page-title">Edit Vehicle</h2>

  						<div class="row">
  							<div class="col-md-12">
  								<div class="panel panel-default">
  									<div class="panel-heading">Basic Info</div>
  									<div class="panel-body">


  <form method="post" action="{!! route('admin.vehicle.update',$vehicles->id) !!}" class="form-horizontal" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
  <label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <input type="text" name="vehicletitle" class="form-control" value="{{$vehicles->VehiclesTitle}}" required>
  </div>
  <label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <select class="selectpicker" name="brandname" required>
  <option value="{{$vehicles->id}}">{{$vehicles->Brand()}} </option>

  @foreach ($brands as $b)
    <option value="{{$b->id}}">{{$b->name}}</option>
  @endforeach



  </select>
  </div>
  </div>

  <div class="hr-dashed"></div>
  <div class="form-group">
  <label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
  <div class="col-sm-10">
  <textarea class="form-control" name="vehicleoverview" rows="3" required>{{$vehicles->VehiclesOverview}}</textarea>
  </div>
  </div>

  <div class="form-group">
  <label class="col-sm-2 control-label">Price Per Day(in USD)<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <input type="text" name="priceperday" class="form-control" value="{{$vehicles->PricePerDay}}" required>
  </div>
  <label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <select class="selectpicker" name="fueltype" required>
  <option value="{{$vehicles->FuelType}}"> {{$vehicles->FuelType}} </option>

  <option value="Petrol">Petrol</option>
  <option value="Diesel">Diesel</option>
  <option value="CNG">CNG</option>
  </select>
  </div>
  </div>


  <div class="form-group">
  <label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <input type="text" name="modelyear" class="form-control" value="{{$vehicles->ModelYear}}" required>
  </div>
  <label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <input type="text" name="seatingcapacity" class="form-control" value="{{$vehicles->SeatingCapacity}}" required>
  </div>
  </div>

  <div class="row">
  <div class="col-md-12">
  <div class="panel panel-default">
  <div class="panel-heading">Accessories</div>
  <div class="panel-body">
        <div class="form-group">
                <div class="col-sm-3">
                      @if($vehicles->AirConditioner==1)

                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="airconditioner" checked value="1">
                      <label for="inlineCheckbox1"> Air Conditioner </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="airconditioner" value="1">
                      <label for="inlineCheckbox1"> Air Conditioner </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->PowerDoorLocks==1)

                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks" checked value="1">
                      <label for="inlineCheckbox2"> Power Door Locks </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-success checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="powerdoorlocks" value="1">
                      <label for="inlineCheckbox2"> Power Door Locks </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->AntiLockBrakingSystem==1)

                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="antilockbrakingsys" checked value="1">
                      <label for="inlineCheckbox3"> AntiLock Braking System </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="antilockbrakingsys" value="1">
                      <label for="inlineCheckbox3"> AntiLock Braking System </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->BrakeAssist==1)
                        <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="brakeassist" checked value="1">
                      <label for="inlineCheckbox3"> Brake Assist </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="brakeassist" value="1">
                      <label  for="inlineCheckbox3"> Brake Assist </label>
                      </div>
                    @endif
                      </div>

                        <div class="col-sm-3">
                      @if($vehicles->PowerSteering==1)
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="powersteering" checked value="1">
                      <label for="inlineCheckbox1"> Power Steering </label>
                      </div>

                    @else

                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="powersteering" value="1">
                      <label for="inlineCheckbox1"> Power Steering </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->DriverAirbag==1)


                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="driverairbag" checked value="1">
                      <label for="inlineCheckbox2"> Driver Airbag</label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="driverairbag" value="1">
                      <label for="inlineCheckbox2"> Driver Airbag</label>
                        </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->passengerairbag==1)


                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="passengerairbag" checked value="1">
                      <label for="inlineCheckbox3"> Passenger Airbag </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="passengerairbag" value="1">
                      <label for="inlineCheckbox3"> Passenger Airbag </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->PowerWindows==1)


                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="powerwindow" checked value="1">
                      <label for="inlineCheckbox3"> Power Windows </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="powerwindow" value="1">
                      <label for="inlineCheckbox3"> Power Windows </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->CDPlayer==1)


                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="cdplayer" checked value="1">
                      <label for="inlineCheckbox1"> CD Player </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="cdplayer" value="1">
                      <label for="inlineCheckbox1"> CD Player </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->CentralLocking==1)


                      <div class="checkbox  checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="centrallocking" checked value="1">
                      <label for="inlineCheckbox2">Central Locking</label>
                      </div>
                    @else
                      <div class="checkbox checkbox-success checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="centrallocking" value="1">
                      <label for="inlineCheckbox2">Central Locking</label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->CrashSensor==1)


                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="crashcensor" checked value="1">
                      <label for="inlineCheckbox3"> Crash Sensor </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="crashcensor" value="1">
                      <label for="inlineCheckbox3"> Crash Sensor </label>
                      </div>
                    @endif
                      </div>
                      <div class="col-sm-3">
                      @if($vehicles->leatherseats==1)

                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="leatherseats" checked value="1">
                      <label for="inlineCheckbox3"> Leather Seats </label>
                      </div>
                    @else
                      <div class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" name="leatherseats" value="1">
                      <label for="inlineCheckbox3"> Leather Seats </label>
                      </div>
                    @endif
                      </div>
                      </div>




  											<div class="form-group">
  												<div class="col-sm-8 col-sm-offset-2" >

  													<button class="btn btn-primary" name="submit" type="submit" style="margin-top:4%">Save changes</button>
  												</div>
  											</div>

  										</form>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>

          <div class="row">
          <div class="col-md-12">
          <div class="form-group">
            <div class="panel panel-default">
            <div class="panel-heading">Image Change</div>
            <div class="panel-body">
            @foreach($vehicles->Vimage as $image)
          <div class="col-sm-4">

            <div class="card" style="width: 18rem;">
          <img src="{{asset('admin/img/vehicleimages/'. $image->image)}}" class="card-img-top img-responsive" alt="...">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <form class="" action="{!! route('admin.vehicle.image',$image->id) !!}" method="post" enctype="multipart/form-data">
              @csrf
              <input class="form-control" type="file" name="image" >
              	<button class="btn btn-primary form-control" name="submit" type="submit">Change Image</button>
            </form>

          </div>
        </div>
          </div>
        @endforeach
          </div>
        </div>
        </div>
        </div>
        </div>


  			</div>
  		</div>
  	</div>

@endsection
