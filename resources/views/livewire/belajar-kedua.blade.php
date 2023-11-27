<div>
    <div class="mb-3">
        <input type="number" class="form-control" wire:model="keranjang">
    </div>
    <button wire:click="plus" class="btn btn-primary">Plus +</button>
    @if ($keranjang > 0)
        <button wire:click="minus" class="btn btn-secondary">Min -</button>
    @endif
</div>
