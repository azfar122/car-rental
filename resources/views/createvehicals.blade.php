@extends('Master.sidebar')

@section('createbrands')
<form method="post" action="{{ url('/createvehical') }}" >  
    @csrf  
    <div class="col-sm-10">
            <div class="col-sm-12">
                <h2 class="pt-3">Post a vehicle</h2>
            </div>
            <div class="col-sm-12">
                <hr>
            </div>
            <div class="col-sm-10">
                <div class="col-sm-12 ">
            
                <div class="row p-3" style="border: 2px solid rgb(100, 93, 93); border-radius: 20px;" >
                    <div class="col-sm-12 text-center pb-4">
                        <h4> <u>Vehicle Detail</u></h4>
                    </div>
                    <div class="col-sm-6">
                        <label><b>Vehicle Title</b></label>
                        <input class="form-control" type="text" name="vehicle_title" />
                    </div>
                    <div class="col-sm-6">
                        <label><b>Vehicle Title</b></label>
                        <select  class="form-control">
                            <option>Disabled select</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <label><b>Vehicle Overview</b></label>
                        <textarea class="form-control" style="resize: none;" type="text" name="vehicle_overview" ></textarea>

                    </div>
                    <div class="col-sm-6 mt-2">
                        <label><b>Price in Pkr</b></label>
                        <input class="form-control" type="text"  name="price"/>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label><b>Select Fuel Type</b></label>
                        <select  class="form-control" name="fule_type">
                            <option vlaue="desel">Desel</option>
                            <option value="petrol">Petrol</option>
                            <option value="cng">CNG</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label><b>Model Year</b></label>
                        <input class="form-control" type="text" name="model_year" />
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label><b>Seating Capacity</b></label>
                        <input class="form-control" type="number" name="capacity"  />
                        
                    </div>
                
            
            
                </div>
            </div>
            </div>
                    <div class="col-sm-10 mt-2">
                        <div class="col-sm-12 ">
                    
                        <div class="row p-3" style="border: 2px solid rgb(100, 93, 93); border-radius: 20px;" >
                            <div class="col-sm-12 text-center pb-4">
                                <h4> <u>Upload Pictures</u></h4>
                            </div>
                        <div class="col-sm-4">
                            
                            <label for="myfile">Select a file:</label>
                            <input type="file" id="myfile" name="image1"><br><br>
                        
                        
                    </div>
                    <div class="col-sm-4">
                    
                            <label for="myfile">Select a file:</label>
                            <input type="file" id="myfile" name="image2"><br><br>
                        
                        
                    </div>
                    <div class="col-sm-4">
                    
                            <label for="myfile">Select a file:</label>
                            <input type="file" id="myfile" name="image3"><br><br>
                        
                        
                    </div>
                    <div class="col-sm-4">
                    
                            <label for="myfile">Select a file:</label>
                            <input type="file" id="myfile" name="image4"><br><br>
                        
                        
                    </div>
                    <div class="col-sm-4">
                    
                            <label for="myfile">Select a file:</label>
                            <input type="file" id="myfile" name="image5"><br><br>
                        
                    </div>
                    
                
                
                    </div>
                </div>
                </div>

                <div class="col-sm-10 mt-2">
                    <div class="col-sm-12 ">
                
                    <div class="row p-3" style="border: 2px solid rgb(100, 93, 93); border-radius: 20px;" >
                        <div class="col-sm-12 text-center pb-4">
                            <h4> <u>Accessories</u></h4>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Air Conditioner" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Air Conditioner
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Power Door Locks" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Power Door Locks
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="AntiLock Braking" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    AntiLock Braking
                                </label>
                            </div>
                        </div><div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Brake Assist" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Brake Assist
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Power Steering" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Power Steering
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Driver Airbag" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Driver Airbag
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Passenger Airbag" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Passenger Airbag
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Power Windows" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Power Windows
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="CD Player" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    CD Player
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Central Locking" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Central Locking
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Crash Sensor" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Crash Sensor
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Leather Seats" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Leather Seats
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center mt-3">
                            <span><button class="btn btn-primary pl-5 pr-5">Submit</button></span>
                        </div>
                
                
                
                    </div>
                </div>
                </div>
            </div>
</form>
@endsection