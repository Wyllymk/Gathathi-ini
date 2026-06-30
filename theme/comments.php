<?php
/**
 * Comments template.
 */
if ( post_password_required() ) {
    echo '<p class="text-white/50 text-sm py-6">This post is password protected. Enter the password to view comments.</p>';
    return;
}
?>

<?php if ( have_comments() ) : ?>
<div class="mt-4">
  <h2 class="font-display text-2xl tracking-[-0.01em] mb-8">
    <?php comments_number( 'No comments', '1 Comment', '% Comments' ); ?>
  </h2>
  <ol class="space-y-px list-none">
    <?php wp_list_comments(['style'=>'ol','short_ping'=>true,'avatar_size'=>40,'callback'=>function($comment,$args,$depth){
        echo '<li id="comment-' . get_comment_ID() . '" class="bg-[#111827] p-6">';
        echo '<div class="flex items-start gap-4">';
        echo '<div class="flex-shrink-0">' . get_avatar($comment,40,'','',['class'=>'grayscale']) . '</div>';
        echo '<div class="flex-1">';
        echo '<div class="flex flex-wrap items-baseline gap-3 mb-2">';
        echo '<span class="font-display text-sm">' . get_comment_author_link() . '</span>';
        echo '<time class="text-[10px] tracking-[0.18em] uppercase text-white/40">' . get_comment_date() . '</time>';
        if ($comment->comment_approved === '0') echo '<span class="text-[10px] text-[#D4B574] tracking-[0.15em] uppercase">Awaiting moderation</span>';
        echo '</div>';
        echo '<div class="text-sm text-white/65 leading-relaxed">';
        comment_text();
        echo '</div>';
        echo '<div class="mt-3 text-[10px]">';
        comment_reply_link(array_merge($args,['reply_text'=>'Reply &rarr;','class'=>'text-[#D4B574] link-underline tracking-[0.15em] uppercase']));
        echo '</div>';
        echo '</div></div></li>';
    }]); ?>
  </ol>
  <?php the_comments_pagination(['mid_size'=>2]); ?>
</div>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
<?php
comment_form([
    'title_reply'        => '<span class="font-display text-2xl tracking-[-0.01em]">Leave a Comment</span>',
    'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title mt-12 mb-8">',
    'title_reply_after'  => '</h3>',
    'label_submit'       => 'Post Comment',
    'class_submit'       => 'btn-gold px-6 py-3 font-display text-[12px] tracking-[0.22em] uppercase',
    'class_form'         => 'space-y-5',
    'fields'             => [
        'author' => '<div><label class="eyebrow block mb-2" for="author">Name *</label><input type="text" id="author" name="author" required class="w-full border border-[rgba(245,241,232,.14)] bg-transparent px-4 py-3 text-sm text-white placeholder:text-white/30 focus:border-[rgba(184,146,72,.5)] outline-none transition"/></div>',
        'email'  => '<div><label class="eyebrow block mb-2" for="email">Email * <span class="text-white/30 normal-case tracking-normal font-normal">(not published)</span></label><input type="email" id="email" name="email" required class="w-full border border-[rgba(245,241,232,.14)] bg-transparent px-4 py-3 text-sm text-white placeholder:text-white/30 focus:border-[rgba(184,146,72,.5)] outline-none transition"/></div>',
        'url'    => '',
    ],
    'comment_field'      => '<div><label class="eyebrow block mb-2" for="comment">Comment *</label><textarea id="comment" name="comment" rows="5" required class="w-full border border-[rgba(245,241,232,.14)] bg-transparent px-4 py-3 text-sm text-white placeholder:text-white/30 focus:border-[rgba(184,146,72,.5)] outline-none transition resize-none" placeholder="Your comment…"></textarea></div>',
]);
?>
<?php endif; ?>
