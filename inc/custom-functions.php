<?php

function vintage_get_comment_time($comment_id = 0){
    return sprintf(
        _x('%s ago', 'Human-readable', 'text-domain'),
        human_time_diff(
            get_comment_date('U', $comment_id),
            current_time('timestamp')
        )
    );
}

