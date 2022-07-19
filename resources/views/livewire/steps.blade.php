<div class="relative flex h-full w-full">
  <div class="h-screen w-full">
    <div class="mx-auto flex h-full w-1/3 flex-col justify-center text-white xl:w-1/3">
        @if($step == 1)
            @livewire('firststep')
        @elseif($step == 2)
            @livewire('secondstep')
        @elseif($step == 3)
            @livewire('shortform')
        @elseif($step == 11)
            @livewire('registerstep')
        @endif
    </div>
  </div>
</div>

@push('scripts')
<script>
    function copyText() {
        /* Get the text field */
        var copyText = document.getElementById("shortUrl");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
    }
</script>
@endpush