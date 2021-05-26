<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agendamentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
                        <tr class="text-left border-b-2 border-gray-300">
                            <th class="px-4 py-3">Dia</th>
                            <th class="px-4 py-3">Horário</th>
                            <th class="px-4 py-3">Nome do Paciente</th>
                            <th class="px-4 py-3">CPF do Paciente</th>
                            <th class="px-4 py-3">Nome do Dentista</th>
                            <th class="px-4 py-3">CRO</th>
                        </tr>

                        <tr class="bg-gray-100 border-b border-gray-200">
                            @foreach ($schedules as $schedule)
                                <td class="px-4 py-3"> {{ $schedule->date }}</td>
                                <td class="px-4 py-3"> {{ $schedule->time }} </td>
                                <td class="px-4 py-3"> {{ $schedule->patient->name }} </td>
                                <td class="px-4 py-3"> {{ $schedule->patient->cpf }} </td>
                                <td class="px-4 py-3"> {{ $schedule->dentist->name }} </td>
                                <td class="px-4 py-3"> {{ $schedule->dentist->cro }} - {{ $schedule->dentist->cro_state }} </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
