<link href="<?php echo base_url('application/modules/employee/assets/css/appraisal.css'); ?>" rel="stylesheet" type="text/css"/>

<div class="container">

     <div class="panel panel-default thumbnail up_emp_performance"> 
        
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-3">
                    <img class="logo-image" src="<?php echo base_url('/').$setting->logo;?>" alt="">
                </div>
                <div class="col-xs-6">
                    <h3 class="action-title">UPDATE PERFOMANCE APPRAISAL</h3>
                </div>
                <div class="col-xs-3 serial-no">
                    <span>Serial No: <?php echo $perform_sl?$perform_sl:'';?></span>
                </div>
            </div>

            <?php echo  form_open('employee/Employees_performance/save_updated_employee_performance/'.$id) ?>

            <div class="row mt-20">
                <div class="col-xs-6 mb-20">
                    <div class="d-flex align-items-center">
                        <label class="w-250">Name of Employee :</label>
                        <select name="employee_id" class="form-control" required>

                             <?php foreach ($employee as $key => $value) { ?>
                                 
                                 <option value="<?php echo $key;?>" <?php if($key == $employee_id){echo "selected";}?>><?php echo $value.'('.$key.')';?></option>
                             <?php }?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 mb-20">
                    <div class="input-group d-flex align-items-center">
                        <span class="w-250 fw-700">Review Period :</span>
                        <input type="number" name="review_period" class="form-control" placeholder="Review Period In Months" aria-describedby="basic-addon1" value="<?php echo $review_period?$review_period:'';?>" required>
                    </div>
                </div>

                <div class="col-xs-12 mb-20">
                    <div class="input-group d-flex align-items-center">
                        <span class="w-620 fw-700">Name and Position of Supervisor/Head of Department :</span>
                        <input type="text" name="position_of_supervisor" class="form-control" placeholder="Name and Position of Supervisor/Head of Department" aria-describedby="basic-addon1" value="<?php echo $position_of_supervisor?$position_of_supervisor:'';?>">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p class="fs-17 mb-20 fs-i">Please provide a critical assessment of the performance of the employee within the review period using the following rating scale. Provide examples where applicable. Please use a separate sheet if required.
                    </p>
                </div>
            </div>

            <table class="table table-bordered w-65">
                <thead>
                    <tr>
                        <th>P</th>
                        <th>NI</th>
                        <th>G</th>
                        <th>VG</th>
                        <th>E</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Poor</td>
                        <td>Needs Improvement</td>
                        <td>Good</td>
                        <td>Very Good</td>
                        <td>Excellent</td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <h3 class="mb-20">A. ASSESSMENT OF GOALS/OBJECTIVES SET DURING THE REVIEW PERIOD</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Criteria</th>
                            <th>P <br> (0)</th>
                            <th>NI <br> (3)</th>
                            <th>G <br> (6)</th>
                            <th>VG <br> (9)</th>
                            <th>E <br> (12)</th>
                            <th>Score</th>
                            <th>Comments and Examples</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Demonstrated Knowledge of duties & Quality of Work</td>
                            <td class="text-center"><input type="radio" id="demonstrated_p" class="demonstrated" name="demonstrated" value="0" <?php if($demonstrated == 0){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="demonstrated_ni" class="demonstrated" name="demonstrated" value="3" <?php if($demonstrated == 3){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="demonstrated_g" class="demonstrated" name="demonstrated" value="6" <?php if($demonstrated == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="demonstrated_vg" class="demonstrated" name="demonstrated" value="9" <?php if($demonstrated == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="demonstrated_e" class="demonstrated" name="demonstrated" value="12" <?php if($demonstrated == 12){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="demonstrated_score" name="demonstrated_score" class="form-control review-table assessment_a" aria-describedby="basic-addon1" value="<?php echo $demonstrated_score;?>"></td>
                            <td><input type="text" name="demonstrated_comments" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $demonstrated_comments?$demonstrated_comments:'';?>"></td>
                        </tr>
                        <tr>
                            <td>Timeliness of Delivery</td>
                            <td class="text-center"><input type="radio" id="timeliness_p" class="timeliness" name="timeliness" checked="checked" value="0" <?php if($timeliness == 0){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="timeliness_ni" class="timeliness" name="timeliness" value="3" <?php if($timeliness == 3){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="timeliness_g" class="timeliness" name="timeliness" value="6" <?php if($timeliness == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="timeliness_vg" class="timeliness" name="timeliness" value="9" <?php if($timeliness == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="timeliness_e" class="timeliness" name="timeliness" value="12" <?php if($timeliness == 12){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="timeliness_score" name="timeliness_score" class="form-control review-table assessment_a" aria-describedby="basic-addon1" value="<?php echo $timeliness_score;?>"></td>
                            <td><input type="text" name="timeliness_score_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $timeliness_score_commnets?$timeliness_score_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td>Impact of Achievement</td>
                            <td class="text-center"><input type="radio" id="impact_p" class="impact" name="impact" checked="checked" value="0" <?php if($impact == 0){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="impact_ni" class="impact" name="impact" value="3" <?php if($impact == 3){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="impact_g" class="impact" name="impact" value="6" <?php if($impact == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="impact_vg" class="impact" name="impact" value="9" <?php if($impact == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="impact_e" class="impact" name="impact" value="12" <?php if($impact == 12){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="impact_score" name="impact_score" class="form-control review-table assessment_a" aria-describedby="basic-addon1" value="<?php echo $impact_score;?>"></td>
                            <td><input type="text" name="impact_score_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $impact_score_commnets?$impact_score_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td>Overall Achievement of Goals/Objectives</td>
                            <td class="text-center"><input type="radio" id="overall_p" class="overall" name="overall" checked="checked" value="0" <?php if($overall == 0){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="overall_ni" class="overall" name="overall" value="3" <?php if($overall == 3){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="overall_g" class="overall" name="overall" value="6" <?php if($overall == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="overall_vg" class="overall" name="overall" value="9" <?php if($overall == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="overall_e" class="overall" name="overall" value="12" <?php if($overall == 12){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="overall_score" name="overall_score" class="form-control review-table assessment_a" aria-describedby="basic-addon1" value="<?php echo $overall_score;?>"></td>
                            <td><input type="text" name="overall_score_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $overall_score_commnets?$overall_score_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td>Going beyond the call of Duty</td>
                            <td colspan="5">Extra (6, 9, or 12) bonus points to be <br> earned for going beyond the call of duty</td>
                            <td><input type="number" id="beyond_duty" name="beyond_duty" class="form-control review-table assessment_a" aria-describedby="basic-addon1" value="<?php echo $beyond_duty;?>"></td>
                            <td><input type="text" name="beyond_duty_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $beyond_duty_commnets?$beyond_duty_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5">Total Score (Maximum = 60)</td>
                            <td><input type="number" id="assesment_a_total_score" name="assesment_a_total_score" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $assesment_a_total_score;?>" readonly></td>
                            <td><input type="text" class="form-control review-table" aria-describedby="basic-addon1"></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="row">
                <h3 class="mb-20">B. ASSESSMENT OF OTHER PERFORMANCE STANDARDS AND INDICATORS</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Criteria</th>
                            <th>P <br> (2)</th>
                            <th>NI <br> (4)</th>
                            <th>G <br> (6)</th>
                            <th>VG <br> (9)</th>
                            <th>E <br> (10)</th>
                            <th>Score</th>
                            <th>Comments and Examples</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Interpersonal skills & ability to work in a team environment</td>
                            <td class="text-center"><input type="radio" id="interpersonal_p" class="interpersonal" name="interpersonal" checked="checked" value="2" <?php if($interpersonal == 2){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="interpersonal_ni" class="interpersonal" name="interpersonal" value="4" <?php if($interpersonal == 4){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="interpersonal_g" class="interpersonal" name="interpersonal" value="6" <?php if($interpersonal == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="interpersonal_vg" class="interpersonal" name="interpersonal" value="9" <?php if($interpersonal == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="interpersonal_e" class="interpersonal" name="interpersonal" value="10" <?php if($interpersonal == 10){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="interpersonal_score" name="interpersonal_score" class="form-control review-table assessment_b" aria-describedby="basic-addon1" value="<?php echo $interpersonal_score;?>"></td>
                            <td><input type="text" name="interpersonal_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $interpersonal_commnets?$interpersonal_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td>Attendance and Punctuality</td>
                            <td class="text-center"><input type="radio" id="attendance_p" class="attendance" name="attendance" checked="checked" value="2" <?php if($attendance == 2){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="attendance_ni" class="attendance" name="attendance" value="4" <?php if($attendance == 4){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="attendance_g" class="attendance" name="attendance" value="6" <?php if($attendance == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="attendance_vg" class="attendance" name="attendance" value="9" <?php if($attendance == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="attendance_e" class="attendance" name="attendance" value="10" <?php if($attendance == 10){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="attendance_score" name="attendance_score" class="form-control review-table assessment_b" aria-describedby="basic-addon1" value="<?php echo $attendance_score;?>"></td>
                            <td><input type="text" name="attendance_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $attendance_commnets?$attendance_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td>Communication Skills</td>
                            <td class="text-center"><input type="radio" id="communication_p" class="communication" name="communication" checked="checked" value="2" <?php if($communication == 2){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="communication_ni" class="communication" name="communication" value="4" <?php if($communication == 4){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="communication_g" class="communication" name="communication" value="6" <?php if($communication == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="communication_vg" class="communication" name="communication" value="9" <?php if($communication == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="communication_e" class="communication" name="communication" value="10" <?php if($communication == 10){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="communication_score" name="communication_score" class="form-control review-table assessment_b" aria-describedby="basic-addon1" value="<?php echo $communication_score;?>"></td>
                            <td><input type="text" name="communication_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $communication_commnets?$communication_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td>Contributing to company mission</td>
                            <td class="text-center"><input type="radio" id="contributing_p" class="contributing" name="contributing" checked="checked" value="2" <?php if($contributing == 2){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="contributing_ni" class="contributing" name="contributing" value="4" <?php if($contributing == 4){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="contributing_g" class="contributing" name="contributing" value="6" <?php if($contributing == 6){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="contributing_vg" class="contributing" name="contributing" value="9" <?php if($contributing == 9){echo 'checked="checked"';}?>></td>
                            <td class="text-center"><input type="radio" id="contributing_e" class="contributing" name="contributing" value="10" <?php if($contributing == 10){echo 'checked="checked"';}?>></td>
                            <td><input type="number" id="contributing_score" name="contributing_score" class="form-control review-table assessment_b" aria-describedby="basic-addon1" value="<?php echo $contributing_score;?>"></td>
                            <td><input type="text" name="contributing_commnets" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $contributing_commnets?$contributing_commnets:'';?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5">Total Score (Maximum = 40)</td>
                            <td><input type="number" id="assesment_b_total_score" name="assesment_b_total_score" class="form-control review-table" aria-describedby="basic-addon1" value="<?php echo $assesment_b_total_score;?>" readonly></td>
                            <td><input type="text" class="form-control review-table" aria-describedby="basic-addon1"></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <!--  Tota Scpre section starts -->

            <div class="row">
                <h3 class="mb-20">C. TOTAL SCORE</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Total Score (Score A + Score B)</th>
                            <th>Overall Comments / Recommendations by Reviewer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <p class="fw-700" id="score_a"><?php echo $assesment_a_total_score;?></p>
                                    <span>&nbsp;+</span>
                                    <p class="pl-15 fw-700" id="score_b"><?php echo $assesment_b_total_score;?></p>
                                    <span>&nbsp;=</span>
                                    <p class="pl-15 fw-700" id="score_final"><?php echo $score_final;?></p>
                                </div>
                                <div>
                                    <p class="fw-700">Classification of Employee:</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-700">EE <br> (80-100)</p>
                                    <p class="pl-15 fw-700">AE <br> (75-85)</p>
                                    <p class="pl-15 fw-700">UE <br> (0-70)</p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="fw-700">Name:</p>
                                </div>
                                <div>
                                    <p class="fw-700">Signature:</p>
                                </div>
                                <div>
                                    <p class="fw-700">Date:</p>
                                </div>
                                <div>
                                    <p class="fw-700">Next Review Period:</p>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <div class="row">
                <h3 class="mb-20">D. COMMENTS BY EMPLOYEE</h3>
                <table class="table table-bordered">

                    <textarea name="employee_comments" class="form-control" placeholder="Maximum 500 words"><?php echo $employee_comments;?></textarea>

                </table>

            </div>

            <div class="row">
                <h3 class="mb-20">E. DEVELOPMENT PLAN</h3>
                <table class="table table-bordered" id="request_table_dev_plan">
                    <thead>
                        <tr>
                            <th width="20%">Recommended Areas for Improvement / Development</th>
                            <th width="20%">Expected Outcome(s)</th>
                            <th width="20%"> Responsible Person(s) to assist in the achievement of the Plan</th>
                            <th width="13%">Start Date</th>
                            <th width="13%">End Date</th>
                            <th width="13%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="key_dev_plan_item">
                        <?php 
                        if(!empty($development_plans)){

                            foreach ($development_plans as $key => $value) { ?>

                            <tr>
                                <td>
                                    <textarea name="recommand_areas[]" class="form-control" placeholder="" required><?php echo $value->recommand_areas;?></textarea>
                                </td>
                                <td>
                                    <textarea name="expected_outcomes[]" class="form-control" placeholder="" required><?php echo $value->expected_outcomes;?></textarea>
                                </td>
                                <td><input type="text" id="responsible_person" name="responsible_person[]" class="form-control" value="<?php echo $value->responsible_person;?>" required></td>
                                <td><input type="text" id="start_date" name="start_date[]" class="form-control datepicker" value="<?php echo $value->start_date;?>" required></td>
                                <td><input type="text" id="end_date" name="end_date[]" class="form-control datepicker" value="<?php echo $value->end_date;?>" required></td>

                                <td width="100">

                                <a  id="add_dev_plan" class="btn btn-info btn-sm" name="add-invoice-item" onClick="add_dev_plans('request_item')"  tabindex="9"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                <a class="btn btn-danger btn-sm"  value="<?php echo display('delete') ?>" onclick="deleteDevPlanRow(this)" tabindex="3"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                </td>

                            </tr>

                        <?php
                            }
                         } 
                         ?>

                    </tbody>
                </table>

            </div>

            <div class="row">
                <h3 class="mb-20">F. KEY GOALS FOR NEXT REVIEW PERIOD</h3>
                <table class="table table-bordered"  id="request_table">
                    <thead>
                        <tr>
                            <th>Goal (s) Set and Agreed on with Employee</th>
                            <th>Proposed Completion Period</th>
                            <th class="text-center"><?php echo display('action') ?> <i class="text-danger"></i></th>
                        </tr>
                    </thead>
                    <tbody id="key_goals_item">
                        <?php if(empty($data_key_goals)){?>

                            <tr>
                                <td><textarea id="key_goals" name="key_goals[]" class="form-control" rows="2" placeholder="" tabindex="10" required></textarea></td>
                                <td><input type="text" id="end_date" name="completion_period[]" class="form-control datepicker" required></td>

                                <td width="100">

                                <a  id="add_key_goals" class="btn btn-info btn-sm" name="add-invoice-item" onClick="add_key_goals('request_item')"  tabindex="9"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                <a class="btn btn-danger btn-sm"  value="<?php echo display('delete') ?>" onclick="deleteRow(this)" tabindex="3"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                </td>

                            </tr>

                        <?php }else{

                        foreach($data_key_goals as $data_key_goal){
                        ?>

                            <tr>
                                <td><textarea id="key_goals" name="key_goals[]" class="form-control" rows="2" placeholder="" tabindex="10" required><?php echo $data_key_goal->key_goals;?></textarea></td>
                                <td><input type="text" id="end_date" name="completion_period[]" class="form-control datepicker" value="<?php echo $data_key_goal->completion_period;?>" required></td>

                                <td width="100">

                                <a  id="add_key_goals" class="btn btn-info btn-sm" name="add-invoice-item" onClick="add_key_goals('request_item')"  tabindex="9"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                <a class="btn btn-danger btn-sm"  value="<?php echo display('delete') ?>" onclick="deleteRow(this)" tabindex="3"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                </td>

                            </tr>

                        <?php }}?>
                        
                    </tbody>
                </table>

                <div class="form-group form-group-margin text-right">

                    <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                </div>

            </div>

            <?php echo form_close() ?>

        </div>

    </div>

</div>

<script src="<?php echo MOD_URL.'employee/assets/js/add_emp_appraisal.js'; ?>" type="text/javascript"></script>