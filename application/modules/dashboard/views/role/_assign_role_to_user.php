
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">
                     <a href="<?php echo base_url('dashboard/role/user_access_role')?>" type="button" class="btn btn-success my-modal pull-right">
                      <i class="fa fa-plus"></i><?php echo display('user_access_role')?>
                    </a>
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <?php echo form_open("dashboard/role/save_role_access") ?>
            <div class="panel-body">

                        <div class="form-group row">
                                <label for="user_id" class="col-sm-3 col-form-label"><?php echo display('user') ?> *</label>
                                <div class="col-sm-9">
                                    <select class="form-control" onchange="checkedrole(this.value)"  name="user_id" id="user_id" required="">
                                        <option value="">--Select--</option>
                                        <?php 
                                           foreach($user as $val){
                                            echo '<option value="'.$val->id.'">'.$val->firstname.' '.$val->lastname.'.</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="role_id" class="col-sm-3 col-form-label"><?php echo display('role') ?> *</label>
                                <div class="col-sm-9">
                                <?php foreach($role as $val){ ?>
                                    <label class="radio-inline radio-inline-new">
                                        <input type="checkbox" name="role[]" id="role_<?php echo $val->role_id;?>" value="<?php echo $val->role_id;?>"> <?php echo $val->role_name;?>
                                    </label> 
                                <?php } ?>
                                </div>
                            </div>

                   

                    <div class="form-group form-group-margin text-right">
                       <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>


            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>











 
 