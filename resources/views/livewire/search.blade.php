<div class="col-md-4">
    <div class="listsearch-input-item">
        <span class="iconn-dec"><i class="far fa-bookmark"></i></span>

        <input wire:model.lazy="search" type="text" placeholder="What are you looking for ?" value=""/>

    </div>
    <ul>
        @foreach($ecoles as $ecole)
            <li>{{ $ecole->name }}</li>
        @endforeach
    </ul>
</div>
