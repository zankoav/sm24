<?php
    use Ls\Wp\Log as Log;

	function set_html_content_type() {
		return "text/html";
	}

	add_filter( 'wp_mail_content_type', 'set_html_content_type' );

	function contact_form() {
        
        $mail_to = get_post_meta($_POST['id'], 'email', 1 );
		$subject = 'Вызов из сайта SM24.BY!';
		$headers = 'From: SM24.BY <'.$mail_to.'>' . "\r\n";

		$response           = array();
		$response['status'] = 0;
		$form_phone         = empty( $_POST['phone'] ) ? '' : esc_attr( $_POST['phone'] );

		if ( empty($form_phone) ) {

			$response['message']    = 'Phone empty';
			echo json_encode( $response );
			wp_die();
		}


		$msg = "<p><strong>Номер телефона: </strong><span>" . $form_phone . "</span></p>";


		if ( wp_mail( $mail_to, $subject, $msg, $headers ) ) {
			$response['status'] = 1;
		}

		echo json_encode( $response );
        Log::info('response', $response);
		wp_die();
	}

	add_action( 'wp_ajax_contact_form', 'contact_form' );
	add_action( 'wp_ajax_nopriv_contact_form', 'contact_form' );
