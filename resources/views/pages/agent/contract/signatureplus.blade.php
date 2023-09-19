@extends('layouts.master')

@section('body')
@section('styles')
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
" rel="stylesheet">
@endsection
<livewire:contrat.check-contrat-plus-statuses :contrat="$contrat" />
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('f6ab99bd1b657dfa833c', {
        cluster: 'eu'
    });

    var channel = pusher.subscribe('demo-chan');
    channel.bind('App\\Events\\ClientSignerCspePlus', function(data) {
        Livewire.emit('postAdded');
        Swal.fire({
            title: 'Client a signé!',
            text: data.contrat.rum,
            icon: 'success',
            confirmButtonText: 'Confirmer'
        })
    });
    channel.bind('App\\Events\\EmailOpened', function(data) {
        Livewire.emit('emailOpened');
    });
</script>

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@endsection
