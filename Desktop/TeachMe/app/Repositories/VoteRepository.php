<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 12/10/16
 * Time: 8:56 PM
 */

namespace TeachMe\Repositories;

use TeachMe\Entities\Ticket;
use TeachMe\Entities\User;


class VotesRepository
{
    public function vote(User $user, Ticket $ticket)
    {
        if ($user->hasVoted($ticket)) return false;

        $user->voted()->attach($ticket);
        return true;

    }

    public function unvote(User $user, Ticket $ticket)
    {
        if ( ! $user->hasVoted($ticket)) return false;

        $user->voted()->detach($ticket);
        return true;
    }
}