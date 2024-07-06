importScripts('https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.6.8/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyAn2IJ-74cdjcS7J9moq4VNNsybr4CJDUM",
    authDomain: "cod-laravel.firebaseapp.com",
    projectId: "cod-laravel",
    storageBucket: "cod-laravel.appspot.com",
    messagingSenderId: "305294519973",
    appId: "1:305294519973:web:791ec16b52e9e65797674c",
    measurementId: "G-6WZY6VLXMF"
});

const messaging = firebase.messaging();

messaging.onBackgroundMessage(function(payload) {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);
    const notificationTitle = payload.notification.title;
    const notificationOptions = {
        body: payload.notification.body,
        icon: payload.notification.icon
    };

    self.registration.showNotification(notificationTitle, notificationOptions);
});
