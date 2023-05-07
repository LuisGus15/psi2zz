<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Producto') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="p-3">
            <form action="{{route('productos.guardar')}}" method="post">
                @csrf
                <div class="bg-slate-300 p-3">
                    <div class="grid lg:grid-cols-3 grid-cold-1 mb-5">
                        <div class="cold-span-1">
                            <label class="font-bold mb-3" for="">Nombre:</label>
                            <br>
                            <input id="nombre" name="nombre" type="text" class="px-3 py-2 border-gray-100 rounded-lg"
                                placeholder="Nombre del producto">
                                @error('nombre')
                                    <strong class="text-rose-300">Falta el nombre</strong>
                                @enderror
                        </div>
                        <div class="cold-span-1">
                            <label class="font-bold mb-3" for="">Descripcion:</label>
                            <br>
                            <input id="descripcion" name="descripcion" type="text" class="px-3 py-2 border-gray-100 rounded-lg"
                                placeholder="Descripcion del producto">
                                @error('descripcion')
                                <strong class="text-rose-300">Falta la descripcion</strong>
                            @enderror
                        </div>
                        <div class="cold-span-1">
                            <label class="font-bold mb-3" for="">Precio:</label>
                            <br>
                            <input id="nombre" name="precio" type="text" class="px-3 py-2 border-gray-100 rounded-lg"
                                placeholder="Precio del producto">
                                @error('precio')
                                <strong class="text-rose-300">Falta el precio</strong>
                            @enderror
                        </div>
                    </div>
                    <button type="sudmit" class="px-3 py-3 bg-lime-600 rounded-lg text-black">Crear</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
