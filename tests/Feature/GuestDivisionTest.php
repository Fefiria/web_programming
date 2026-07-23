<?php

use App\Models\Division;

it('shows guest division page with divisions from the database', function () {
    $division = Division::create(['name' => 'Web Development']);

    $response = $this->get('/division');

    $response->assertOk();
    $response->assertSee($division->name);
});
