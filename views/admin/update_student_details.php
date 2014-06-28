<div class="row">
                                                             <!== ====================Student's information===============-->
                                                            <div class="col-md-6 col-md-offset-3">

                                                                <form id="update_form" name="update_form" method="post" accept-charset="utf-8" class="form" role="form">  

                                                                    <h4>Student's Information</h4><hr>
                                                                    <div class="row"><br>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" id="update_first_name" name="update_first_name" value="" class="form-control input-lg" placeholder="First Name"  required/>                        </div>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" id="update_last_name" name="update_last_name" value="" class="form-control input-lg" placeholder="Last Name" required />                        </div>
                                                                    </div>
                                                                    <input type="number" id="update_roll_no" name="update_roll_no" value="" class="form-control input-lg" placeholder=" Roll Number" required />

                                                                    <div class="form-group">
                                                                        <label for="name">Address</label>
                                                                        <textarea class="form-control" rows="3" id="update_address" name="update_address" required></textarea>
                                                                    </div>

                                                                    <input type="dob" placeholder="Enter Date of Birth in dd-mm-yyyy format" id="update_dob" name="update_dob" class="form-control input-lg" required>
                                                                    <input type="email" id="update_email_id" name="update_email_id" value="" class="form-control input-lg" placeholder="Your Email" required  />
                                                                   
                                                                    <input type="tel" id="update_contact_no" name="update_contact_no" value="" class="form-control input-lg" placeholder="Phone Number"  required/>
                                                                    <hr>
                                                                    
                                                                    <!== ====================Parent's information===============-->
                                                                    <h4>Parent's Information</h4><hr>
                                                                    <h5> Father's Name </h5>
                                                                    <div class="row"><br>
                                                                       
                                                                        <div class="col-xs-6 col-md-6">
                                                                            
                                                                            <input type="text" name="update_father_first_name" id="update_father_first_name" value="" class="form-control input-lg" placeholder="First Name"  required/>                      
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" name="update_father_last_name" id="update_father_last_name" value="" class="form-control input-lg" placeholder=" Last Name" required />                     
                                                                        </div>
                                                                    </div>
                                                                   <h5> Mother's Name </h5>
                                                                    <div class="row"><br>
                                                                       
                                                                        <div class="col-xs-6 col-md-6">
                                                                            
                                                                            <input type="text" name="update_mother_first_name" id="update_mother_first_name" value="" class="form-control input-lg" placeholder=" First Name"  required/>                      
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-6">
                                                                            <input type="text" name="update_mother_last_name" id="update_mother_last_name" value="" class="form-control input-lg" placeholder=" Last Name" required />                     
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">Parent's Address</label>
                                                                        <textarea class="form-control" rows="3" id="update_parent_address" name="update_parent_address" required></textarea>
                                                                    </div>
                                                                   <input type="email" name="update_parents_email" id="update_parent_email" value="" class="form-control input-lg" placeholder="Parent's Email Address" required  />
                                                                   
                                                                   <input type="tel" name="update_parent_contact_no" id="update_parent_contact_no" value="" class="form-control input-lg" placeholder=" Parent's Phone Number"  required/>
              
                                                                    <button class="btn btn-lg btn-success btn-block signup-btn" id="update_student_submit" name="update_student_submit" type="submit">
                                                                        Submit
                                                                    </button>
                                                                   <br>
                                                                    <div id="update_successful" class="alert-success" style="font-size: 10px"></div>
                                                                        <div id="update_failed" class="alert-danger" style="font-size: 10px"></div>
                                                                </form>          
                                                            </div>
</div>
