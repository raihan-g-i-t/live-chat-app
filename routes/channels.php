<?php

Broadcast::channel('chat', function ($user) {
    return true; // add auth logic if needed
});
