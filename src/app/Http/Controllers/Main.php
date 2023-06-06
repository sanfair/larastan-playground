<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        DB::beginTransaction();

        User::factory()->create();
        // Load from database.
        $user = User::first();
        dump($user->toArray());

        $user->invitations()->create();
        // Load from database.
        $invitation = Invitation::first();
        dump($invitation->toArray());
        dump(['get_debug_type($invitation->user_id)' => get_debug_type($invitation->user_id)]);

        $this->phpstanTest($user, $invitation);

        DB::rollBack();
    }

    private function phpstanTest(User $user, Invitation $invitation) {
        if (! function_exists('\PHPStan\dumpType')) {
            return;
        }
        \PHPStan\dumpType($user->id);
        \PHPStan\dumpType($invitation->user_id);

        \PHPStan\Testing\assertType('string', $user->id);
        \PHPStan\Testing\assertType('string', $invitation->user_id);
    }
}
