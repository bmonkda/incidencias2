<div class="relative flex items-center justify-between h-16">
    <div class="col-md-12">
        <label>Categoria
        <select class="form-control w-48" wire:model="category" >
            <option value="0">Seleccione una categoría</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select></label>
    </div>

    {{-- <div class="col-md-12 ml-3"> --}}
    <div class="col-md-12 mx-auto">
        <label>Subcategoria
        <select class="form-control" wire:model="subcategory">
            
            @if ($subcategories->count() == 0)
                <option value="">Debe seleccionar una categoria</option>
            @endif

            @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach

        </select></label>
    </div>

</div>
