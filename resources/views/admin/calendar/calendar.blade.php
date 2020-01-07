@extends('layouts.admin')
@section('content')
<link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />




<link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />

<link href='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.css' rel='stylesheet' />

<link href='https://unpkg.com/@fullcalendar/list@4.3.0/main.min.css' rel='stylesheet' />
<h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
<div class="card">
    <div class="card-header">
        {{ trans('global.systemCalendar') }}
    </div>

    <div class="card-body">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>


    </div>
</div>
@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>


<script src='https://unpkg.com/@fullcalendar/core@4.3.1/locales-all.js'></script>



<script src='https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js'></script>

<script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>

<script src='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.js'></script>

<script src='https://unpkg.com/@fullcalendar/list@4.3.0/main.min.js'></script>

<script>
    $(document).ready(function () {
        var calendarEl = document.getElementById('calendar');
        var initialLocaleCode = 'pt-br'
        // page is now ready, initialize the calendar...
        events = {!!json_encode($events) !!};
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridMonth,timeGridDay,listMonth'
            },
            locale: initialLocaleCode,
            buttonIcons: false, // show the prev/next text
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: events
        });

        calendar.render();
    })

</script>
@stop
