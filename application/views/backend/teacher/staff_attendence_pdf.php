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
                        <tr bgcolor="#000000"><td colspan="5" style="font-size:1.2em; text-align:center; font-weight:600; padding:6px 0px; color:#FFF;">Staff Attendance Listing</td></tr>
                		
                        <tr bgcolor="#2092D0">
                    		<th style="color:#FFF;border-right:1px solid #EEE;  text-align:center; padding:6px 3px;" width="20%">No</th>
                    		<th style="color:#FFF;border-right:1px solid #EEE;  text-align:center; padding:6px 3px;" width="20%">Absent Date</th>
                    		<th style="color:#FFF;border-right:1px solid #EEE;  text-align:center; padding:6px 3px;" width="20%">Staff</th>
                            <th style="color:#FFF; border-right:1px solid #EEE;  text-align:center; padding:6px 3px;" width="20%">Reason for Absence</th> 							
                            <th style="color:#FFF; border-right:1px solid #EEE;text-align:center; padding:6px 3px;" width="20%">Type of Leave</th>  							
						</tr>
					</thead>
                    <tbody>
                    	<?php 
						$teacher_id =	$this->session->userdata('teacher_id');
						$array = array("attendance.status"=>2,"attendance.teacher_id"=>$teacher_id);
						$this->db->select('*');
						$this->db->from('attendance');
						$this->db->join('teacher', 'teacher.teacher_id = attendance.teacher_id');
						$this->db->where($array);
						$this->db->order_by('date','asc');
						$query = $this->db->get();
						$attendance =$query->result();
						$count = 1;
						
						foreach($attendance as $att_row):						
						?>
                        <tr>
                            <td align="center" style="font-size:11px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:1px solid #EEE; border-right:1px solid #EEE;" width="20%"><?php echo $count++;?></td>
							<td align="center" style="font-size:11px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:0px solid #EEE; border-right:0px solid #EEE;" width="20%" ><?php echo date("F d, Y",strtotime($att_row->date));?></td>
							<td align="center" style="font-size:11px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:0px solid #EEE; border-right:0px solid #EEE;" width="20%"><?php echo $att_row->name;?></td>
                             <td align="center" style="font-size:11px; padding:6px 3px;  border-bottom:1px solid #EEE; border-left:0px solid #EEE; border-right:0px solid #EEE;" width="20%"><?php echo $att_row->description;?></td>
                               <td align="center" style="font-size:11px; padding:6px 3px; border-bottom:1px solid #EEE; border-left:0px solid #EEE; border-right:0px solid #EEE;" width="20%"><?php echo $att_row->leave_type;?></td>
                        </tr>
                       <?php 						
						endforeach;  
						
						?>
                    </tbody>
                    
                     <tr>
                        <td valign="middle" align="right" colspan="5" style="padding:12px 2px; border-top:2px solid #2092D0; font-size:10px;"><span style="color:#2092D0;">Generated By : </span> <?php echo $this->session->userdata('name');?> </td>
                        </tr>
                    	
                </table>
                
			</div>
            <!----TABLE LISTING ENDS--->
		</div>
	</div>
</div>



