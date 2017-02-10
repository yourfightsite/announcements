<?php

namespace YourFightSite\Announcements\Concerns;

trait ManagesUserModel
{
    /**
     * The user model class name.
     *
     * @var string
     */
    public static $userModel = 'YourFightSite\User';

    /**
     * Get the user that created this announcement.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(static::$userModel);
    }

    /**
     * Set the user model class name.
     *
     * @param  string  $userModel
     * @return void
     */
    public static function useUserModel($userModel)
    {
        static::$userModel = $userModel;
    }

    /**
     * Get the user model class name.
     *
     * @return string
     */
    public static function userModel()
    {
        return static::$userModel;
    }
}
