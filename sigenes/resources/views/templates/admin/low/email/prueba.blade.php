@extends('emails.template')

@section('title')
    Suspensión
@endsection

@section('content')
	@if($suspension->status_id == 5)
		<p align="justify" style="font-family: arial; font-size: 12px;">
			Estimado alumno {{$suspension->Student->Partner->name}} {{$suspension->Student->Partner->firstlastname}} {{$suspension->Student->Partner->secondlastname}} se le informa que su tramite de suspensión a sido enviada a la 
			cede central de la <b>Universidad Autónoma de México</b> para la validación y aprobación 
			de su solicitud la cual se encuentra en un estatus de <b><u>Recibida</u></b>.
			<br>
			<br>
			Se le hace mención que el proceso de tramite de la suspensión se llevo acabo el 
			{{$suspension->date_init}}, en el periodo {{$suspension->Period->month_init}} - {{$suspension->Period->month_end}} {{$suspension->Period->year}} por las siguientes razones: {{$suspension->reason}} 
			<br>
			<br>
			Por tal motivo se le informa que el proceso de revisión que se tiene en la cede central 
			para la aprobación o rechazo de su solicitud de suspensión tardará unos días para que 
			sea comunicado su veredicto, por tal motivo le invitamos a que prosiga asistiendo 
			a sus clases de manera habitual y se mantenga en contacto con servicios escolares.</p>
	@endif
	@if($suspension->status_id == 6)
		<p align="justify" style="font-family: arial; font-size: 12px;">
			Estimado alumno {{$suspension->Student->Partner->name}} {{$suspension->Student->Partner->firstlastname}} {{$suspension->Student->Partner->secondlastname}} 
			se le informa que el veredicto de su tramite de suspensión a llegado desde la 
			<b>Universidad Autónoma de México</b> nos entristece comunicarle que su solicitud de 
			suspensión a sido <b><u>Autorizada</u></b>.
			<br>
			<br>
			Se le informa que debe acudir al departamento de servicios escolares para darle el 
			seguimiento de su suspensión, así como comunicarle la fecha en la que puede pasar 
			por sus documentos; esperamos que se pueda reincorporar a nuestro sistema educativo 
			en un futuro no muy lejano.
		</p>
	@endif
@endsection