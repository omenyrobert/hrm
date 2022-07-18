
<link href="<?php echo MOD_URL.'projectmanagement/assets/css/project.css'; ?>" rel="stylesheet" type="text/css"/>

<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span class="title"><?php echo $title; ?></span>
                        </div>
                    </div>
                    <?php echo form_open_multipart('projectmanagement/Pm_projects/project_update/'.$id, array('class' => 'form-vertical', 'id' => 'update_project', 'name' => 'update_project')) ?>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group row">
                                    <label for="project_name" class="col-sm-3 col-form-label"><?php echo display('project_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-9">
                                        <input type="text"class="form-control" name="project_name" id="project_name" required="" placeholder="<?php echo display('project_name') ?>" value="<?php if(!empty($project_data->project_name)){echo $project_data->project_name;}?>">

                                        <input type="hidden" name="old_project_name" value="<?php if(!empty($project_data->project_name)){echo $project_data->project_name;}?>">
                                        <input type="hidden" name="project_id" value="<?php if(!empty($project_data->project_id)){echo $id;}?>">

                                    </div>
                                </div>

                                <div class="form-group row">
                                       
                                    <label for="client" class="col-sm-3 col-form-label">
                                    <?php echo display('client') ?><i class="text-danger">*</i></label>
                                    <div class="col-sm-9">

                                        <div class="row">
                                            <div class="col-sm-9">

                                                <input type="text" name="client" id="client" class="form-control" required placeholder="Client Name or Email" value="<?php echo $clientinfo->client_name;?>">

                                                <input name="client_id" class="form-control" type="hidden"
                                                   placeholder="<?php echo display('client_id') ?>" id="client_id_no"
                                                   value="<?php if(!empty($project_data->client_id)){echo $project_data->client_id;}?>">

                                                <div id="clientHelpText"></div>

                                            </div>
                                            <div class="col-sm-3">
                                                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success"><?php echo "Add Client" ?></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                </div>

                                <div class="form-group row">
                                    <label for="project_lead" class="col-sm-3 col-form-label"><?php echo display('project_lead') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-9">
                                        <?php echo form_dropdown('project_lead', $project_leads, (!empty($project_data->project_lead)?$project_data->project_lead:""), ' class="form-control"') ?> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                       
                                    <label for="project_lead" class="col-sm-3 col-form-label">
                                    <?php echo display('team_members') ?><i class="text-danger">*</i></label>
                                    <div class="col-sm-9">

                                        <select name="team_members[]" id="team_members" class="form-control" multiple="multiple" required placeholder="Select team members">
                                             <option value=""></option>
                                            <?php

                                            foreach ($team_members as $team_member):?>
                                                <option value="<?php echo html_escape($team_member['employee_id'])?>" <?php echo (in_array($team_member['employee_id'],$existing_team_members)? 'selected':'')?>><?php echo html_escape($team_member['employee_name']); ?></option>
                                            <?php endforeach;?>

                                        </select>
                                       
                                    </div>
                                   
                                </div>

                                <div class="form-group row">
                                    <label for="approximate_tasks" class="col-sm-3 col-form-label"><?php echo display('approximate_tasks') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-9">
                                        <input type="number"class="form-control" name="approximate_tasks" id="approximate_tasks" required="" placeholder="<?php echo display('approximate_tasks') ?>" value="<?php if(!empty($project_data->approximate_tasks)){echo $project_data->approximate_tasks;}?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="summary" class="col-sm-3 col-form-label"><?php echo display('summary') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" required name="summary" id="summary" rows="4" placeholder="<?php echo display('summary') ?>" tabindex="10" required><?php if(!empty($project_data->project_summary)){echo $project_data->project_summary;}?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                       
                                    <label for="project_start_date" class="col-sm-3 col-form-label">
                                    <?php echo display('starting_date') ?><i class="text-danger">*</i></label>
                                    <div class="col-sm-9">

                                        <input type="text" name="project_start_date" class="form-control datepicker" required placeholder="Project start date" value="<?php if(!empty($project_data->project_start_date)){echo $project_data->project_start_date;}?>">
                                       
                                    </div>
                                   
                                </div>

                                <div class="form-group row">
                                    <label for="project_duration" class="col-sm-3 col-form-label"><?php echo display('project_duration') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-9">
                                        <input type="text"class="form-control" name="project_duration" id="project_duration" required="" placeholder="<?php echo display('project_duration') ?>" value="<?php if(!empty($project_data->project_duration)){echo $project_data->project_duration;}?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                       
                                    <label for="project_reward_point" class="col-sm-3 col-form-label">
                                    <?php echo display('reward_points') ?><i class="text-danger">*</i></label>
                                    <div class="col-sm-9">

                                        <input type="number" name="project_reward_point" class="form-control" required placeholder="<?php echo display('reward_points') ?>" value="<?php if(!empty($project_data->project_reward_point)){echo $project_data->project_reward_point;}?>">
                                       
                                    </div>
                                   
                                </div>

                                <?php if($project_sprints_count > 0){ 

                                $user = $this->session->userdata();

                                ?>

                                <div class="form-group row">

                                    <label for="project_status" class="col-sm-3 col-form-label">
                                    <?php echo display('status') ?></label>
                                    <div class="col-sm-9">

                                        <select name="is_completed" class="form-control" id="project_status">

                                            <option value=""> Select Status</option>

                                            <option value="1" <?php if($project_data->is_completed == 1){echo "selected";} ?>>Close</option>
                                                
                                        </select>
                                       
                                    </div>
                                   
                                </div>

                                <?php } ?>

                                 <br>

                                <div class="form-group row">
                                    <div class="form-group form-group-margin form-projectmanagement text-right">

                                        <input type="submit" id="update-project" class="btn btn-success btn-large" name="update-project" value="<?php echo display('save') ?>" tabindex="10"/>
                                    </div>
                                </div>

                            </div>

                        </div>

                        
                    </div>

                    <?php echo form_close() ?>

                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center><strong><h4><i class='fa fa-user-secret' aria-hidden='true'></i>Client Form</h4></strong></center>
                </div>
                <div class="modal-body">

                    <div id="clientMsg" class="alert hide"></div>
                   

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="panel">
                                <div class="panel-body">

                                    <?php echo  form_open('projectmanagement/Pm_projects/create_client', array("id" => "clientFrm")); ?>
                                   
                                       <div class="form-group row">
                                           
                                            <label for="client_name" class="col-sm-3 col-form-label">
                                            <?php echo display('client_name') ?></label>
                                            <div class="col-sm-9">

                                                <input type="text" name="client_name" class="form-control" required placeholder="<?php echo display('client_name') ?>">
                                               
                                            </div>
                                           
                                        </div>

                                        <div class="form-group row">
                                           
                                            <label for="state" class="col-sm-3 col-form-label">
                                            <?php echo display('state') ?></label>
                                            <div class="col-sm-9">
                                                
                                                <?php echo form_dropdown('country', $country_list, (!empty($emp->state)?$emp->state:"York"), ' class="form-control"') ?> 
                                               
                                            </div>
                                           
                                        </div>

                                        <div class="form-group row">
                                           
                                            <label for="email" class="col-sm-3 col-form-label">
                                            <?php echo display('email') ?></label>
                                            <div class="col-sm-9">

                                                <input type="email" name="email" class="form-control" required placeholder="<?php echo display('email') ?>">
                                               
                                            </div>
                                           
                                        </div>

                                        <div class="form-group row">
                                           
                                            <label for="company" class="col-sm-3 col-form-label">
                                            <?php echo display('company') ?></label>
                                            <div class="col-sm-9">

                                                <input type="text" name="company" class="form-control" required placeholder="<?php echo display('company') ?>">
                                               
                                            </div>
                                           
                                        </div>

                                        <div class="form-group row">
                                           
                                            <label for="address" class="col-sm-3 col-form-label">
                                            <?php echo display('address') ?></label>
                                            <div class="col-sm-9">

                                                <textarea class="form-control" name="address" id="address" rows="2" placeholder="<?php echo display('address') ?>" tabindex="10" required></textarea>
                                               
                                            </div>
                                           
                                        </div>
                                       
                                        <input type="hidden" id="csrf_token_name" value="<?php echo $this->security->get_csrf_token_name() ?>">
                                        <input type="hidden" id="csrf_hash" value="<?php echo $this->security->get_csrf_hash() ?>">
                             
                                        <div class="form-group form-group-margin text-right">
                                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('ad') ?></button>
                                        </div>
                                    <?php echo form_close() ?>

                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
         
                </div>
                <div class="modal-footer">

                </div>

            </div>

        </div>

        <script src="<?php echo MOD_URL.'projectmanagement/assets/js/project_common.js'; ?>" type="text/javascript"></script>