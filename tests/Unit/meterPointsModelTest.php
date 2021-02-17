<?php declare(strict_types=1);

namespace Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Collection;
use Tests\TestCase;
use App\Models\MeterPoints;

class meterPointsModelTest extends TestCase
{
    
    use RefreshDatabase, WithFaker;
    
    protected function setUp(): void
    {
        parent::setup();
        Artisan::call('migrate:rollback');
        Artisan::call('migrate');
        Artisan::call('db:seed');
        $this->obj = MeterPoints::factory()->create();
    }
    
    /** @test  */
    public function testMeterPointsDatabaseTableHasExpectedColumns(): void
    {
        $this->assertTrue(
          Schema::hasColumns('meter_points', [
                             'id',
                             'meterpoint',
                             'consumption',
                             'uplift',
                             'created_at',
                             'updated_at',
        ]), "Could not verify that all columns listed are present in Database table.");
    }
    
    
    /** @test  */
    public function testMeterPointsModelHasExpectedAttributes(): void
    {
        $attributes = $this->obj->getAttributes();
        
        $this->assertTrue(array_key_exists('id', $attributes));
        $this->assertTrue(array_key_exists('meterpoint', $attributes));
        $this->assertTrue(array_key_exists('consumption', $attributes));
        $this->assertTrue(array_key_exists('uplift', $attributes));
        $this->assertTrue(array_key_exists('created_at', $attributes));
        $this->assertTrue(array_key_exists('updated_at', $attributes));
    }

    /**
     * @return void
     */
    
    public function testMeterPointsIsObject(): void
    {
        $this->assertIsObject($this->obj);
    }
    
    /**
     * @return void
     */
    
    public function testMeterPointsIsInstanceofMeterPointsClass(): void
    {
        $this->assertInstanceOf(MeterPoints::class, $this->obj);
    }
    
    /**
    * @return void
    */
    
    public function testMeterPointsModelsCanBeInstantiatedViaFactory() : void
    {
        $this->assertInstanceOf(MeterPoints::class, $this->obj);
    }
}
            

