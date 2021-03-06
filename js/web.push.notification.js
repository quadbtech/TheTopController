
// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "ENTER_YOUR_FIREBASE_API_KEY",
    authDomain: "web-push-notification-4b7d7.firebaseapp.com",
    databaseURL: "https://web-push-notification-4b7d7.firebaseio.com",
    projectId: "web-push-notification-4b7d7",
    storageBucket: "web-push-notification-4b7d7.appspot.com",
    messagingSenderId: "80760388858",
    appId: "1:80760388858:web:719d5faa3617dc99015d43",
    measurementId: "G-JJVT2WTC7R"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();
const messaging = firebase.messaging();


messaging.requestPermission()
    .then(function () {

        // console.log('have permission');
        if (isTokenSentToServer()) {
            // console.log('token already sent to server');
        } else {
            getRegistrationToken();
        }

    })
    .catch(function (err) {
        console.log('error occured');
    });


function getRegistrationToken() {
    // Get Instance ID token. Initially this makes a network call, once retrieved
    // subsequent calls to getToken will return from cache.
    messaging.getToken().then((currentToken) => {
        if (currentToken) {
            saveToken(currentToken);
            // console.log(currentToken);
            sendTokenToServer(currentToken);
            //updateUIForPushEnabled(currentToken);
        } else {
            // Show permission request.
            console.log('No Instance ID token available. Request permission to generate one.');
            // Show permission UI.
            //updateUIForPushPermissionRequired();
            setTokenSentToServer(false);
        }
    }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
        //showToken('Error retrieving Instance ID token. ', err);
        setTokenSentToServer(false);
    });
}
function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? '1' : '0');
}
function sendTokenToServer(currentToken) {
    if (!isTokenSentToServer()) {
        console.log('Sending token to server...');
        // TODO(developer): Send the current token to your server.
        setTokenSentToServer(true);
    } else {
        console.log('Token already sent to server so won\'t send it again ' +
            'unless it changes');
    }

}

function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') === '1';
}

function saveToken(currentToken) {
    $.ajax({
        type: 'POST',
        url: 'php/save-token.php',
        dataType: "json",
        data: {
            token: currentToken
        },
        success: function (data) {
            if (data.status = 'ok') {
                console.log(data.status);
            } else if (data.status = 601) {
                console.log(data.error);
            }
            // console.log(data);
        }
    });
}

// Handle incoming messages. Called when:
// - a message is received while the app has focus
// - the user clicks on an app notification created by a service worker
//   `messaging.setBackgroundMessageHandler` handler.
messaging.onMessage((payload) => {
    console.log('Message received. ', payload);
    // ...
    var title = payload.data.title;
    var options = {
        body: payload.data.body,
        icon: payload.data.icon,
        image: payload.data.image,
        data: {
            time: new Date(Date.now()).toString(),
            click_action: payload.data.click_action
        }
    };
    var myNotification = new Notification(title, options);
});

