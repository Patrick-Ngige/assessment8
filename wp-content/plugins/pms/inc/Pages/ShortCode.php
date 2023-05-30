<?php
/**
 * @package pms
 */

 namespace Inc\Pages;

 

 class ShortCode {
     public function register() {
         add_shortcode('pms', [$this, 'ViewProjectsPage']);
     }
 
     public function ViewProjectsPage($props) {
         $default = [
             'name' => 'name'
         ];
 
         $props = shortcode_atts($default, $props, 'pms');
 
         $html = '';
 
         $response = wp_remote_get('http://localhost/may-project/wp-json/pms/v1/projects/');
 
         if (!is_wp_error($response) && $response['response']['code'] === 200) {
             $projects = json_decode($response['body']);
 
             $html .= '<div style="background-color:#DCDFEA;width:100vw;height:90vh;">';
             $html .= '<div style="padding:1rem;">';
             $html .= '<table class="table align-middle mb-0 bg-white table-hover" style="width:80%;margin-left:10%;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;margin-top:3%;">';
             $html .= '<thead class="bg-light">';
             $html .= '<tr style="font-size:large">';
             $html .= '<th>Assignee</th>';
             $html .= '<th>Project</th>';
             $html .= '<th>Status</th>';
             $html .= '<th>Due Date</th>';
             $html .= '<th>Actions</th>';
             $html .= '</tr>';
             $html .= '</thead>';
             $html .= '<tbody>';

             foreach ($projects as $project) {
                 $html .= '<tr>';
                 $html .= '<td>';
                 $html .= '<div class="d-flex align-items-center">';
                
                 $html .= '<div class="ms-3">';
                 $html .= '<p class="fw-bold mb-1">' . $project->assignee . '</p>';
                 $html .= '<p class="text-muted mb-0">john.doe@gmail.com</p>';
                 $html .= '</div>';
                 $html .= '</div>';
                 $html .= '</td>';
                 $html .= '<td>';
                 $html .= '<p class="fw-normal mb-1">' . $project->project . '</p>';
                 $html .= '</td>';
                 $html .= '<td>';
                 $html .= '<span class="text-dark">' . $project->project_status . '</span>';
                 $html .= '</td>';
                 $html .= '<td>' . $project->due_date . '</td>';
                 $html .= '<td>';
                 $html .= '<form method="POST">';
                 $html .= '<a href="' . esc_url(add_query_arg("employee_id", $project->employee_id, "/may-project/edit-ticket/")) . '" style="background-color: #006b0c;color:white; border-radius:3px;text-decoration:none;padding:6px;border: #006b0c;border-radius:3px;">Update</a>';
                 $html .= '<input type="hidden" name="employee_id" value="' . $project->employee_id . '" />  ';
                 $html .= '<input type="submit" name="delete" value="Delete" style="background-color: #fd434c;color:white; border-radius:3px;padding:5px;border:none;" />';
                 $html .= '</form>';
                 $html .= '</td>';
                 $html .= '</tr>';
             }
 
             $html .= '</tbody>';
             $html .= '</table>';
             $html .= '</div>';
             $html .= '</div>';
         } else {
             $html .= '<p>Failed to retrieve project data.</p>';
         }
 
         return $html;
     }
 }
 
