<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use App\Helpers\Helper;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        Log::info('إضافة بيانات', ['post_id' => $post->id]);
        Helper::logAction($post,'إضافة بيانات');

    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        Helper::logAction($post,'تحديث البيانات');
        Log::info('تحديث البيانات', ['post_id' => $post->id, 'changes' => $post->getChanges()]);

    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        Log::info('حذف البيانات', ['post_id' => $post->id]);
        Helper::logAction($post, 'حذف البيانات');

    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
