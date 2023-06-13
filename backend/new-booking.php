<?php require_once 'header.php'; ?>
            <div class="container-fluid">
                <div id="booking" class="section-center">
                    <div class="booking-form">
                            <div class="form-header text-center text-primary">
                                <h2 class="text-primary">Booking Service</h2>
                            </div>
                        <div class="modal-body">
                            <form method="POST" action="database/insert_data.php" onsubmit="showConfirmation()">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="form-group">
                                            <label class="form-label">Name</label><br>
                                            <input class="form-control" type="text" name="name3" pattern="[A-Z\sa-z]{3,20}" required>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="form-group">

                                            <label class="form-label">E-mail</label><br>
                                            <input class="form-control" type="text" name="email3" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="form-group">
                                            
                                            <label class="form-label">Phone</label><br>
                                            <input class="form-control" type="tel"  name="phone3" pattern=(\d{3})?\s?(\d{3})?\s?(\d{4}) maxlength="10" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="form-group">
                                                <label class="form-label">Type</label><br>
                                            <select class="form-control"  name="ride-type3" id="b-type3" required >
                                            <option  selected>Select</option>
                                            <option value="one_trip">One-Side-Trip</option>
                                            <option value="round_trip">Round-Trip</option>
                                            <option value="hospital_trip">Hospital-Assistance</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-10" id="round">
                                    <div class="form-group">
                                        <label class="form-label" for="select">Choose Ride</label><br>
                                        <select class="form-control" name="t-type3" id="t-type3"  required >
                                        <option active>Select</option>
                                        <option value="schedule_trip">Schedule Ride</option>
                                        <option value="immediate_trip">Immediate Pick-up</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        
                                    </div>
                                </div>
                                </div>


                                <div class="data1">
                                    <div class="row">	
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                            <label class="form-label">Pick-up Location</label><br>
                                            <input class="form-control" type="text" name="pick_up3" id="pick3" required>

                                            </div>
                                        </div>							
                                        <div class="col-md-6" >
                                            <div class="form-group" >
                                                <label class="form-label">Drop location</label><br>
                                            <input class="form-control" type="text" name="drop_in3" id="drop3" required>
                                            </div>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label">Vechile Name</label><br>
                                                <select class="form-control" id="v-name3" name="v_name3"required>
                                                <option active>Select</option>
                                                <option>HatchBack</option>
                                                <option>Sedan</option>
                                                <option>SUV</option>
                                                <option>Luxury</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label">Vechile Type</label><br>
                                            <select class="form-control" id="v-type3" name="v_type3" required>
                                                    <option active>Select</option>
                                                    <option >Automatic</option>
                                                    <option>Manaual</option>
                                                    <option>Both</option>
                                                </select>
                                                <span class="select-arrow"></span>

                                            </div>
                                        </div>
                                        <div class="col-10 "id="date3">
                                            <div class="form-group">
                                                <label class="form-label"> Date </label><br>
                                                <input class="form-control" type="date"  name="date_in3"  min="<?=date('Y-m-d\TH:i');?>" >
                                            </div>
                                        </div>
                                        <div class="col-10 " id="time3">
                                            <div class="form-group">
                                                <label class="form-label"> Time</label><br>
                                                <input class="form-control" type="time" name="time_in3" >
                                            </div>
                                        </div>
                                        </div>
                            
                                        <div class="row" id="book">
                                            <div class="col-10">
                                                <div class="form-btn">
                                                <button type="submit" class="submit-btn rounded-pill text-center py-2 px-3 w-100" name="addData">Book </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row data2">
                                                <div class="col-10">
                                                    <div class="form-btn">
                                                    <button type="submit" class="submit-btn rounded-pill text-center py-2 px-3 w-100" name="addDataWithDateTime">book</button>
                                                    </div>
                                                </div>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
                          <script>
                            function showConfirmation() {
                                alert("Confirm booking");
                                return true; // Allow the form submission to proceed
                            }
                        </script>
                        <style>
                            .data1, .data2{
                                display: none;
                            }
                        </style>
                        <script src="assets/js/jquery.min.js"></script>
                        <script>// Booking Button option 
                            $(document).ready(function() {
                                        // Initially hide all data sections
                                        $(".data1").hide();
                                        $(".data2").hide();
                                        // Show the appropriate data section based on the selected value in the "Type" dropdown
                                        $("#b-type3,#t-type3").change(function() {
                                            var selectedType = $("#b-type3").val();
                                            var selectedRide = $("#t-type3").val();
                                            if (selectedType === "one_trip"){ 
                                                if( selectedRide ==="schedule_trip"){
                                                $(".data2").hide();
                                                $(".data1").show();
                                            }else if (selectedRide === "immediate_trip") {
                                                $(".data2, .data1").show();
                                                $('#date3, #time3, #book').hide();
                                            }
                                            }else if (selectedType === "round_trip"){ if (selectedRide ==="schedule_trip"){
                                                $(".data2").hide();
                                                $(".data1").show();
                                            } else if (selectedRide === "immediate_trip") {
                                                $(".data2, .data1").show();
                                                $('#date3, #time3, #book').hide();

                                            }
                                            } else if (selectedType === "hospital_trip"){ if( selectedRide ==="schedule_trip"){
                                                
                                                $(".data1").show();
                                                $(".data2").hide();
                                            }else if (selectedRide === "immediate_trip") {
                                                $(".data2, .data1").show();
                                                $('#date3, #time3, #book').hide();
                                            
                                            }
                                            }else{
                                                $(".data2").hide();
                                                $(".data1").hide();
                                            }
                                        });
                                    });
                            
                        </script>
                    
                    <!-- ================ form control ================ -->
                        <script>
                            $('.form-control').each(function () {
                                floatedLabel($(this));
                                });
                    
                                $('.form-control').on('input', function () {
                                    floatedLabel($(this));
                                });
                    
                                function floatedLabel(input) {
                                    var $field = input.closest('.form-group');
                                    if (input.val()) {
                                        $field.addClass('input-not-empty');
                                    } else {
                                        $field.removeClass('input-not-empty');
                                    }
                            }
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>



<?php require_once 'footer.php'; ?>
