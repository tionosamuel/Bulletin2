<div class="p-2 bg-white shadow-sm">

    <form method="POST" wire:submit.prevent="store">
        @csrf
        @method('post')

        @if (Session::get('error'))
            <div class="p-5">
                <div class="p-4 border-red-500 bg-red-400 animate-bounce text-white">{{ Session::get('error') }}</div>
            </div>
        @endif

        <div class="p-5 flex flex-col gap-4">
            <div class="block mb-5">
                <p>Code</p>
                <a-jet-label value="{{ __('Code') }}" />
                <input type="text"
                    class="block mt-1 rounded-md border-gray-300 w-full @error('code')
            border-red-500 bg-red-100 animate-bounce
        @enderror"
                    wire:model="code" name="code">

                @error('code')
                    <div class="text text-red-500 mt-1"> {{ $message }}</div>
                @enderror
            </div>
            <div class="block mb-5">
                <p>Libelle</p>
                <a-jet-label value="{{ __('Libelle') }}" />
                <input type="text"
                    class="block mt-1 rounded-md border-gray-300 w-full @error('code')
            border-red-500 bg-red-100 animate-bounce
        @enderror"
                    wire:model="libelle" name="libelle">

                @error('libelle')
                    <div class="text text-red-500 mt-1">*Le champ libelle est requis</div>
                @enderror
            </div>
             <div class="block mb-5">
                <p>Montant de la scolarité</p>
                <a-jet-label value="{{ __('Montant de la scolarité') }}" />
                <input type="text"
                    class="block mt-1 rounded-md border-gray-300 w-full @error('scolarite')
            border-red-500 bg-red-100 animate-bounce
        @enderror"
                    wire:model="scolarite" name="scolarite">

                @error('scolarite')
                    <div class="text text-red-500 mt-1">*Le champ Montant de la scolarité est requis</div>
                @enderror
            </div> 
        </div>

        <div class="p-5 flex justify-between items-center bg-gray-100">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm">Annuler</button>
            <button class="bg-green-600 p-3 rounded-sm text-white text-sm" type="submit">Mettre a jour</button>
        </div>


    </form>
</div>
