<?php

use App\Models\User;
use App\Models\Owner;
use Livewire\Livewire;
use App\Models\Patient;
use Illuminate\Support\Str;
use Filament\Actions\DeleteAction;
use Illuminate\Support\Facades\DB;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Log;
use function Pest\Livewire\livewire;

use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\PatientResource\Pages\EditPatient;
use App\Filament\Resources\PatientResource\Pages\ListPatients;
use App\Filament\Resources\PatientResource\Pages\CreatePatient;

it('can render the index page', function () {
    Livewire::test(ListPatients::class)
        ->assertSuccessful();
});

it('can render the create page', function () {
    Livewire::test(CreatePatient::class)
        ->assertSuccessful();
});

// it('can render the edit page', function () {
//     $record = Patient::factory()->create();
//     Livewire::test(EditPatient::class, ['record' => $record->getRouteKey()])
//         ->assertSuccessful();
// });

