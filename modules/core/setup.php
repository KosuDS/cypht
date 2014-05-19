<?php
handler_source('core');
output_source('core');

/* homepage data */
add_handler('home', 'create_user', false);
add_handler('home', 'login', false);
add_handler('home', 'load_user_data', true);
add_handler('home', 'language',  true);
add_handler('home', 'title', true);
add_handler('home', 'date', true);
add_handler('home', 'save_user_data', true);
add_handler('home', 'logout', true);
add_handler('home', 'http_headers', true);

/* homepage output */
add_output('home', 'header_start', false);
add_output('home', 'js_data', true);
add_output('home', 'header_css', false);
add_output('home', 'jquery', false);
add_output('home', 'jquery_table', true);
add_output('home', 'header_content', false);
add_output('home', 'header_end', false);
add_output('home', 'content_start', false);
add_output('home', 'toolbar_start', true);
add_output('home', 'logout', true);
add_output('home', 'date', true);
add_output('home', 'login', false);
add_output('home', 'msgs', false);
add_output('home', 'title', true);
add_output('home', 'loading_icon', true);
add_output('home', 'toolbar_end', true);
add_output('home', 'folder_list_start', true);
add_output('home', 'server_summary_start', true);
add_output('home', 'server_summary_end', true);
add_output('home', 'folder_list_end', true);
add_output('home', 'page_js', true);
add_output('home', 'content_end', true);

/* servers page data */
add_handler('servers', 'login', false);
add_handler('servers', 'load_user_data', true);
add_handler('servers', 'language',  true);
add_handler('servers', 'title', true);
add_handler('servers', 'date', true);
add_handler('servers', 'save_user_data', true);
add_handler('servers', 'logout', true);
add_handler('servers', 'http_headers', true);

/* servers page output */
add_output('servers', 'header_start', false);
add_output('servers', 'js_data', true);
add_output('servers', 'header_css', false);
add_output('servers', 'jquery', false);
add_output('servers', 'header_content', false);
add_output('servers', 'header_end', false);
add_output('servers', 'content_start', false);
add_output('servers', 'toolbar_start', true);
add_output('servers', 'logout', true);
add_output('servers', 'date', true);
add_output('servers', 'login', false);
add_output('servers', 'title', true);
add_output('servers', 'msgs', false);
add_output('servers', 'loading_icon', false);
add_output('servers', 'toolbar_end', true);
add_output('servers', 'folder_list_start', true);
add_output('servers', 'folder_list_end', true);
add_output('servers', 'page_js', true);
add_output('servers', 'content_end', true);


/* settings data */
add_handler('settings', 'create_user', false);
add_handler('settings', 'login', false);
add_handler('settings', 'load_user_data', true);
add_handler('settings', 'language',  true);
add_handler('settings', 'title', true);
add_handler('settings', 'date', true);
add_handler('settings', 'process_language_setting', true);
add_handler('settings', 'process_timezone_setting', true);
add_handler('settings', 'save_user_settings', true);
add_handler('settings', 'save_user_data', true);
add_handler('settings', 'logout', true);
add_handler('settings', 'http_headers', true);

/* settings output */
add_output('settings', 'header_start', false);
add_output('settings', 'js_data', true);
add_output('settings', 'header_css', false);
add_output('settings', 'jquery', false);
add_output('settings', 'header_content', false);
add_output('settings', 'header_end', false);
add_output('settings', 'content_start', false);
add_output('settings', 'toolbar_start', true);
add_output('settings', 'logout', true);
add_output('settings', 'date', true);
add_output('settings', 'login', false);
add_output('settings', 'msgs', false);
add_output('settings', 'title', true);
add_output('settings', 'loading_icon', true);
add_output('settings', 'toolbar_end', true);
add_output('settings', 'folder_list_start', true);
add_output('settings', 'start_settings_form', true);
add_output('settings', 'language_setting', true);
add_output('settings', 'timezone_setting', true);
add_output('settings', 'end_settings_form', true);
add_output('settings', 'folder_list_end', true);
add_output('settings', 'page_js', true);
add_output('settings', 'content_end', true);

