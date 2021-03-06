<div class="row">
	<div class="col-md-12"> 
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list" style="width:100%;">
            
          
                 <table class="table datatable table" border="0" cellpadding="0" cellspacing="0" style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:14px; letter-spacing:0.5;" id="table_export">
                	<thead>
                   <tr>
                            <td colspan="5">
                                <table width="100%">
                                    <tr>
                                        <td width="33.33%"  valign="middle" align="left";><div><?php  $image = base_url().'/uploads/system_image/1.jpg'; ?>
                                        <img src="<?php echo $image; ?>" width="80" height="70" /></div></td>
                                        <td width="33.33%" valign="middle" align="center"><div style="font-size:1.8em; text-align:center; font-weight:600; color:#000;">Page Inc School</div></td>
                                        <td width="33.33%" valign="bottom" align="right" style="font-size:12px;"><div>Date : <?php echo date('jS M Y'); ?> </div></td>     
                                    </tr>
                                </table>
                            </td>
                    </tr>
                        <tr><td colspan="5" style="height:15px;"></td></tr>
                        <tr bgcolor="#000000"><td colspan="5" style="font-size:1.2em; text-align:center; font-weight:600; padding:6px 0px; color:#FFF;">Student Absent Listing</td></tr>
                        <?php $students = $this->db->get_where('student',array('student_id'=>$student_id))->row(); ?>
                         <tr bgcolor="#000000"><td colspan="5" style="font-size:1.0em;border-top:1px solid #EEE;  text-align:center; font-weight:600;  color:#FFF;  padding:6px 0px;"> <?php echo ucwords('Class Name : <span style="text-align:right;color:#2092D0;font-size:1.0em;font-weight:600;">'.$class_id.'</span> Student Name : <span style="text-align:right;color:#2092D0;font-size:1.0em;font-weight:600;">'.$students->name.'</span>'); ?></td></tr>
                		
                		
                        <tr bgcolor="#2092D0">
                    		<th style="color:#FFF; border-right:1px solid #EEE; padding:6px 3px;" width="5%">Roll no</th>
                    		<th style="color:#FFF; border-right:1px solid #EEE; padding:6px 3px;" width="25%">Student Name</th>
                    		<th style="color:#FFF; border-right:1px solid #EEE; padding:6px 3px;" width="30%">Absent Date</th>
                             <th style="color:#FFF;  border-right:1px solid #EEE; text-align:center; padding:6px 3px; " width="20%" >Reason for Absence</th> 							
                            <th style="color:#FFF; border-right:1px solid #EEE;text-align:center; padding:6px 3px;" width="20%" >Type of Leave</th>   
                          			
						</tr>
					</thead>
                    <tbody>
                    	<?php 
						$this->db->join('student', 'student.student_id = attendance.student_id');
						$this->db->where('attendance.attandence_class', $class_id);
						$this->db->where('attendance.student_id',$student_id);
						$this->db->where('attendance.status',2);
						$attendance = $this->db->get('attendance')->result_array();
						$count = 1;foreach($attendance as $row_attendance):
						
						?>
                        <tr>
                            <td valign="middle" align="center"  style="font-size:13px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:1px solid #EEE; border-right:1px solid #EEE;" width="5%"><?php echo $row_attendance['roll'];?></td>							
							<td valign="middle" align="center" style="font-size:13px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:0px solid #EEE; border-right:0px solid #EEE;" width="25%"><?php echo $row_attendance['name'].' '.$row_attendance['father_name'] ;?></td>
							<td valign="middle" align="center" style="font-size:13px; line-height:18px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:1px solid #EEE; border-right:1px solid #EEE;" width="30%"><?php echo date("F d, Y",strtotime($row_attendance['date']));?></td>		
                              <td valign="middle" align="center" style="font-size:13px; line-height:18px; padding:6px 3px;  border-bottom:1px solid #EEE; border-left:1px solid #EEE; border-right:1px solid #EEE;" width="20%"><?php echo $row_attendance['description'];?></td>							
                            <td valign="middle" align="center" style="font-size:13px; line-height:18px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:1px solid #EEE; border-right:1px solid #EEE;" width="20%"><?php echo $row_attendance['leave_type'];?></td>							
                        </tr>
                        <?php endforeach;?>
                    </tbody>
					<tr>
                        <td valign="middle" align="right" colspan="5" style="padding:12px 2px; border-top:2px solid #2092D0; font-size:9px;"><span style="color:#2092D0;">Generated By : </span> <?php echo $this->session->userdata('name');?> </td> 
                        </tr>
                </table>
                
			</div>
            <!----TABLE LISTING ENDS--->
		</div>
	</div>
</div>



