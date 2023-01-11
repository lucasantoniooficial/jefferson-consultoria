<div>
    <h1>{{$title}}</h1>

    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @this.initialize();
            })
        </script>
    @endpush
</div>
