<div class="container">
    <div class="row my-5">
        <div class="border border-primary p-4">
            <div class="d-flex justify-content-around">
                <button class="btn btn-primary" wire:click="increment">+</button>
                <button class="btn btn-primary" wire:click="decrement">-</button>
                <button class="btn btn-primary" wire:click="incrementByNumber(5)">+ 5</button>
                <button class="btn btn-primary" wire:click="decrementByNumber(5)">- 5</button>
                <label for="">Aggiungi un numero al counter</label>
                <input type="text" wire:model="numberToAdd">
                <button class="btn btn-primary" wire:click="addNumberToCounter">Aggiungi</button>
                <h2>{{ $count }}</h2>
            </div>
        </div>
    </div>
</div>
