function appointment()
{
	window.location.assign('makeAppointment.php');
}
function cancel_appointment()
{
	var decision=confirm("Do you want to cancel the appointment?");
	if(decision == true)
	{
	$('#user_appointment').load('cancel_appointment.php');
	}
	
}
function show_appointments()
{
	$('#show_appointments').load('show_appointments.php');
}