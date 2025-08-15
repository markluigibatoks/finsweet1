<?php

add_action('rest_api_init', 'contactUsRoutes');

function contactUsRoutes() {
  register_rest_route('/wp/v1/', 'contact-us', array(
    'methods' => 'POST',
    'callback' => 'createContactUs'
  ));
}

function createContactUs($data) {

  $first_name  = sanitize_text_field($data['first_name'] ?? '');
  $last_name  = sanitize_text_field($data['last_name'] ?? '');
  $email = strtolower(trim(sanitize_email($data['email'] ?? '')));
  $subject  = sanitize_text_field($data['subject'] ?? '');
  $message = strtolower(trim(sanitize_text_field($data['message'] ?? '')));

  if(!is_email($email)) {
    return new WP_Error('incorrect_email', 'Incorrect Email', ['status' => 400]);
  }

  if (empty($first_name) || empty($last_name) || empty($email) || empty($subject) || empty($message)) {
    return new WP_Error('missing_fields', 'Required fields missing', ['status' => 400]);
  }

  try {
    wp_insert_post(array(
      'post_type' => 'contact_us',
      'post_status' => 'pending',
      'post_title' => wp_trim_words($message, 5),
      'meta_input' => array(
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
      )
    ));

    wp_send_json_success([
      'message' => 'Message submitted successfully',
    ]);
  } catch(e) {
    wp_send_json_error(['message' => 'Failed to send a message']);
  }
}