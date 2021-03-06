		<div class="row">
		<div class="box-content">
			<div class="form-group">
				<label class="col-sm-2 control-label">Select Report</label>
				<div class="col-sm-2">	
					<select name="report_list" style="width:100%;" class="form-control" data-validate="required" id="report_list" data-message-required="<?php echo get_phrase('value_required');?>">
						<option value="">Select Report</option>
						<option value="holiday_list">Holidays</option>
						<option value="exam_timetable">Exam Timetable</option>
						<option value="attendance_list">Attendance list</option>
						<option value="mark_list">Marks list</option>
						<option value="timetable_month">Timetable (monthly)</option>
						<option value="study_materials">My Study Material</option>								
					</select>	
				</div>
           </div>		
		</div>
		</div>
		<!-- Dev :==> Brijesh Dhami -->
				<!-- Disc :==> Report For Holiday List -->
				<div class="row" id="holiday" style="display: none">
					<div class="col-md-12">		
						<?php echo form_open(base_url() . 'index.php?student/holiday_pdf' , array('class' => 'form-horizontal form-groups-bordered validate'));?>
							<div class="form-group">
								<label class="col-sm-3 control-label">Holiday List</label>
							</div>	
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-info">Submit</button>
								</div>
							</div> 
						</form>	
					</div>
				</div>

			<!-- End Holiday report -->
			
			<!-- Dev :==> Brijesh Dhami 
				Disc :==> Report For Exam_timetable -->	
				<div class="row" id="exam_timetable" style="display: none">
					<div class="col-md-12">	
						<div class="tabs-vertical-env">
							<div class="tab-content">
								<?php echo form_open(base_url() . 'index.php?student/exam_timetable_pdf' , array('class' => 'form-horizontal form-groups-bordered validate'));?>
									<div class="form-group">
										<label class="col-sm-3 control-label">Exam Timetable</label>
									</div>	
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-5">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
									</div> 
								</form>	
							</div>		
						</div>
					</div>
				</div>	

			<!-- End Non-Teaching report -->
			
			<!-- Dev :==> Brijesh Dhami 
				Disc :==> Report For Study Materials Uploaded List --->
				
		
				<div class="row" id="study_materials" style="display: none">
					<div class="col-md-12">	
						<div class="tabs-vertical-env">
							<div class="tab-content">
								<?php echo form_open(base_url() . 'index.php?student/material_pdf' , array('class' => 'form-horizontal form-groups-bordered validate'));?>										
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-5">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
									</div> 
								</form>	
							</div>		
						</div>
					</div>
				</div>
		<!-- End Non-Teaching report -->
				
			<!-- Dev :==> Brijesh Dhami 
				Disc :==> Report For Group List -->
		
				<div class="row" id="attendance_list" style="display: none">
					<div class="col-md-12">	
						<div class="tabs-vertical-env">
							<div class="tab-content">
								<?php echo form_open(base_url() . 'index.php?student/attendance_pdf' , array('class' => 'form-horizontal form-groups-bordered validate'));?>
									<div class="form-group">
										<label class="col-sm-3 control-label">Month</label>
									</div>	
								
									<select name="report_month" style="width:30%;" class="form-control" id="attendance_list1">
				                         <option value="01">01</option>
										 <option value="02">02</option>
										 <option value="03">03</option>
										 <option value="04">04</option>
										 <option value="05">05</option>
										 <option value="06">06</option>
										 <option value="07">07</option>
										 <option value="08">08</option>
										 <option value="09">09</option>
										 <option value="10">10</option>
										 <option value="11">11</option>
										 <option value="12">12</option>				                         			                 			
									</select>
								
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-5">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
									</div> 
								</form>	
							</div>		
						</div>
					</div>
				</div>

		<!-- End Non-Teaching report -->

		<div class="row" id="mark_listing" style="display: none">
					<div class="col-md-12">	
						<div class="tabs-vertical-env">
							<div class="tab-content">
								<?php echo form_open(base_url() . 'index.php?student/marks_pdf' , array('class' => 'form-horizontal form-groups-bordered validate'));?>
									<div class="form-group">
										<label class="col-sm-3 control-label">Marks Listing</label>
									</div>	
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-5">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
									</div> 
								</form>	
							</div>		
						</div>
					</div>
				</div>	
     

        <!-- Dev :==> Hardik Bhut
				Disc :==> Report For Attendance List --->
				<div class="row" id="attendance" style="display: none">
					<div class="col-md-12">		
						<form action="" method="post">
							<div class="form-group">
					<select name="report_list" style="width:30%;display: none;" class="form-control" id="attendance_list"  >
                        <option value="">Select Attendance</option>
                        <option value="class_wise_attendance">Class Wise</option>
                        <option value="standard_attendance">Standard wise</option>
                        <option value="all_attendance">All</option>				
					</select>
							</div>
                          </form>	
					</div>
				</div>
                
                <div id="main_attendance"> 
                          
                          <div id="attendance_sub_1" style="display:none;"> 
                          <?php echo form_open(base_url() . 'index.php?admin/attendance_pdf/class_wise_attendance' , array('class' => 'form-horizontal validate'));?>	
                          <div class="form-group"> 
                          <select name="class_id" style="width:30%;display: none;" class="form-control" 
                           data-validate="required" id="attendance_list" data-message-required="<?php echo get_phrase('value_required');?>" >
                          <option value="">Select Class</option>
                           <?php $attandance_class=$this->db->get('class')->result_array(); foreach($attandance_class as $attandance_class_row): ?>
                           <option value="<?php echo $attandance_class_row['name_numeric']; ?>"><?php echo $attandance_class_row['name_numeric']; ?> </option>
                           <?php endforeach;  ?>				
					</select>
                          </div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label">From Date</label>
                                <div class="col-sm-3">
                                <input type="text" name="from_date" id="from_date" class="form-control datepicker" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">To Date</label>
                                <div class="col-sm-3">
                                <input type="text" name="to_date" class="form-control datepicker" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" />  
                                </div>
                            </div>
                          <div class="form-group">
										<div class="col-sm-offset-3 col-sm-5">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
						  </div> 
                          </form>
                           </div>
                           
                          <div id="attendance_sub_2" style="display:none;">
                           <?php echo form_open(base_url() . 'index.php?admin/attendance_pdf/standard_attendance' , array('class' => 'form-horizontal validate'));?>	
                          <div class="form-group"> 
                          <select name="class_id" style="width:30%;display: none;" class="form-control" 
                           data-validate="required" id="attendance_list" data-message-required="<?php echo get_phrase('value_required');?>" >
                          <option value="">Select Standard</option>
                          <?php for($h=1; $h<=12; $h++){ ?>
                           <option value="<?php echo $h;?>"><?php echo $h;?></option>
                          <?php }  ?> 			
					</select>
                          </div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label">From Date</label>
                                <div class="col-sm-3">
                                <input type="text" name="from_date" id="from_date" class="form-control datepicker" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">To Date</label>
                                <div class="col-sm-3">
                                <input type="text" name="to_date" class="form-control datepicker" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" />  
                                </div>
                            </div>
                          <div class="form-group">
										<div class="col-sm-offset-3 col-sm-5">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
						  </div> 
                          </form>
                          </div>
                          
                           <div id="attendance_sub_3" style="display:none;"> 
                          <?php echo form_open(base_url() . 'index.php?admin/attendance_pdf/all_attendance' , array('class' => 'form-horizontal validate'));?>	
                           <div class="form-group">
                                <label class="col-sm-3 control-label">From Date</label>
                                <div class="col-sm-3">
                                <input type="text" name="from_date" id="from_date" class="form-control datepicker" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">To Date</label>
                                <div class="col-sm-3">
                                <input type="text" name="to_date" class="form-control datepicker" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" />  
                                </div>
                            </div>
                          <div class="form-group">
										<div class="col-sm-offset-3 col-sm-5">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
						  </div> 
                          </form>
                           </div>
                          </div>
			<!-- End Attendance report -->
            


    		<div class="row" id="timetable_month" style="display: none">
				<div class="col-md-12">	
					<div class="tabs-vertical-env">
						<div class="tab-content">
							<?php echo form_open(base_url() . 'index.php?student/timetable' , array('class' => 'form-horizontal form-groups-bordered validate'));?>
								<div class="form-group">
									<label class="col-sm-3 control-label">Timetable</label>
								</div>	
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-5">
										<button type="submit" class="btn btn-info">Submit</button>
									</div>
								</div> 
							</form>	
						</div>		
					</div>
				</div>
			</div>


            <!-- Dev :==> Hardik Bhut 
				Disc :==> Report For Time Table List -->
				<!-- <div class="row" id="timetable" style="display: none">
					<div class="col-md-12">		
						<form action="" method="post">
							<div class="form-group">
					<select name="timetable_list" style="width:30%;" class="form-control" id="timetable_list" style="display: none" >
                        <option value="">Select Timetable</option>
                        <option value="class_wise_timetable">Class Wise</option>
                        <option value="teacher_wise_timetable">Teacher wise</option>
                   </select>
							</div>
                          </form>	
					</div>
				</div> -->

            <!-- End timetable report -->

            <!--      
                <div id="main_timetable"> 
                          
                          <div id="timetable_sub_1" style="display:none;"> 
                          <?php echo form_open(base_url() . 'index.php?admin/timetable_pdf/class_wise_timetable' , array('class' => 'form-horizontal validate'));?>	
                          	<div class="form-group">
                                <label class="col-sm-1 control-label">Class</label>
                                <div class="col-sm-2">
                                    <select name="class_id" id="class_id" class="form-control" style="width:100%;">
                                        <option value="">Select Class</option>
                                    	<?php 
										$this->db->distinct();
										$this->db->select('class_id');
										$classes = $this->db->get('time_table')->result_array();
										foreach($classes as $row):
										?>
                                    		<option value="<?php echo $row['class_id'];?>"><?php echo $row['class_id'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-1 control-label">Month</label>
                                <div class="col-sm-2">
                                 <select name="month" id="month" class="form-control">
                                 <option value="">Select Month</option>
                        		 <option value="1">January </option>
                                 <option value="2">February </option>
                                 <option value="3">March</option>
                                 <option value="4">April</option>
                                 <option value="5">May </option>
                                 <option value="6">June</option>
                                 <option value="7">July </option>
                                 <option value="8">August </option>
                                 <option value="9">Septmber </option>
                                 <option value="10">October </option>	
                                 <option value="11">November</option>	
                                 <option value="12">December </option>	
                                 
                        		 </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-1 control-label">Week</label>
                                <div class="col-sm-2">
                                 <select name="week" id="week" class="form-control">
                                     <option value="">Select Week</option>
                                     <option value="1">First week</option>
                                     <option value="2">Second week</option>
                                     <option value="3">Third week</option>
                                     <option value="4">Fouth week</option>
                                     <option value="5">Five week</option>
                                 </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="col-sm-2">
                                <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                </div>
                      	  </form>
                           </div>
                           
                          <div id="timetable_sub_2" style="display:none;">
                           <?php echo form_open(base_url() . 'index.php?admin/timetable_pdf/teacher_wise_timetable' , array('class' => 'form-horizontal validate'));?>	
                          <div class="form-group">
                                <label class="col-sm-1 control-label">Teacher</label>
                                <div class="col-sm-2">
                                    <select name="teacher_id" id="teacher_id" class="form-control" style="width:100%;">
                                        <option value="">Select teacher</option>
                                    	<?php 
										$teacher = $this->db->get('teacher')->result_array();
										foreach($teacher as $row):
										?>
                                    		<option value="<?php echo $row['teacher_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-1 control-label">Month</label>
                                <div class="col-sm-2">
                                 <select name="month" id="month" class="form-control">
                                 <option value="">Select Month</option>
                        		 <option value="1">January </option>
                                 <option value="2">February </option>
                                 <option value="3">March</option>
                                 <option value="4">April</option>
                                 <option value="5">May </option>
                                 <option value="6">June</option>
                                 <option value="7">July </option>
                                 <option value="8">August </option>
                                 <option value="9">Septmber </option>
                                 <option value="10">October </option>	
                                 <option value="11">November</option>	
                                 <option value="12">December </option>	
                        		 </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-1 control-label">Week</label>
                                <div class="col-sm-2">
                                 <select name="week" id="week" class="form-control">
                                     <option value="">Select Week</option>
                                     <option value="1">First week</option>
                                     <option value="2">Second week</option>
                                     <option value="3">Third week</option>
                                     <option value="4">Fouth week</option>
                                     <option value="5">Five week</option>
                                 </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="col-sm-2">
                                <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                </div>
                          </form>
                          </div>
                 </div>       
			<!-- End Time Table report -->
		
			 <!-- Dev :==> Hardik Bhut
				Disc :==> Report For Exam Mark List --->
				<div class="row" id="exam_mark" style="display:none;">
					<div class="col-md-12">		
					<form action="" method="post">
					<div class="form-group">
					<select name="exam_mark_list" style="width:30%;" class="form-control" id="exam_mark_list">
                        <option value="">Select exam class</option>
                        <option value="class_wise_exam">Exam Class Wise</option>
                        <option value="student_mark">Student Marks</option>
                        <option value="class_wise_top3_student">Top 3 student of each class</option>
                        <option value="subject_wise_top3_student">Subject wise toppers</option>
                   </select>
					</div>
                    </form>	
					</div>
				</div>
                
                <div id="main_exam_mark"> 
                 <div id="exam_mark_sub_1" style="display:none;"> 
                 	<?php echo form_open(base_url() . 'index.php?admin/exam_mark_pdf/class_wise_exam' , array('class' => 'form-horizontal validate'));?>
                    	<div class="form-group">
                                <label class="col-sm-1 control-label">Class</label>
                                <div class="col-sm-2">
                                    <select name="class_id" id="class_id" class="form-control" style="width:100%;" onchange="return get_exam(this.value)" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                        <option value="">Select Class</option>
                                    	<?php 
										$this->db->distinct();
										$this->db->select('class_id');
										$classes = $this->db->get('exam')->result_array();
										foreach($classes as $row):
										?>
                                    		<option value="<?php echo $row['class_id'];?>"><?php echo $row['class_id'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-1 control-label">Exam</label>
                                <div class="col-sm-2">
                                    <select name="exam_id" id="exam_listing" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" class="form-control" style="width:100%;">
                                        <option value="">Select exam</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group">
                             <div class="col-sm-6">
                               <button type="submit" class="btn btn-info">Submit</button>
                             </div>
                             </div>   
                    </form>
                 </div>
                 
                 <div id="exam_mark_sub_2" style="display:none;">
                 <?php echo form_open(base_url() . 'index.php?admin/exam_mark_pdf/student_mark' , array('class' => 'form-horizontal validate'));?>
                    	<div class="form-group">
                                <label class="col-sm-1 control-label">Class</label>
                                <div class="col-sm-2">
                                    <select name="class_id" id="class_id" class="form-control" style="width:100%;" onchange="return get_student_name_exam(this.value)" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                        <option value="">Select Class</option>
                                    	<?php 
										$this->db->distinct();
										$this->db->select('class_id');
										$student_classes = $this->db->get('student')->result_array();
										foreach($student_classes as $row):
										?>
                                    		<option value="<?php echo $row['class_id'];?>"><?php echo $row['class_id'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-1 control-label">Exam</label>
                                <div class="col-sm-2">
                                    <select name="exam_id" id="exam_listing_mark" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" class="form-control exam_listing_mark" style="width:100%;">
                                        <option value="">Select exam</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Student</label>
                                <div class="col-sm-2">
                                    <select name="student_id" id="student_listing" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" class="form-control" style="width:100%;">
                                        <option value="">Select Student</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                             <div class="col-sm-6">
                               <button type="submit" class="btn btn-info">Submit</button>
                             </div>
                             </div>   
                    </form>
                 </div>
                 <div id="exam_mark_sub_3" style="display:none;">
                 <?php echo form_open(base_url() . 'index.php?admin/exam_mark_pdf/class_wise_top3_student' , array('class' => 'form-horizontal validate'));?>
                    	<div class="form-group">
                                <label class="col-sm-1 control-label">Class</label>
                                <div class="col-sm-2">
                                    <select name="class_id" id="class_id" class="form-control" style="width:100%;" onchange="return get_student_name_exam(this.value)" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                        <option value="">Select Class</option>
                                    	<?php 
										$this->db->distinct();
										$this->db->select('class_id');
										$student_classes = $this->db->get('student')->result_array();
										foreach($student_classes as $row):
										?>
                                    		<option value="<?php echo $row['class_id'];?>"><?php echo $row['class_id'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-1 control-label">Exam</label>
                                <div class="col-sm-2">
                                    <select name="exam_id" id="exam_listing_mark" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" class="form-control exam_listing_mark" style="width:100%;">
                                        <option value="">Select exam</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group">
                             <div class="col-sm-6">
                               <button type="submit" class="btn btn-info">Submit</button>
                             </div>
                             </div>   
                    </form>
                 </div>
                 <div id="exam_mark_sub_4" style="display:none;">
                 <?php echo form_open(base_url() . 'index.php?admin/exam_mark_pdf/subject_wise_top3_student' , array('class' => 'form-horizontal validate'));?>
                    	<div class="form-group">
                                <label class="col-sm-1 control-label">Subject</label>
                                <div class="col-sm-2">
                                    <select name="subject" id="subject" class="form-control" style="width:100%;" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                                        <option value="">Select subject</option>
                                    	<?php 
										//$this->db->distinct();
										//$this->db->select('class_id');
										$student_classes = $this->db->get('subject')->result_array();
										foreach($student_classes as $row):
										?>
                                    		<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-1 control-label">Standard</label>
                                <div class="col-sm-2">
                                    <select name="standard" id="standard" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" class="form-control" style="width:100%;">
                                        <option value="">Select Standard</option>
                                        <?php for($h=1;$h<=12;$h++){ ?>
                                        <option value="<?php echo $h; ?>"><?php echo $h; ?></option>
                                       <?php }?>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group">
                             <div class="col-sm-6">
                               <button type="submit" class="btn btn-info">Submit</button>
                             </div>
                             </div>   
                    </form>
                 </div>
                </div>
          	<!-- End Exam Mark report -->
	 </div>
 <script type="text/javascript">
     $(function () {
			$("#report_list").change(function () {
                if ($(this).val() == "exam_timetable") {
                    $("#holiday").hide();
					$("#mark_listing").hide();
					$("#attendance_list").hide();
					$("#fees_listing").hide();
					$("#study_materials").hide();
					$("#staff_attendence").hide();
					$("#timetable_month").hide();
					$("#exam_timetable").show();
					$("#attendance_sub_1").hide();
					$("#attendance_sub_2").hide();
					$("#attendance_sub_3").hide();
					$("#timetable").hide();
					$("#timetable_sub_1").hide();
					$("#timetable_sub_2").hide();
					$("#attendance").hide();
					$("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();					
                } else if ($(this).val() == "holiday_list") {
                    $("#holiday").show();
					$("#timetable_month").hide();
					$("#mark_listing").hide();
					$("#non_teaching").hide();
					$("#exam_timetable").hide();
					$("#study_materials").hide();
					$("#staff_attendence").hide();
					$("#attendance_list").hide();
					$("#attendance").hide();
					$("#attendance_sub_1").hide();
					$("#attendance_sub_2").hide();
					$("#attendance_sub_3").hide();
					$("#timetable").hide();
					$("#timetable_sub_1").hide();
					$("#timetable_sub_2").hide();
					$("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
                }else if ($(this).val() == "attendance_list") {
                    $("#attendance_list").show();
					 $("#holiday").hide();
					 $("#timetable_month").hide();
					 $("#fees_listing").hide();
					 $("#mark_listing").hide();
					 $("#study_materials").hide();
					 $("#staff_attendence").hide();
					 $("#exam_timetable").hide();
					 $("#attendance").hide();
					 $("#attendance_sub_1").hide();
					 $("#attendance_sub_2").hide();
					 $("#attendance_sub_3").hide();
					 $("#timetable").hide();
					 $("#timetable_sub_1").hide();
					 $("#timetable_sub_2").hide();
					 $("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
                }else if ($(this).val() == "mark_list") {
                    $("#attendance_list").hide();
					 $("#holiday").hide();
					 $("#timetable_month").hide();
					 $("#exam_timetable").hide();
					 $("#fees_listing").hide();
					 $("#study_materials").hide();
					 $("#staff_attendence").hide();
					 $("#mark_listing").show();
					 $("#attendance").hide();
					 $("#attendance_sub_1").hide();
					 $("#attendance_sub_2").hide();
					 $("#attendance_sub_3").hide();
					 $("#timetable").hide();
					 $("#timetable_sub_1").hide();
					 $("#timetable_sub_2").hide();
					 $("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
                }else if ($(this).val() == "timetable_month") {
                    $("#mark_listing").hide();
					 $("#holiday").hide();
					 $("#exam_timetable").hide();
					 $("#non_teaching").hide();
					 $("#fees_listing").hide();
					 $("#attendance_list").hide();
					 $("#staff_attendence").hide();
					 $("#study_materials").hide();
					 $("#timetable_month").show();
					 $("#attendance").hide();
					 $("#attendance_sub_1").hide();
					 $("#attendance_sub_2").hide();
					 $("#attendance_sub_3").hide();
					 $("#timetable").hide();
					 $("#timetable_sub_1").hide();
					 $("#timetable_sub_2").hide();
					 $("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
                }else if ($(this).val() == "study_materials") {
                     $("#notification").hide();
					 $("#holiday").hide();
					 $("#timetable_month").hide();
					 $("#attendance_list").hide();
					 $("#exam_timetable").hide();
					 $("#mark_listing").hide();	
					 $("#staff_attendence").hide();
					 $("#attendance").hide();
					 $("#attendance_sub_1").hide();
					 $("#attendance_sub_2").hide();
					 $("#attendance_sub_3").hide();					 
					 $("#study_materials").show();
					 $("#timetable").hide();
					 $("#timetable_sub_1").hide();
					 $("#timetable_sub_2").hide();
					 $("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
                }else if ($(this).val() == "staff_attendence") {
                    $("#notification").hide();
					 $("#holiday").hide();
					 $("#ind_student").hide();
					 $("#non_teaching").hide();
					 $("#fees_listing").hide();
					 $("#group_list").hide();	
					 $("#staff_attendence").show();					 
					 $("#study_materials").hide();
					 $("#timetable").hide();
					 $("#timetable_sub_1").hide();
					 $("#timetable_sub_2").hide();
					 $("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
                }else if ($(this).val() == "ind_student") {
                    $("#notification").hide();
					 $("#holiday").hide();
					 $("#ind_student").show();
					 $("#non_teaching").hide();
					 $("#fees_listing").hide();
					 $("#group_list").hide();	
					 $("#staff_attendence").hide();					 
					 $("#study_materials").hide();
					 $("#attendance").hide();
					 $("#attendance_sub_1").hide();
					 $("#attendance_sub_2").hide();
					 $("#attendance_sub_3").hide();
					 $("#timetable").hide();
					 $("#timetable_sub_1").hide();
					 $("#timetable_sub_2").hide();
					 $("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
                }else if ($(this).val() == "attendance") {
					$("#attendance").show();
					$("#holiday").hide();
					$("#notification").hide();
					$("#group_list").hide();
					$("#fees_listing").hide();
					$("#study_materials").hide();
					$("#staff_attendence").hide();
					$("#ind_student").hide();
					$("#non_teaching").hide();
					$("#attendance_sub_1").hide();
					$("#attendance_sub_2").hide();
					$("#timetable").hide();
					$("#timetable_sub_1").hide();
					$("#timetable_sub_2").hide();
					$("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
				}else if ($(this).val() == "timetable") {
					$("#timetable").show();
					$("#timetable_sub_1").hide();
					$("#timetable_sub_2").hide();
					$("#attendance").hide();
					$("#holiday").hide();
					$("#notification").hide();
					$("#group_list").hide();
					$("#fees_listing").hide();
					$("#study_materials").hide();
					$("#staff_attendence").hide();
					$("#ind_student").hide();
					$("#non_teaching").hide();
					$("#attendance_sub_1").hide();
					$("#attendance_sub_2").hide();
					$("#exam_mark").hide();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
			    }else if ($(this).val() == "exam_mark") {
					$("#exam_mark").show();
					$("#exam_mark_sub_1").hide();
					$("#exam_mark_sub_2").hide();
					$("#exam_mark_sub_3").hide();
					$("#exam_mark_sub_4").hide();
					$("#exam_mark_sub_5").hide();
					$("#timetable").hide();
					$("#timetable_sub_1").hide();
					$("#timetable_sub_2").hide();
					$("#attendance").hide();
					$("#holiday").hide();
					$("#notification").hide();
					$("#group_list").hide();
					$("#fees_listing").hide();
					$("#study_materials").hide();
					$("#staff_attendence").hide();
					$("#ind_student").hide();
					$("#non_teaching").hide();
					$("#attendance_sub_1").hide();
					$("#attendance_sub_2").hide();
					}		
				else{
					  $("#notification").hide();
					  $("#holiday").hide();
					  $("#ind_student").hide();
					  $("#non_teaching").hide();
					  $("#group_list").hide();
					  $("#fees_listing").hide();
					  $("#staff_attendence").hide();
					  $("#study_materials").hide();
					  $("#attendance").hide();
					  $("#attendance_sub_1").hide();
					  $("#attendance_sub_2").hide();
					  $("#attendance_sub_3").hide();
					  $("#timetable").hide();
					  $("#timetable_sub_1").hide();
					  $("#timetable_sub_2").hide();
					  $("#exam_mark").hide();
					  $("#exam_mark_sub_1").hide();
					  $("#exam_mark_sub_2").hide();
					  $("#exam_mark_sub_3").hide();
					  $("#exam_mark_sub_4").hide();
					  $("#exam_mark_sub_5").hide();
					  
				}
            });
        });

		 $(function () {
            $("#attendance_list1").change(function () {
					 if($("#timetable_list").val()=="class_wise_timetable"){
						  $("#timetable").show();
					      $("#timetable_sub_1").show();
					      $("#timetable_sub_2").hide();
						  $("#attendance_sub_1").hide();
						  $("#attendance_sub_2").hide();
						  $("#attendance_sub_3").hide();
						  $("#attendance").hide();
						  $("#notification").hide();
						  $("#holiday").hide();
						  $("#ind_student").hide();
						  $("#non_teaching").hide();
						  $("#group_list").hide();
						  $("#fees_listing").hide();
						  $("#staff_attendence").hide();
						  $("#study_materials").hide();
					}else if($("#timetable_list").val()=="teacher_wise_timetable"){
						  $("#timetable").show();
					      $("#timetable_sub_2").show();	
						  $("#timetable_sub_1").hide();
					      $("#attendance_sub_1").hide();
						  $("#attendance_sub_2").hide();
						  $("#attendance_sub_3").hide();
						  $("#attendance").hide();
						  $("#notification").hide();
						  $("#holiday").hide();
						  $("#ind_student").hide();
						  $("#non_teaching").hide();
						  $("#group_list").hide();
						  $("#fees_listing").hide();
						  $("#staff_attendence").hide();
						  $("#study_materials").hide();
					}
					
				});
        });
		
		 $(function () {
            $("#exam_mark_list").change(function () {
					 if($("#exam_mark_list").val()=="class_wise_exam"){
						  $("#exam_mark").show();
						  $("#exam_mark_sub_1").show();
						  $("#exam_mark_sub_2").hide();
						  $("#exam_mark_sub_3").hide();
						  $("#exam_mark_sub_4").hide();
						  $("#exam_mark_sub_5").hide();
						  $("#attendance_sub_1").hide();
						  $("#attendance_sub_2").hide();
						  $("#attendance_sub_3").hide();
						  $("#attendance").hide();
						  $("#notification").hide();
						  $("#holiday").hide();
						  $("#ind_student").hide();
						  $("#non_teaching").hide();
						  $("#group_list").hide();
						  $("#fees_listing").hide();
						  $("#staff_attendence").hide();
						  $("#study_materials").hide();
						  $("#timetable").hide();
					      $("#timetable_sub_1").hide();
					      $("#timetable_sub_2").hide();
					}
					else if($("#exam_mark_list").val()=="student_mark"){
						  $("#exam_mark").show();
						  $("#exam_mark_sub_1").hide();
						  $("#exam_mark_sub_2").show();
						  $("#exam_mark_sub_3").hide();
						  $("#exam_mark_sub_4").hide();
						  $("#exam_mark_sub_5").hide();	
						  $("#attendance_sub_1").hide();
						  $("#attendance_sub_2").hide();
						  $("#attendance_sub_3").hide();
						  $("#attendance").hide();
						  $("#notification").hide();
						  $("#holiday").hide();
						  $("#ind_student").hide();
						  $("#non_teaching").hide();
						  $("#group_list").hide();
						  $("#fees_listing").hide();
						  $("#staff_attendence").hide();
						  $("#study_materials").hide();
						  $("#timetable").hide();
					      $("#timetable_sub_1").hide();
					      $("#timetable_sub_2").hide();
					}
					else if($("#exam_mark_list").val()=="class_wise_top3_student"){
						  $("#exam_mark").show();
						  $("#exam_mark_sub_1").hide();
						  $("#exam_mark_sub_2").hide();
						  $("#exam_mark_sub_3").show();
						  $("#exam_mark_sub_4").hide();
						  $("#exam_mark_sub_5").hide();
						  $("#attendance_sub_1").hide();
						  $("#attendance_sub_2").hide();
						  $("#attendance_sub_3").hide();
						  $("#attendance").hide();
						  $("#notification").hide();
						  $("#holiday").hide();
						  $("#ind_student").hide();
						  $("#non_teaching").hide();
						  $("#group_list").hide();
						  $("#fees_listing").hide();
						  $("#staff_attendence").hide();
						  $("#study_materials").hide();
						  $("#timetable").hide();
					      $("#timetable_sub_1").hide();
					      $("#timetable_sub_2").hide();
					}else if($("#exam_mark_list").val()=="subject_wise_top3_student"){
						  $("#exam_mark").show();
						  $("#exam_mark_sub_1").hide();
						  $("#exam_mark_sub_2").hide();
						  $("#exam_mark_sub_3").hide();
						  $("#exam_mark_sub_4").show();
						  $("#exam_mark_sub_5").hide();
						  $("#attendance_sub_1").hide();
						  $("#attendance_sub_2").hide();
						  $("#attendance_sub_3").hide();
						  $("#attendance").hide();
						  $("#notification").hide();
						  $("#holiday").hide();
						  $("#ind_student").hide();
						  $("#non_teaching").hide();
						  $("#group_list").hide();
						  $("#fees_listing").hide();
						  $("#staff_attendence").hide();
						  $("#study_materials").hide();
						  $("#timetable").hide();
					      $("#timetable_sub_1").hide();
					      $("#timetable_sub_2").hide();
					}
				});
        });
		
		
function get_exam(class_id) {
	 
	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_exam/' + class_id,
            success: function(response)
            {
				jQuery('#exam_listing').html(response);
	        }
       });
   }
function get_student_name_exam(class_id) {
	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_exam_list_mark/' + class_id,
            success: function(response)
            {
				jQuery('.exam_listing_mark').html(response);
	        }
       });
   	   $.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_student_list_mark/' + class_id,
            success: function(response)
            {
				jQuery('#student_listing').html(response);
            }
       });
}
    </script>	

