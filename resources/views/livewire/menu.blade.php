<div style="position: relative; left: 80px;">
    <div style="position: relative; left: 30px;">
        <div class="hidden sm:block" aria-hidden="true">
          <div class="py-5">
            <div class="border-t border-gray-200"></div>
          </div>
        </div>
        
        <div class="mt-10 sm:mt-0">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
              <div class="px-2 sm:px-10">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Registro de Menu</h3>
                <p class="mt-1 text-sm text-gray-600">Formulario para Registrar Menú.</p>
              </div>
            </div>
            <br>
            <div class="mt-5 md:mt-0 md:col-span-2">
              @if ($InsertOrUpdate)
              <form  wire:submit.prevent="Save">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="titulo_" class="block text-sm font-medium text-gray-700">Titulo de Comida</label>
                        <input type="text" name="titulo_" wire:model="_Titulo" id="titulo_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Titulo') <span class="error">{{ $message }}</span> @enderror
                      </div>
        
                      <div class="col-span-6 sm:col-span-6">
                        <label for="descripcion_" class="block text-sm font-medium text-gray-700">Ingredientes</label>
                        <input type="text" name="descripcion_" wire:model="_Descripcion" id="descripcion_" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Descripcion') <span class="error">{{ $message }}</span> @enderror
                      </div>

                      <div class="col-span-6 sm:col-span-6">
                        <label for="precio_" class="block text-sm font-medium text-gray-700">Precio de Plato</label>
                        <input type="number" name="fecha_" wire:model="_Valor" id="precio_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Valor') <span class="error">{{ $message }}</span> @enderror
                      </div>
                      <div>
                        <label>Plato del Día</label>
                        <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_tipomenu"  style="cursor: pointer; width: 330px ">
                            <option>Selecciona</option> 
                            @foreach ($m as $item)
                            <option value="{{$item->id}}" style="width: 200px">{{$item->Menu}}</option>
                            @endforeach                
                        </select>
                      </div>
                      <div style="position: relative; left: 250px;">
                        <label>Restaurante</label>
                        <select class="form-control select3" data-bs-toggle="select3" wire:model="_id_local"  style="cursor: pointer; width: 330px ">
                            <option>Selecciona</option> 
                            @foreach ($l as $item)
                            <option value="{{$item->id}}" style="width: 200px">{{$item->Nombre}}</option>
                            @endforeach                
                        </select>
                      </div>
                    </div>
                  </div>
                  <div>
                    @if (session()->has('message'))
                    <div class="alert alert-success" style="width: 250px;border: rgb(72, 136, 53) solid 2px;left: 300px; background: rgb(68, 255, 0)">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar Menú</button>
                  </div>
                </div>
              <br> <br>
              </form>
              @else
              <form  wire:submit.prevent="Update">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="titulo_" class="block text-sm font-medium text-gray-700">Titulo de Comida</label>
                        <input type="text" name="titulo_" wire:model="_Titulo" id="titulo_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Titulo') <span class="error">{{ $message }}</span> @enderror
                      </div>
        
                      <div class="col-span-6 sm:col-span-6">
                        <label for="descripcion_" class="block text-sm font-medium text-gray-700">Ingredientes</label>
                        <input type="text" name="descripcion_" wire:model="_Descripcion" id="descripcion_" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Descripcion') <span class="error">{{ $message }}</span> @enderror
                      </div>

                      <div class="col-span-6 sm:col-span-6">
                        <label for="precio_" class="block text-sm font-medium text-gray-700">Precio de Plato</label>
                        <input type="number" name="fecha_" wire:model="_Valor" id="precio_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Valor') <span class="error">{{ $message }}</span> @enderror
                      </div>
                      <div>
                        <label>Plato del Día</label>
                        <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_tipomenu"  style="cursor: pointer; width: 330px ">
                            <option>Selecciona</option> 
                            @foreach ($m as $item)
                            <option value="{{$item->id}}" style="width: 200px">{{$item->Menu}}</option>
                            @endforeach                
                        </select>
                      </div>
                      <div style="position: relative; left: 250px;">
                        <label>Restaurante</label>
                        <select class="form-control select3" data-bs-toggle="select3" wire:model="_id_local"  style="cursor: pointer; width: 330px ">
                            <option>Selecciona</option> 
                            @foreach ($l as $item)
                            <option value="{{$item->id}}" style="width: 200px">{{$item->Nombre}}</option>
                            @endforeach                
                        </select>
                      </div>
                    </div>
                  </div>
                  <div>
                    @if (session()->has('message'))
                    <div class="alert alert-success" style="width: 250px;border: rgb(72, 136, 53) solid 2px;left: 300px; background: rgb(68, 255, 0)">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Actualizar Menú</button>
                  </div>
                </div>
              <br> <br>
              </form>
              @endif
            </div>
          </div>
        </div>

        <div>
          <table class="table-info table-hover" style="width: 1000px; position: relative; left: 50px;">
            <thead>
              <tr style="color: rgb(255, 100, 146);">
                <th scope="col" style="width: 300px">Titulo de la Comida</th>
                <th style="width: 300px">Descripción</th>
                <th style="width: 300px">Precio Plato</th>
                <th style="width: 200px">Plato del Dia</th>
                <th style="width: 300px">Restaurante</th>
                <th style="width: 300px">Acciones</th>
              </tr>
            </thead>
            <tbody>
          @foreach ($frm as $item)
            <tr>
              <th scope="row">{{$item->Titulo}}</th>
              <td>{{$item->Descripcion}}</td>
              <td>{{$item->Valor}}</td>
              <td>{{$item->Menu}}</td>
              <td>{{$item->Nombre}}</td>
              <td class="table-action">  
                <a style="position: relative; left: 15px;"><i class="align-middle fas fa-edit" wire:click="Edit({{ $item->id }})" style="cursor: pointer"></i></a>
                <a style="position: relative; left: 20px;"><i class="align-middle fas fa-fw fa-trash" wire:click="DestroyP({{ $item->id }})" style="cursor: pointer"></i></a>
              </td>
            </tr>
          @endforeach
            </tbody>
          </table>
          <span style="position: relative; left: -1115px; top: 30px;">{{ $frm->links() }}</span>
        </div>
      </div>
</div>
