<?php declare(strict_types=1);

namespace Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Collection;
use Tests\TestCase;
use App\Models\MeterPointPartners;

class meterPointPartnersModelTest extends TestCase
{
    
    use RefreshDatabase, WithFaker;
    
    protected function setUp(): void
    {
        parent::setup();
        Artisan::call('migrate:rollback');
        Artisan::call('migrate');
        Artisan::call('db:seed');
        $this->obj = MeterPointPartners::factory()->create();
    }
    
    /** @test  */
    public function testMeterPointPartnersDatabaseTableHasExpectedColumns(): void
    {
        $this->assertTrue(
          Schema::hasColumns('meter_point_partners', [
                             'id',
                             'partner_id',
                             'meter_point_id',
                             'created_at',
                             'updated_at',
        ]), "Could not verify that all columns listed are present in Database table.");
    }
    
    /** @test  */
    public function testMeterPointPartnersModelHasExpectedAttributes(): void
    {
        $attributes = $this->obj->getAttributes();
        
        $this->assertTrue(array_key_exists('id', $attributes));
        $this->assertTrue(array_key_exists('name', $attributes));
        $this->assertTrue(array_key_exists('created_at', $attributes));
        $this->assertTrue(array_key_exists('updated_at', $attributes));
    }

    /**
     * @return void
     */
    
    public function testMeterPointPartnersIsObject(): void
    {
        $this->assertIsObject($this->obj);
    }
    
    /**
     * @return void
     */
    
    public function testPartnerIsInstanceofPartnerClass(): void
    {
        $this->assertInstanceOf(Partner::class, $this->obj);
    }
    
    /**
    * @return void
    */
    
    public function testPartnerModelsCanBeInstantiatedViaFactory() : void
    {
        $this->assertInstanceOf(Partner::class, $this->obj);
    }
}
            

