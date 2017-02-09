<div class="modal modal-docked modal-docked-right" id="modal-announcements" tabindex="-1" role="dialog" aria-labelledby="modal-announcements-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <header class="modal-header">
                <h1 class="modal-title h4" id="modal-announcements-label">Announcements</h1>
            </header>
            <div class="modal-body">
                <div class="announcement-container">
                    @if($announcements->isEmpty())
                        <div class="alert alert-warning">
                            @include('announcements::partials.no-announcements')
                        </div>
                    @else
                        @foreach($announcements as $announcement)
                            <article class="announcement">
                                <div class="media">
                                    <figure class="media-left">
                                        <img src="//www.gravatar.com/avatar/{{ md5(strtolower(trim($announcement->user->email))) }}?s=96" alt="{{ $announcement->user->name }}" class="announcement-author-avatar" />
                                    </figure>
                                    <div class="media-body">
                                        <header class="announcement-meta">
                                            <p class="announcement-author-name">{{ $announcement->user->name }}</p>
                                            <time class="announcement-time" datetime="{{ $announcement->created_at->toAtomString() }}">{{ $announcement->created_at->diffForHumans() }}</time>
                                        </header>
                                        <div class="announcement-body">
                                            <p>{{ nl2br($announcement->body) }}</p>
                                        </div>
                                        @if($announcement->hasAction())
                                            <div class="announcement-actions">
                                                <a class="btn btn-primary" href="{{ $announcement->action_url }}">
                                                    <span class="btn-text">{{ $announcement->action_text }}</span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
            <footer class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </footer>
        </div>
    </div>
</div>
