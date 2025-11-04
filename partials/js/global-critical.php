function notify(text,type) {

    const DISPLAY_TIME = 3000;
    const TRANSITION_TIME = 500;

    let $notification = $('<div>')
	        .addClass('notification-item')
	        .text(text);

    if(type == 'success'){
    	$notification.addClass('notification-success');
	}
	else if(type == 'danger'){
		$notification.addClass('notification-danger');
	}
	else{
		
	}
    

    $('#notification-area').append($notification);

    setTimeout(() => {
        $notification.addClass('show');
    }, 50);

    setTimeout(() => {
        $notification.removeClass('show');
    }, DISPLAY_TIME + 50);

    setTimeout(() => {
        $notification.remove();
    }, DISPLAY_TIME + TRANSITION_TIME + 100); 
}



