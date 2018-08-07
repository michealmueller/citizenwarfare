<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * Class Team
 *
 * @package App
 * @property int $id
 * @property int $user_id
 * @property string $team_name
 * @property int $team_members_ids
 * @property string $team_website
 * @property int $wins
 * @property int $losses
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $creator
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereLosses($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereTeamMembersIds($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereTeamName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereTeamWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Team whereWins($value)
 */
	class Team extends \Eloquent {}
}

namespace App{
/**
 * Class User
 *
 * @package App
 * @property int $id
 * @property int $role_id
 * @property string $name
 * @property string $email
 * @property string $avatar
 * @property string $password
 * @property bool $activated
 * @property string $hash
 * @property int $team_id
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $stripe_id
 * @property string $card_brand
 * @property string $card_last_four
 * @property string $trial_ends_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \App\Team $teams
 * @method static \Illuminate\Database\Query\Builder|\App\User whereActivated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCardBrand($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCardLastFour($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHash($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereStripeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereTeamId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

