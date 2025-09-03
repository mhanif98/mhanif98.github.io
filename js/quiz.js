import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-analytics.js";
import { getDatabase, ref, onValue, set } from "https://www.gstatic.com/firebasejs/11.0.1/firebase-database.js";

    const firebaseConfig = {
        apiKey: "AIzaSyA5LYlKY4DmqXjBNIpj7R2EcpypBtxkDoQ",
        authDomain: "mh-project-1st.firebaseapp.com",
        databaseURL: "https://mh-project-1st-default-rtdb.firebaseio.com",
        projectId: "mh-project-1st",
        storageBucket: "mh-project-1st.firebasestorage.app",
        messagingSenderId: "3599401013",
        appId: "1:3599401013:web:d1a50cf04d177ed26d717c",
        measurementId: "G-ZPBYGQC6RB"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const database = getDatabase(app);

    // Function to save data to Firebase
    export function saveDataScores(name, score) {
        // const newRef = ref(database, 'data/' + Date.now()); // Using timestamp as unique ID for each entry
        const newRef = ref(database, 'scores/' + Date.now()); // Using timestamp as unique ID for each entry
        set(newRef, {
            name: name,
            score: score
        }).then(() => {
            // Update the UI or display success message
            // document.getElementById('response').innerHTML = 'Data saved successfully!';
            console.log(200);
        }).catch((error) => {
            // Display any error that occurs
            // document.getElementById('response').innerHTML = 'Error saving data: ' + error.message;
            console.log(500);
        });
    }
    
