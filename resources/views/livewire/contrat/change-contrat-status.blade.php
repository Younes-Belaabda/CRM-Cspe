{{-- <div>
    <style>
        .my-modal {
            width: 80vw;
            height: 80vh;
            background-color: rgb(51, 50, 50);
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
    <div class="my-modal">
        <div id="button-area">
            <button class="button__primary" wire:click="signer()">
                {{ $text_button }}
            </button>
        </div>
    </div>
</div> --}}
<div id="button-area">
    <button class="button__primary" wire:click="signer()">
        {{ $text_button }}
    </button>
</div>
