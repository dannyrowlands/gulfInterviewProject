<?php declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Collection;
use Tests\TestCase;
use App\Models\Partners;
use App\Models\MeterPointPartners;

class partnersModelRelationshipsTest extends TestCase
{
    
    use RefreshDatabase, WithFaker;
    
    protected function setUp(): void
    {
        parent::setup();
        Artisan::call('migrate:rollback');
        Artisan::call('migrate');
        Artisan::call('db:seed');
        $this->obj = Partners::factory()->create();
    }
    
    public function testPartnersCanHaveAMeterPointsPartner()
    {
        MeterPointPartners::factory()->create(['partner_id' => $this->obj->id]);
        $this->assertTrue(MeterPointPartners::where('partner_id', $this->obj->id)->get()->first()->id === $this->obj->id);
    }
}