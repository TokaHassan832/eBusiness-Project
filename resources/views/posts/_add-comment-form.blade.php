<div class="comment-respond">
    <h3 class="comment-reply-title">Leave a Reply </h3>
    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
    <form method="post" action="/blog/posts/{{ $post->id }}/comments">
        @csrf
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <p>Name *</p>
                <input type="text" name="name" />
            </div>
            <div class="col-lg-4 col-md-4">
                <p>Email *</p>
                <input type="email" name="email" />
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                <p>Comment</p>
                <textarea id="message-box" cols="30" rows="10" name="body"></textarea>
                <input type="submit" value="Post Comment" />
            </div>
        </div>
    </form>
</div>
