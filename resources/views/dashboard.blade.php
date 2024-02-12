<x-app-layout>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-3 p-8">

                    <div class="flex flex-col md:flex-row text-gray-900 px-1 py-4 md:border-r md:border-gray-200">
                        <div class="flex items-center justify-center">
                            <div class="relative w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <svg class="absolute w-16 h-16 text-gray-400 left-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                        <div class="px-2 text-center">
                            <h1 class="font-extrabold text-2xl">Welcome back, <br> {{Auth::user()->name}}</h1>
                            <span class="text-sm text-gray-400">it's really nice to see you again</span>
                        </div>
                    </div>


                    <div class="flex flex-col px-3 py-4 items-center">
                        <span class="font-extrabold text-4xl">1</span>
                        <span class="text-gray-400 text-sm">Number of Accounts</span>
                        <span class="text-teal-900 font-extrabold">current account</span>
                        <span>{{$account->account_number}}</span>
                    </div>


                    <div>
                        <div class="flex w-full bg-teal-900 text-teal-200 rounded-lg p-6 text-sm">
                            <div class="w-8/12">
                                <div class="mb-6">
                                    <span>Banking and Budgeting, <br> made simple</span>
                                </div>
                                
                                <div class="flex space-x-3">
                                    <span>Membership</span>
                                    <span>|</span>
                                    <span>Gold</span>
                                </div> 
                            </div>
                            <div class="relative w-4/12 text-teal-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute bottom-1 right-1 w-12 h-12">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                </svg>                                  
                            </div>
                        </div>
                    </div>

                </div>     
            </div>
        </div>
    </div>

    
    <div class="pb-12">
        <div class="max-w-5xl mx-auto sm:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-3 p-10">
                    <div class="col-span-2 md:border-r md:border-gray-200">
                        <div>
                            <div x-data class="flex justify-between pb-2 pr-2">
                                <h2 class="font-semibold text-lg">My Cards</h2>
                                @can('update', $account)
                                    <button x-on:click.prevent="$dispatch('open-modal', 'edit-account-modal')" class="bg-teal-900 text-white px-5 py-2 rounded-lg text-sm">
                                        Edit Account
                                    </button>
                                @endcan
                            </div>
                            
                            <div class="grid grid-cols-10 gap-4">
                                <div class="col-span-1">
                                    <div class="border border-gray-200 rounded-lg w-12 p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>      
                                    </div>                            
                                </div>

                                <div class="relative col-span-4 flex flex-col bg-teal-900 text-white h-32 rounded-xl px-4 shadow-xl">
                                    <div class="absolute bottom-2 py-2">
                                        <h3 class="text-base font-extrabold">{{'$ '}} {{number_format($account->balance, 2, '.', ',')}}</h3>
                                        <h4 class="text-xs">**** **** **** 4986</h4>
                                    </div>
                                    <div class="absolute right-0 bottom-0 w-16 h-16 bg-teal-800 rounded-full">

                                    </div>
                                </div>

                                <div class=" relative col-span-4 bg-gray-200 rounded-lg px-4 shadow-xl">
                                    <h6 class="text-sm py-8">866</h6>
                                    <div class="absolute bottom-2 pb-2">
                                        <h4 class="font-extrabold">Expiry</h4>
                                        <h4 class="text-xs">06/29</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-span-1 px-4">
                        <div class="flex justify-between items-center">
                            <h1 class="font-extrabold">Balance</h1>
                            <h4 class="text-gray-400 text-sm">As of {{$account->date}} {{$account->time}}</h4>
                        </div>
                        <div class="py-6 text-teal-900">
                            <h1 class="text-3xl font-extrabold">{{'$ '}} {{ number_format($account->balance, 2, '.', ',')}}</h1>
                            <h4 class="text-sm font-bold">**** **** **** 4986</h4>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <h2 class="text-gray-400">Credit</h2>
                                <div class="flex space-x-2">
                                    <div class="flex items-center justify-center h-6 w-6 bg-gray-100 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-400">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </div>
                                    
                                    <h4 class="font-bold">{{'+ '}} {{number_format($account->credit, 2, '.')}}</h4>
                                </div>
                                
                            </div>
                            <div>
                                <h2 class="text-gray-400">Debit</h2>
                                <div class="flex space-x-2">
                                    <div class="flex items-center justify-center h-6 w-6 bg-gray-100 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-400">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 4.5 15 15m0 0V8.25m0 11.25H8.25" />
                                          </svg>                                          
                                    </div>
                                    
                                    <h4 class="font-bold">{{'+ '}} {{number_format($account->debit, 2, '.')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <x-edit-account-modal :account="$account"/>

    <div class="pb-12">
        <div class="max-w-5xl mx-auto sm:px-2">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="col-span-3 w-full overflow-x-auto">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <h1 class="py-3 pl-2 font-semibold text-teal-900">Recent Transactions</h1>
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr class="border-b bg-teal-900 text-left text-xs font-semibold uppercase tracking-wide text-teal-200">
                                    <th class="px-4 py-3">Date Posted</th>
                                    <th class="px-4 py-3">Narration</th>
                                    <th class="px-4 py-3">Debit</th>
                                    <th class="px-4 py-3">Credit</th>
                                    <th class="px-4 py-3">Balance</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y">
                                @php
                                    $runningTotal = 0;
                                @endphp
                                @forelse($transactions as $transaction)
                                    @php
                                        $balance = $transaction->credit - $transaction->debit;
                                        $runningTotal += $balance;
                                    @endphp
                                    @if($loop->even)
                                        <tr class=" bg-teal-50 text-gray-700">
                                            <td class="px-4 py-3 text-sm">
                                                {{ $transaction->date_posted }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $transaction->narration }}
                                            </td>
                                            <td class="px-4 py-3 text-sm text-red-500">
                                                {{'$ '}} {{ number_format($transaction->debit, 2, '.', ',')}}
                                            </td>
                                            <td class="px-4 py-3 text-sm text-green-500">
                                                {{'$ '}} {{ number_format($transaction->credit, 2, '.', ',')}}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{'$ '}} {{ number_format($runningTotal, 2, '.', ',') }}
                                            </td>
                                            <td class="px-4 py-3 text-sm cursor-pointer">
                                                @can('update', $transaction)
                                                    <a href="{{route('transaction.edit', $transaction)}}" class="px-2 py-1 bg-teal-900 text-white rounded">
                                                        Edit
                                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-6 h-5 pl-2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @else
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-sm">
                                                {{ $transaction->date_posted}}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $transaction->narration }}
                                            </td>
                                            <td class="px-4 py-3 text-sm text-red-500">
                                                {{'$ '}} {{ number_format($transaction->debit, 2, '.', ',')}}
                                            </td>
                                            <td class="px-4 py-3 text-sm text-green-500">
                                                {{'$ '}} {{ number_format($transaction->credit, 2, '.', ',')}}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{'$ '}} {{ number_format($runningTotal, 2, '.', ',') }}
                                            </td>
                                            <td class="px-4 py-3 text-sm cursor-pointer">
                                                @can('update', $transaction)
                                                    <a href="{{route('transaction.edit', $transaction)}}" class="px-2 py-1 bg-teal-900 text-white rounded">
                                                        Edit
                                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-6 h-5 pl-2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td class="px-4 py-3" colspan="4">No transactions found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-span-1">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-8 flex flex-col items-center justify-center space-y-2">
                            <h2 class="font-extrabold">Let's Transfer</h2>
                            <p class="text-gray-400 text-sm text-center">You can only make transfers to linked accounts</p>
                            <button class="text-sm bg-teal-900 text-teal-200 rounded-lg px-8 py-2 shadow-lg">
                                <a href="/transfer">Transfer</a>    
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="max-w-5xl mx-auto sm:px-2">
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <div class="col-span-3">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <h1>{{ $chart1->options['chart_title'] }}</h1>
                            {!! $chart1->renderHtml() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $chart1->renderChartJsLibrary() !!}

    {!! $chart1->renderJs() !!}
</x-app-layout>
