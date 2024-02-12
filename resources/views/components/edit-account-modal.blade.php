<x-modal name="edit-account-modal"  maxWidth="lg" focusable>
    <form method="post" action="{{route('account.update', $account)}}" class="p-6" x-data="{ buttonDisabled: false}" x-on:submit="buttonDisabled = true">
        @csrf
        @method('PUT')
        <h2 class="text-lg font-medium text-gray-900">
            Edit Account Details
        </h2>
        <div class="mt-6">
            <x-input-label for="account_number" :value="__('Account Number')"/>
            <x-text-input id="account_number" name="account_number" type="text" class="mt-1 block w-full" :value="old('account_number', $account->account_number)" required autofocus autocomplete="account_number" />
            <x-input-error class="mt-2" :messages="$errors->get('account_number')" />
        </div>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-2">
            <div class="">
                <x-input-label for="debit" :value="__('Debit')"/>
                <x-text-input id="debit" name="debit" type="text" class="mt-1 block w-full" :value="old('debit', $account->debit)" required autofocus autocomplete="debit" />
                <x-input-error class="mt-2" :messages="$errors->get('debit')" />
            </div>
            <div class="">
                <x-input-label for="credit" :value="__('Credit')"/>
                <x-text-input id="credit" name="credit" type="text" class="mt-1 block w-full" :value="old('credit', $account->credit)" required autofocus autocomplete="credit" />
                <x-input-error class="mt-2" :messages="$errors->get('credit')" />
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-2">
            <div class="">
                <x-input-label for="date" :value="__('Date')"/>
                <x-text-input id="date" name="date" type="text" class="mt-1 block w-full" :value="old('date', $account->date)" required autofocus autocomplete="date" />
                <x-input-error class="mt-2" :messages="$errors->get('date')" />
            </div>
            <div class="">
                <x-input-label for="time" :value="__('Time')"/>
                <x-text-input id="time" name="time" type="text" class="mt-1 block w-full" :value="old('time', $account->time)" required autofocus autocomplete="time" />
                <x-input-error class="mt-2" :messages="$errors->get('time')" />
            </div>
        </div>
        <div class="mt-6">
            <x-input-label for="balance" :value="__('Account Balance')"/>
            <x-text-input id="balance" name="balance" type="text" class="mt-1 block w-full" :value="old('balance', $account->balance)" required autofocus autocomplete="balance" />
            <x-input-error class="mt-2" :messages="$errors->get('balance')" />
        </div>

        <div class="mt-6 flex justify-end gap-4">
            <x-secondary-button x-on:click.prevent="$dispatch('close')">Cancel</x-secondary-button>
            <x-primary-button 
                x-bind:disabled="buttonDisabled"
                x-text="buttonDisabled ? 'Please wait...' : 'Submit'">
            </x-primary-button>
        </div>
    </form>
</x-modal>