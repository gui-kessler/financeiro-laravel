<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <table class="table-auto w-full bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <thead>
                    <tr class="text-gray-900 dark:text-gray-100">
                        <th class="px-6 py-2">Emissão</th>
                        <th class="px-6 py-2">Descrição</th>
                        <th class="px-6 py-2">Valor</th>
                        <th class="px-6 py-2">Vencimento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $conta)
                        <!-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-4 text-gray-900 dark:text-gray-100">
                                {{ $conta->descricao }} - R$ {{ number_format($conta->valor, 2, ',')}}
                            </div>
                        </div> -->
                        <tr class="text-gray-900 dark:text-gray-100">
                            <td class="px-6 py-2 text-center">{{$conta->emissao}}</td>
                            <td class="px-6 py-2 text-left">{{$conta->descricao}}</td>
                            <td class="px-6 py-2 text-center">R$ {{number_format($conta->valor, 2, ',')}}</td>
                            <td class="px-6 py-2 text-center">{{$conta->vencimento}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
