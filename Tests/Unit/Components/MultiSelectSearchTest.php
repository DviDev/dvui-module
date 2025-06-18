<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase;
use Modules\DvUi\Entities\DvUiTest\DvUiTestEntityModel;
use Modules\DvUi\Livewire\MultiSelectSearch;
use Modules\DvUi\Models\DvUiTestModel;

uses(TestCase::class);
uses(DatabaseTransactions::class);

test('can render component', function () {
    $p = DvUITestEntityModel::props();
    Schema::dropIfExists(DvUiTestModel::table());
    Schema::create(DvUiTestModel::table(), function ($table) use ($p) {
        $table->id();
        $table->string($p->property1);
        $table->string($p->property2);
    });

    // Cria um registro de teste
    $property1_value = 'Test Item 1';
    $property2_value = 'Test Item 2';
    DvUiTestModel::create([$p->property1 => $property1_value, $p->property2 => $property2_value]);
    $this->assertDatabaseHas(DvUiTestModel::table(), [$p->property1 => $property1_value, $p->property2 => $property2_value]);

    Livewire::test(MultiSelectSearch::class, [
        'modelClass' => DvUiTestModel::class,
        'searchFields' => [$p->property1, $p->property2],
        'searchKey' => $p->property1,
        'displayKey' => $p->property2,
    ])
        ->set('searchTerm', 'Test Item')
        ->assertSee($property1_value)
        ->assertSee($property2_value);

    Schema::dropIfExists(DvUiTestModel::table());
});
test('can pagination dynamically', function () {
    expect(false)->toBeTrue();
});
