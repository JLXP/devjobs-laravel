<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>
    <form>
        <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida')" />

        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"
            :value="old('ultimo_dia')" autofocus autocomplete="ultimo_dia" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </form>
</div>
