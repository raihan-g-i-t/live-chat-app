import axios from 'axios';
import Echo from 'laravel-echo';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-app-key',       // from .env (PUSHER_APP_KEY)
    cluster: 'mt1',            // or your actual cluster
    forceTLS: true
});

