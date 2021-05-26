<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Agendamento') }}
        </h2>
    </x-slot>
    <div class="container py-3 mt-5">
        <h1>New Schedule</h1>
    </div>
    <form method="post" action="/shedule" class="container py-5">
        @csrf
        <div class="field">
            <label class="label" for="name">Name</label>

            <div class="control">
                <input class="input @error('name') is-danger @enderror" type="text"  name="name" id="name">
                @error('name')
                    <p class="help is-danger">{{ $errors->first("name") }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Paciente</label>

            <div class="">
                <select name="patient">
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}"> {{ $patient->name }} </option>
                    @endforeach
                </select>
                @error('patients')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Dentista</label>

            <div class="">
                <select name="dentist">
                    @foreach ($dentists as $dentist)
                        <option value="{{ $dentist->id }}"> {{ $dentist->name }} </option>
                    @endforeach
                </select>
                @error('patients')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
    </form>
</x-app-layout>
