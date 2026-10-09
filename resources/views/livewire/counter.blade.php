<div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1>{{$firstCount}}</h1>

                <button wire:click="increment" class="btn btn-secondary">+1</button>
                <button wire:click="decrement" class="btn btn-danger">-1</button>
            </div>

            <div class="col-12 col-md-6">
                <h1>{{$secondCount}}</h1>

                <button wire:click="incrementMyNumber({{$myNum}})" class="btn btn-secondary">+{{$myNum}}</button>
                <button wire:click="decrementMyNumber({{$myNum}})" class="btn btn-danger">-{{$myNum}}</button>
            </div>

        </div>
    </div>

</div>
