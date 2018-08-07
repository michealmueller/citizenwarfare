<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;

/**
 * Class Team
 *
 * @package App
 * @property int $id
 * @property int|null $user_id
 * @property string $team_name
 * @property int $team_members_ids
 * @property string|null $team_website
 * @property int $wins
 * @property int $losses
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User|null $creator
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereLosses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereTeamMembersIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereTeamName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereTeamWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereWins($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $members
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereDeletedAt($value)
 */
class Team extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_name', 'team_members', 'team_website', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany(User::class);
    }
}
