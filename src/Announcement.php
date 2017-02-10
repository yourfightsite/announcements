<?php

namespace YourFightSite\Announcements;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use Concerns\ManagesUserModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'body',
        'action_text',
        'action_url',
    ];

    /**
     * Whether this announcement has an action.
     *
     * @return bool
     */
    public function hasAction()
    {
        return $this->action_text && $this->action_url;
    }
}
