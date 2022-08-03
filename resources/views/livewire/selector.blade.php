<div>
    <div class="col-md-12">
        <label>Categoria</label>
        <select class="form-control" wire:model="category" >
            <option value="0">Seleccione una categoría</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-12 mt-2">
        <label>Subcategoria</label>
        <select class="form-control" wire:model="subcategory">
            
            @if ($subcategories->count() == 0)
                <option value="">Debe seleccionar una categoria</option>
            @endif

            @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach

        </select>
    </div>

</div>
