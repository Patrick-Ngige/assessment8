<?php

/**
 * @package pms
 */


class CustomEndpoints
{
    function pms_register_custom_endpoints()
    {

        register_rest_route(
            'pms/v1',
            '/projects',
            array(
                'methods' => 'GET',
                'callback' => array($this, 'pms_retrieve_project'),

            )
        );

        register_rest_route(
            'pms/v1',
            '/project/(?P<employee_id>\d+)',
            array(
                'methods' => 'GET',
                'callback' => array($this, 'pms_reuse_project'),

            )
        );

        register_rest_route(
            'pms/v1',
            '/projects',
            array(
                'methods' => 'POST',
                'callback' => array($this, 'pms_create_project'),

            )
        );

        register_rest_route(
            'pms/v1',
            '/project',
            array(
                'methods' => 'POST',
                'callback' => array($this, 'pms_update_project'),

            )
        );


    }


    function pms_retrieve_project($request)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'projects';

        $result = "SELECT * FROM $table_name";

        $data = $wpdb->get_results($result);

        return $data;

    }

    function pms_reuse_project($request)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'projects';

        $employee_id = $request['employee_id'];


        $data = $wpdb->get_row("SELECT * FROM $table_name WHERE employee_id = '$employee_id' ");

        return $data;
    }

    function pms_create_project($request)
    {
        $data = $request->get_json_params();

        // print_r($request->get_json_params());
        $employee_id = $data['employee_id'];
        $project = $data['project'];
        $assignee = $data['assignee'];
        $due_date = $data['due_date'];


        global $wpdb;
        $table_name = $wpdb->prefix . 'projects';


        $data = $wpdb->insert($table_name, array(
            'employee_id' => $employee_id,
            'project' => $project,
            'assignee' => $assignee,
            'due_date' => $due_date,
        ));

        return $data;

    }

    function pms_update_project($request)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'projects';
        $employee_id = $request['employee_id'];
        
        $data = $request->get_json_params();

        $employee_id = $data['employee_id'];
        $project = $data['project'];
        $assignee = $data['assignee'];
        $due_date = $data['due_date'];


        $data = array(

            'employee_id' => $employee_id,
            'project' => $project,
            'assignee' => $assignee,
            'due_date' => $due_date,
        );
        $condition = array('employee_id' => $employee_id);

        $wpdb->update($table_name, $data, $condition);
    }


}