/* profile page */
add_handler('profiles', 'create_user', false);
add_handler('profiles', 'login', false);
add_handler('profiles', 'load_user_data', true);
add_handler('profiles', 'language',  true);
add_handler('profiles', 'title', true);
add_handler('profiles', 'date', true);
add_handler('profiles', 'save_user_settings', true);
add_handler('profiles', 'save_user_data', true);
add_handler('profiles', 'logout', true);
add_handler('profiles', 'http_headers', true);
add_output('profiles', 'header_start', false);
add_output('profiles', 'js_data', true);
add_output('profiles', 'header_css', false);
add_output('profiles', 'jquery', false);
add_output('profiles', 'header_content', false);
add_output('profiles', 'header_end', false);
add_output('profiles', 'content_start', false);
add_output('profiles', 'toolbar_start', true);
add_output('profiles', 'logout', true);
add_output('profiles', 'date', true);
add_output('profiles', 'login', false);
add_output('profiles', 'msgs', false);
add_output('profiles', 'title', true);
add_output('profiles', 'loading_icon', true);
add_output('profiles', 'toolbar_end', true);
add_output('profiles', 'folder_list_start', true);
add_output('profiles', 'profile_content', true);
add_output('profiles', 'folder_list_end', true);
add_output('profiles', 'page_js', true);
add_output('profiles', 'content_end', true);

/* message list page */
add_handler('message_list', 'create_user', false);
add_handler('message_list', 'login', false);
add_handler('message_list', 'load_user_data', true);
add_handler('message_list', 'language',  true);
add_handler('message_list', 'title', true);
add_handler('message_list', 'message_list_type', true);
add_handler('message_list', 'date', true);
add_handler('message_list', 'save_user_data', true);
add_handler('message_list', 'logout', true);
add_handler('message_list', 'http_headers', true);
add_output('message_list', 'header_start', false);
add_output('message_list', 'js_data', true);
add_output('message_list', 'header_css', false);
add_output('message_list', 'jquery', false);
add_output('message_list', 'jquery_table', true);
add_output('message_list', 'header_content', false);
add_output('message_list', 'header_end', false);
add_output('message_list', 'content_start', false);
add_output('message_list', 'toolbar_start', true);
add_output('message_list', 'logout', true);
add_output('message_list', 'date', true);
add_output('message_list', 'login', false);
add_output('message_list', 'msgs', false);
add_output('message_list', 'title', true);
add_output('message_list', 'loading_icon', true);
add_output('message_list', 'toolbar_end', true);
add_output('message_list', 'folder_list_start', true);
add_output('message_list', 'folder_list_end', true);
add_output('message_list', 'imap_server_ids', true);
add_output('message_list', 'page_js', true);
add_output('message_list', 'content_end', true);

/* message view page */
add_handler('message', 'create_user', false);
add_handler('message', 'login', false);
add_handler('message', 'load_user_data', true);
add_handler('message', 'language',  true);
add_handler('message', 'title', true);
add_handler('message', 'message_list_type', true);
add_handler('message', 'date', true);
add_handler('message', 'save_user_data', true);
add_handler('message', 'logout', true);
add_handler('message', 'http_headers', true);
add_output('message', 'header_start', false);
add_output('message', 'js_data', true);
add_output('message', 'header_css', false);
add_output('message', 'jquery', false);
add_output('message', 'jquery_table', true);
add_output('message', 'header_content', false);
add_output('message', 'header_end', false);
add_output('message', 'content_start', false);
add_output('message', 'toolbar_start', true);
add_output('message', 'logout', true);
add_output('message', 'date', true);
add_output('message', 'login', false);
add_output('message', 'msgs', false);
add_output('message', 'title', true);
add_output('message', 'loading_icon', true);
add_output('message', 'toolbar_end', true);
add_output('message', 'folder_list_start', true);
add_output('message', 'imap_server_ids', true);
add_output('message', 'message_start', true);
add_output('message', 'folder_list_end', true);
add_output('message', 'message_end', true);
add_output('message', 'page_js', true);
add_output('message', 'content_end', true);

