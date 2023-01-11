<div>
    <h2>Este é um component Livewire.</h2>

    <form wire:submit.prevent="save">
        <input type="text" wire:model.debounce.1000ms="price">
        @error('price')
        <span>{{$message}}</span>
        @enderror
        <input type="text" wire:model.defer="quantity">
        @error('quantity')
            <span>{{$message}}</span>
        @enderror

        <button>add</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
            </tr>
        </thead>
        @foreach($results as $result)
            <tr>
                <td>{{$result['price']}}</td>
                <td>{{$result['quantity']}}</td>
                <td>{{$result['total']}}</td>
            </tr>
        @endforeach
    </table>

    <button wire:click="confirmSave">Salvar no banco de dados</button>
</div>
