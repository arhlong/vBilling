<?php 
/*
 * Version: MPL 1.1
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 * 
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 * 
 * The Original Code is "vBilling - VoIP Billing and Routing Platform"
 * 
 * The Initial Developer of the Original Code is 
 * Digital Linx [<] info at digitallinx.com [>]
 * Portions created by Initial Developer (Digital Linx) are Copyright (C) 2011
 * Initial Developer (Digital Linx). All Rights Reserved.
 *
 * Contributor(s)
 * "Digital Linx - <vbilling at digitallinx.com>"
 *
 * vBilling - VoIP Billing and Routing Platform
 * version 0.1.3
 *
 */
?>
<div id="subMenu">
        <ul>
            <li><a href="<?php echo base_url();?>cdr/" <?php if($sub_selected == 'list_cdr') { echo 'class="sub_selected"' ;}?>>List CDR</a></li>
            
            
            <?php if($this->session->userdata('user_type') == 'admin'){?>
                <li><a href="<?php echo base_url();?>cdr/gateways_stats" <?php if($sub_selected == 'gateways_stats') { echo 'class="sub_selected"' ;}?>>Gateways Statistics</a></li>
            <?php 
            } else if($this->session->userdata('user_type') == 'sub_admin'){
                if(sub_admin_access_any_cell($this->session->userdata('user_id'), 'view_gateway_stats') == 1)
                {
            ?>
                    <li><a href="<?php echo base_url();?>cdr/gateways_stats" <?php if($sub_selected == 'gateways_stats') { echo 'class="sub_selected"' ;}?>>Gateways Statistics</a></li>
            <?php 
                }
            }
            ?>
            
            
            
            <?php if($this->session->userdata('user_type') == 'admin'){?>
                <li><a href="<?php echo base_url();?>cdr/customer_stats" <?php if($sub_selected == 'customer_stats') { echo 'class="sub_selected"' ;}?>>Customer Stats</a></li>
            <?php 
            } else if($this->session->userdata('user_type') == 'sub_admin'){
                if(sub_admin_access_any_cell($this->session->userdata('user_id'), 'view_customer_stats') == 1)
                {
            ?>
                    <li><a href="<?php echo base_url();?>cdr/customer_stats" <?php if($sub_selected == 'customer_stats') { echo 'class="sub_selected"' ;}?>>Customer Stats</a></li>
            <?php 
                }
            }
            ?>
            
            
            
            
            <?php if($this->session->userdata('user_type') == 'admin'){?>
                <li><a href="<?php echo base_url();?>cdr/call_destination" <?php if($sub_selected == 'call_destination') { echo 'class="sub_selected"' ;}?>>Call Destination</a></li>
            <?php 
            } else if($this->session->userdata('user_type') == 'sub_admin'){
                if(sub_admin_access_any_cell($this->session->userdata('user_id'), 'view_call_destination') == 1)
                {
            ?>
                    <li><a href="<?php echo base_url();?>cdr/call_destination" <?php if($sub_selected == 'call_destination') { echo 'class="sub_selected"' ;}?>>Call Destination</a></li>
            <?php 
                }
            }
            ?>
        </ul>
        <div class="clr"></div>
    </div>