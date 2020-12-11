<div>
    <h1>Parent component</h1>
    @if($value)
        @livewire('child-component')
    @endif

    <button wire:click="$set('value', true)">CLick me</button>
</div>
