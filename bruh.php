<?php
/**
 * Filter the mail content type.
 */
function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}
add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

$message = '<p>Nombre:' . $_POST['nombre'] . '</p><p>Email:' . $_POST['email'] .'</p><p>...</p>';
$result = wp_mail('jjotpegie@gmail.com', 'New mail', $message);
if ($result ) {
    // Do something here
}
remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
?>
