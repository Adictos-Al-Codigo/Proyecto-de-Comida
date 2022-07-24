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
                <h3 class="text-lg font-medium leading-6 text-gray-900">Registro de Local</h3>
                <p class="mt-1 text-sm text-gray-600">Formulario para Registrar Local.</p>
              </div>
            </div>
            <br>
            <div class="mt-5 md:mt-0 md:col-span-2">
              <form  wire:submit.prevent="Save">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="nombre_" class="block text-sm font-medium text-gray-700">Nombre del Local</label>
                        <input type="text" name="nombre_" wire:model="_NombreLocal" id="nombre_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
        
                      <div class="col-span-6 sm:col-span-6">
                        <label for="nombre_" class="block text-sm font-medium text-gray-700">Télefono</label>
                        <input type="text" name="nombre_" wire:model="_Telefono" id="nombr_" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-6">
                        <label for="fecha_" class="block text-sm font-medium text-gray-700">Año de Creación</label>
                        <input type="date" name="fecha_" wire:model="_Apertura" id="fecha_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <label>Dueño</label>
                      <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_persona"  style="cursor: pointer; width: 330px ">
                          <option>Selecciona</option> 
                          @foreach ($p as $item)
                          <option value="{{$item->id}}" style="width: 200px">{{$item->Nombre}} {{$item->Apellido}} ({{$item->Tipo}})</option>
                          @endforeach                
                      </select>
                    </div>
                  </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar</button>
                  </div>
                </div>
              <br> <br>
              </form>
              <form  wire:submit.prevent="Save2">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="nombre_" class="block text-sm font-medium text-gray-700">Sucursal</label>
                        <input type="text" name="nombre_" wire:model="_NombreLocal" id="nombre_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
        
                      <label>Matriz</label>
                      <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_sucursal"  style="cursor: pointer; width: 330px ">
                          <option>Selecciona</option> 
                          @foreach ($s as $item)
                          <option value="{{$item->id}}" style="width: 200px">{{$item->Nombre}}</option>
                          @endforeach                
                      </select>
                    </div>
                  </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar Sucursal</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <br>
      <div>
        <h1 style="color: red">Lista de Dueños</h1>
        @foreach ($d as $item)
            <br>
            <h4>Cedula: {{$item->Cedula}}</h4>
            <h4>Nombre: {{$item->Nombre}}</h4>
            <h4>Apellido: {{$item->Apellido}}</h4>
            <h4>Télefono: {{$item->Telefono}}</h4>
            <h4>Dirección: {{$item->Direccion}}</h4>
        @endforeach
      </div>
      <br>
      <div>
        <h1 style="color: red">Lista de Datos del Local</h1>
        @foreach ($l as $item)
            <h4>Nombre del Local: {{$item->Nombre}}</h4>
            <h4>Telefono: {{$item->Telefono}}</h4>
            <h4>Año de Creación: {{$item->AñoCreacion}}</h4>
            <h4>Pertenece A: {{$item->Cedula}}</h4>
            <br>
        @endforeach
      </div>
      <br>
      Sucursales
      <br>
      @foreach ($su as $item)
          <span>{{$item->Nombre}}</span>
      @endforeach
</div>
