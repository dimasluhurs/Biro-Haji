<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(OrderHasGuideTableSeeder::class);
        $this->call(OrderHasLeadersTableSeeder::class);
        $this->call(OrderHasPersonsTableSeeder::class);
        $this->call(OrderHasStatusesTableSeeder::class);
        $this->call(OrdersStatusesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PassportsTableSeeder::class);
        $this->call(PersonsTableSeeder::class);
        $this->call(PlanFeaturesTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(ScheduleDetailsTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(UserHasInvitationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VouchersTableSeeder::class);
    }
}
