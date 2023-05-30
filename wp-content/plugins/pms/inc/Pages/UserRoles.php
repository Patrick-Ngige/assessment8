<?php
/**
 * @package pms plugin
 */


namespace Inc\Pages;

class UserRoles
{
    public function register()
    {
        $this->create_project_manager_role();
    }

    public function create_project_manager_role()
    {
        add_role(
            'Project Manager',
            'Project Manager',
            [
                'read' => true,
                'edit_posts' => true,
                'delete_posts' => true,
                'edit_published_posts' => true,
                'delete_published_posts' => true
            ]
        );
    }
}