<?php

namespace Tests\Unit;

use App\PetType;
use App\Models\Owner;
use App\Models\Patient;
use Filament\Forms\Form;
use PHPUnit\Framework\TestCase;
use App\Filament\Resources\PatientResource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Filament\Resources\PatientResource\RelationManagers\TreatmentsRelationManager;

class PatientResourceTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_patient_treatment_relationship_defined()  
    {  
        $relations = PatientResource::getRelations();  
        $this->assertContains(TreatmentsRelationManager::class, $relations);  
    }

    public function test_has_a_model()  
    {  
        $this->assertSame(Patient::class, PatientResource::getModel());  
    }
}
