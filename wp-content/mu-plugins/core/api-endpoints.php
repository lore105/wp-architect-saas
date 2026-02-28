<?php
// File: mu-plugins/core/api-endpoints.php
add_action('rest_api_init', function () {
    register_rest_route('saas/v1', '/status', [
        'methods' => 'GET',
        'callback' => function() { return ['status' => 'ok']; }
    ]);
});