<?php

/**
 * @package pms
 */


class CustomEndpoints
{
    function pms_register_custom_endpoints()
    {
        // Create project endpoint
        register_rest_route('may-project/v1', '/projects/', array(
            'methods' => 'GET',
            'callback' => array($this, 'pms_create_project'),
            // 'permission_callback' => 'pms_check_permissions',
        )
        );

        // Update project endpoint
        register_rest_route('may-project/v1', '/projects/(?P<id>\d+)', array(
            'methods' => 'PUT',
            'callback' => 'pms_update_project',
            'permission_callback' => 'pms_check_permissions',
        )
        );

        // Delete project endpoint
        register_rest_route('may-project/v1', '/projects/(?P<id>\d+)', array(
            'methods' => 'DELETE',
            'callback' => 'pms_delete_project',
            'permission_callback' => 'pms_check_permissions',
        )
        );

        // Assign project endpoint
        register_rest_route('may-project/v1', '/projects/(?P<id>\d+)/assign/(?P<user_id>\d+)', array(
            'methods' => 'POST',
            'callback' => 'pms_assign_project',
            'permission_callback' => 'pms_check_permissions',
        )
        );
    }

    // Callback functions for the endpoints
    function pms_create_project($request)
    {
          global  $wpdb;
          $table_name = $wpdb->prefix.'projects';

          $result = "SELECT * FROM $table_name";

          $data = $wpdb->get_results($result);

          return $data;

    }

    function pms_update_project($request)
    {
        // Handle project update logic
    }

    function pms_delete_project($request)
    {
        // Handle project deletion logic
    }

    function pms_assign_project($request)
    {
        // Handle project assignment logic
    }

    // Permission callback function
    function pms_check_permissions()
    {
        // Implement your permission logic here
        // Check if the current user has the necessary capabilities to perform the action
        return current_user_can('manage_options');
    }

    // Register custom endpoints

}