/* save folder tree collapsed state */
add_handler('ajax_save_section_state', 'login', false);
add_handler('ajax_save_section_state', 'load_user_data', true);
add_handler('ajax_save_section_state', 'save_section_state', true);
add_handler('ajax_save_section_state', 'date', true);

/* not-found page data and output */
add_handler('notfound', 'login', false);
add_handler('notfound', 'load_user_data', true);
add_handler('notfound', 'language',  true);
add_handler('notfound', 'title', true);
add_handler('notfound', 'date', true);
add_handler('notfound', 'save_user_data', true);
add_handler('notfound', 'logout', true);
add_handler('notfound', 'http_headers', true);
add_output('notfound', 'header_start', false);
add_output('notfound', 'js_data', true);
add_output('notfound', 'header_css', false);
add_output('notfound', 'jquery', false);
add_output('notfound', 'jquery_table', true);
add_output('notfound', 'header_content', false);
add_output('notfound', 'header_end', false);
add_output('notfound', 'content_start', false);
add_output('notfound', 'toolbar_start', true);
add_output('notfound', 'logout', true);
add_output('notfound', 'date', true);
add_output('notfound', 'login', false);
add_output('notfound', 'msgs', false);
add_output('notfound', 'title', true);
add_output('notfound', 'loading_icon', true);
add_output('notfound', 'toolbar_end', true);
add_output('notfound', 'folder_list_start', true);
add_output('notfound', 'notfound_content', true);
add_output('notfound', 'folder_list_end', true);
add_output('notfound', 'page_js', true);
add_output('notfound', 'content_end', true);


add_handler('ajax_hm_folders', 'login', false, 'core');
add_handler('ajax_hm_folders', 'load_user_data', true, 'core');
add_handler('ajax_hm_folders', 'date', true, 'core');

/* allowed input */
return array(
    'allowed_pages' => array(
        'home',
        'message_list',
        'message',
        'settings',
        'servers',
        'ajax_hm_folders',
        'ajax_save_section_state',
        'notfound',
        'profiles',
    ),
    'allowed_cookie' => array(
        'PHPSESSID' => FILTER_SANITIZE_STRING,
        'hm_id' => FILTER_SANITIZE_STRING,
        'hm_session' => FILTER_SANITIZE_STRING,
        'hm_msgs'    => FILTER_SANITIZE_STRING
    ),
    'allowed_server' => array(
        'REQUEST_URI' => FILTER_SANITIZE_STRING,
        'SERVER_ADDR' => FILTER_VALIDATE_IP,
        'SERVER_PORT' => FILTER_VALIDATE_INT,
        'PHP_SELF' => FILTER_SANITIZE_STRING,
        'REQUEST_SCHEME' => FILTER_SANITIZE_STRING,
        'HTTP_USER_AGENT' => FILTER_SANITIZE_STRING,
        'HTTPS' => FILTER_SANITIZE_STRING,
        'SERVER_NAME' => FILTER_SANITIZE_STRING
    ),

    'allowed_get' => array(
        'page' => FILTER_SANITIZE_STRING,
        'msgs' => FILTER_SANITIZE_STRING,
        'list_path' => FILTER_SANITIZE_STRING,
        'list_page' => FILTER_VALIDATE_INT,
        'uid' => FILTER_VALIDATE_INT,
    ),

    'allowed_post' => array(
        'hm_nonce' => FILTER_SANITIZE_STRING,
        'logout' => FILTER_VALIDATE_BOOLEAN,
        'username' => FILTER_SANITIZE_STRING,
        'create_hm_user' => FILTER_SANITIZE_STRING,
        'password' => FILTER_SANITIZE_STRING,
        'hm_ajax_hook' => FILTER_SANITIZE_STRING,
        'save_settings' => FILTER_SANITIZE_STRING,
        'language_setting' => FILTER_SANITIZE_STRING,
        'timezone_setting' => FILTER_SANITIZE_STRING,
        'section_state' => FILTER_SANITIZE_STRING,
        'section_class' => FILTER_SANITIZE_STRING
    )
);

?>
