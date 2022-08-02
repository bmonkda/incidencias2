<div>
    <div class="col-md-6">
        <label>Categoria</label>
        <select class="form-control" wire:model="subcategory" >
            <option value="">Seleccione una categoría</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label>Subcategoria</label>
        <select class="form-control" wire:model="category">
            
            @if ($categories->count() == 0)
                <option value="">Seleccione una subcategoría</option>
            @endif

            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
    </div>

</div>
