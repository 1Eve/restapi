<?php
/**
 * @package MyPlugin
 */

 class ProjectRoute{

    public function register_routes(){
        register_rest_route(
            'projects/v1',
            '/projects/',
            [
                'callback'=>[$this, 'fetch_projects'],
                'method'=>'GET',
                'permission_callback'=> [$this, 'endpoint_authentication']
            ]
        );

        register_rest_route(
            'projects/v1',
            '/projects/',
            [
                'callback'=>[$this, 'create_project'],
                'methods'=>'POST',
                'permission_callback'=> [$this, 'endpoint_authentication']
            ]
        );

        register_rest_route(
            'projects/v1',
            'projects/(?P<id>\d+)',
            [
                'callback'=>[$this, 'delete_project'],
                'methods'=>'DELETE',
                'permission_callback'=> [$this, 'endpoint_authentication']
            ]
        );


    }

    public function fetch_projects(){
        global $wpdb;
        $table = $wpdb->prefix . 'projects';
        $projects = $wpdb->get_results("SELECT * FROM $table where is_deleted=0");
        return $projects;
    }

    public function create_project($data){
        global $wpdb;
        $table = $wpdb->prefix . 'projects';
        $project = [
            'employee_name' => $data['employee_name'],
            'project_title' => $data['project_title'],
            'project_desc' => $data['project_desc'],
            'due_date' => $data['due_date'],
        ];
        $wpdb->insert($table, $project);
        return $project;
    }


    public function update_project($data){
        global $wpdb;
        $table = $wpdb->prefix . 'projects';
        $project = [
            'employee_name' => $data['employee_name'],
            'project_title' => $data['project_title'],
            'project_desc' => $data['project_desc'],
            'due_date' => $data['due_date'],
        ];
        $id = $data['id'];
        $condition = ['id' => $id];
        $wpdb->update($table, $project, $condition);
        return $project;
    }

    public function delete_project($data){
        global $wpdb;
        $table = $wpdb->prefix . 'projects';
        $id = $data['id'];
        $wpdb->query("UPDATE $table SET is_deleted=1 WHERE id=$id");
        return 'Project Deleted';
    }
 }