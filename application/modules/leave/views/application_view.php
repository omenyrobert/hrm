<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-bd"> 

            <div class="panel-heading">
              <div class="panel-title">
                  <h4>
                    <?php echo display('manage_application')?>
                  </h4>
              </div>
            </div>

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                             <th><?php echo display('name') ?></th>
                            <th><?php echo display('employee_id') ?></th>
                            <th><?php echo display('apply_strt_date') ?></th>
                           <th><?php echo display('apply_end_date') ?></th>
                           <th><?php echo display('leave_aprv_strt_date') ?></th>
                           <th><?php echo display('leave_aprv_end_date') ?></th>
                            <th><?php echo display('status') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mang)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($mang as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                <td><?php   echo $row->first_name.' '.$row->last_name?></td>
                                <td><?php   echo $row->employee_id?></td>
                                <td><?php echo $row->apply_strt_date; ?></td>
                                <td><?php echo $row->apply_end_date; ?></td>
                                <td><?php echo $row->leave_aprv_strt_date; ?></td>
                                <td><?php echo $row->leave_aprv_end_date; ?></td> 
                                <td><?php $status = $row->status;
                                if($status == 1){echo 'Approved';}else{
                                echo 'Pending';} ?></td>
                                   <td class="center">

                                    <?php if($this->permission->check_label('leave_application')->update()->access()): ?>
                                        <a href="<?php echo base_url("leave/Leave/approve_application_form/$row->leave_appl_id") ?>" title="Leave Approve" class="btn btn-xs btn-info"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                                        <?php endif; ?>   

                                    <?php if($this->permission->check_label('leave_application')->update()->access()): ?>
                                        <a href="<?php echo base_url("leave/Leave/update_application_form/$row->leave_appl_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <?php endif; ?>
                                    
 
                                    <?php if($this->permission->check_label('leave_application')->delete()->access()): ?>
                                        <a href="<?php echo base_url("leave/Leave/delete_application/$row->leave_appl_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-close"></i></a>
                                         <?php endif; ?> 
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>