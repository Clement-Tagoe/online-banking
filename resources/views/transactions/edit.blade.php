<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{route('transaction.update', $transaction)}}" class="p-6">
                    @csrf
                    @method('PUT')
                    <h2 class="text-lg font-medium text-gray-900">
                        Edit Transaction Details
                    </h2>

                    {{-- @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach --}}
                    
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <div class="">
                            <x-input-label for="date_posted" :value="__('Date Posted')"/>
                            <x-text-input id="date_posted" name="date_posted" type="date" class="mt-1 block w-full" :value="old('date_posted', $transaction->date_posted)" autofocus autocomplete="date_posted" />
                            <x-input-error class="mt-2" :messages="$errors->get('date_posted')" />
                        </div>
                        <div class="">
                            <x-input-label for="narration" :value="__('Narration')"/>
                            <x-text-input id="narration" name="narration" type="text" class="mt-1 block w-full" :value="old('narration', $transaction->narration)" autofocus autocomplete="narration" />
                            <x-input-error class="mt-2" :messages="$errors->get('narration')" />
                        </div>
                    </div>
            
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <div class="">
                            <x-input-label for="debit" :value="__('Debit')"/>
                            <x-text-input id="debit" name="debit" type="text" class="mt-1 block w-full" :value="old('debit', $transaction->debit)" autofocus autocomplete="debit" />
                            <x-input-error class="mt-2" :messages="$errors->get('debit')" />
                        </div>
                        <div class="">
                            <x-input-label for="credit" :value="__('Credit')"/>
                            <x-text-input id="credit" name="credit" type="text" class="mt-1 block w-full" :value="old('credit', $transaction->credit)" autofocus autocomplete="credit" />
                            <x-input-error class="mt-2" :messages="$errors->get('credit')" />
                        </div>
                    </div>
            
                    <div class="mt-6 flex justify-end gap-4">
                        <x-secondary-button><a href="{{route('dashboard')}}">Cancel</a></x-secondary-button>
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>