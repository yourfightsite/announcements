<?php

namespace YourFightSite\Announcements;

class AnnouncementRepository
{
    /**
     * Get the most recent announcement notifications for the application.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function recent()
    {
        return Announcement::with('user')->latest()->take(8)->get();
    }
}
