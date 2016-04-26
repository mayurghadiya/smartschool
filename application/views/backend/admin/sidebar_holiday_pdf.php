

<div class="row">
	<div class="col-md-12"> 
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list" style="width:100%;">
            
          
                <table class="table datatable table" border="0" cellpadding="0" cellspacing="0" style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:14px; letter-spacing:0.5;" id="table_export">
                	<thead>
                    <tr>
                            <td colspan="4">
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
                        <tr><td colspan="4" style="height:15px;"></td></tr>
                        <tr bgcolor="#000000"><td colspan="4" style="font-size:1.2em; text-align:center; font-weight:600; padding:6px 0px; color:#FFF;">Holiday Listing</td></tr>
                		
                        <tr bgcolor="#2092D0">
                    		<th style="color:#FFF; border-right:1px solid #EEE; text-align:center; padding:6px 2px;border-top:1px solid #eee;">No</th>
                    		<th style="color:#FFF; border-right:1px solid #EEE; text-align:center; padding:6px 2px;border-top:1px solid #eee;">Holiday Name</th>
                            <th style="color:#FFF; border-right:1px solid #EEE; text-align:center; padding:6px 2px;border-top:1px solid #eee;">Detail</th>
                    		<th style="color:#FFF; border-right:1px solid #EEE; text-align:center; padding:6px 2px;border-top:1px solid #eee;">Date</th>  
						</tr>
                       
					</thead>
                    <tbody>
                    	<?php 
						$this->db->order_by('holiday_date','asc');
						$holiday = $this->db->get('holiday')->result_array();
						$count = 1;
						if(count($holiday) > 0){
						foreach($holiday as $row):?>
                        <tr>
                            <td align="center" style="font-size:11px; padding:6px 2px; border-bottom:1px solid #EEE; border-left:1px solid #EEE; border-right:1px solid #EEE;"><?php echo $count++;?></td>							
							<td align="center" style="font-size:11px; padding:6px 2px; border-bottom:1px solid #EEE; border-left:0px solid #EEE; border-right:1px solid #EEE;"><?php echo $row['holiday_name'];?></td>
                             <td align="center" style="font-size:11px; padding:6px 2px; border-bottom:1px solid #EEE; border-left:0px solid #EEE; border-right:1px solid #EEE;"><?php echo $row['holiday_detail'];?></td>
							<td align="center" style="font-size:11px; padding:6px 2px; border-bottom:1px solid #EEE; border-left:1px solid #EEE; border-right:1px solid #EEE;"><?php echo date("F d, Y",strtotime( $row['holiday_date']));?></td>							
                        </tr>
                         <?php endforeach;
						}
						else
						{
						?>	
						<tr><td align="left" style="font-size:11px; padding:6px 0px;" colspan="3">*No record found..</td></tr>
						<?php 
						}
						?>
                    </tbody>
                    
                     <tr>
                        <td valign="middle" align="right" colspan="4" style="padding:12px 0px; border-top:2px solid #2092D0; font-size:11px;"><span style="color:#2092D0;">Generated By : </span> <?php echo $this->session->userdata('name');?> </td>
                        </tr>
                    	
                </table>
                
			</div>
            <!----TABLE LISTING ENDS--->
		</div>
	</div>
</div>



