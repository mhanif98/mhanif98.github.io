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

    // Reference to your Firebase Realtime Database location
    const dataRef = ref(database, 'data');

    // Read the data from Firebase
    onValue(dataRef, (snapshot) => {
        const data = snapshot.val();
        // Display data on the page
        const dataDiv = document.getElementById('data');
        // dataDiv.innerHTML = JSON.stringify(data, null, 2);

        if (data) {
            let tableHTML = `
                <table border="1" style="margin: 0 auto; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
            `;

            let index = 1;
            for (const key in data) {
                tableHTML += `
                    <tr>
                        <td>${index++}</td>
                        <td>${data[key].name || '-'}</td>
                        <td>${data[key].age || '-'}</td>
                    </tr>
                `;
            }

            tableHTML += `
                    </tbody>
                </table>
            `;

            dataDiv.innerHTML = tableHTML;
        } else {
            dataDiv.innerHTML = 'no data available.';
        }

        
    }, (error) => {
        console.error('Error reading data:', error);
    });

    // Get the form element
    const form = document.getElementById('inputForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent the default form submission

        // Get the input values
        const name = document.getElementById('name').value;
        const age = document.getElementById('age').value;
        // const email = document.getElementById('email').value;

        // Call the function to save data
        saveData(name, age);
        // saveData(name, email);
    });

    // Function to save data to Firebase
    function saveData(name, age) {
        // const newRef = ref(database, 'data/' + Date.now()); // Using timestamp as unique ID for each entry
        const newRef = ref(database, 'data/' + Date.now()); // Using timestamp as unique ID for each entry
        set(newRef, {
            name: name,
            age: age
        }).then(() => {
            // Update the UI or display success message
            document.getElementById('response').innerHTML = 'Data saved successfully!';
        }).catch((error) => {
            // Display any error that occurs
            document.getElementById('response').innerHTML = 'Error saving data: ' + error.message;
        });
    }


    // score player
    // Reference to your Firebase Realtime Database location
    const dataRefPlayer = ref(database, 'scores');

    // Read the data from Firebase
    onValue(dataRefPlayer, (snapshot) => {
        const data = snapshot.val();
        const dataDiv = document.getElementById('dataPlayer');

        if (data) {
            // Ubah object jadi array dan tambahkan key-nya jika perlu
            const dataArray = Object.entries(data).map(([key, value]) => ({
                key,
                ...value
            }));

            // Urutkan array berdasarkan score secara descending
            dataArray.sort((a, b) => (b.score || 0) - (a.score || 0));

            // Tampilkan ke dalam tabel
            let tableHTML = `
                <table border="1" style="margin: 0 auto; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Scores</th>
                        </tr>
                    </thead>
                    <tbody>
            `;

            dataArray.forEach((item, index) => {
                tableHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.name || '-'}</td>
                        <td>${item.score || 0}</td>
                    </tr>
                `;
            });

            tableHTML += `
                    </tbody>
                </table>
            `;

            dataDiv.innerHTML = tableHTML;
        } else {
            dataDiv.innerHTML = 'no data available.';
        }

    }, (error) => {
        console.error('Error reading data:', error);
    });


    // Function to save data to Firebase
    export function saveDataScores(name, score) {
        // const newRef = ref(database, 'data/' + Date.now()); // Using timestamp as unique ID for each entry
        const newRef = ref(database, 'scores/' + Date.now()); // Using timestamp as unique ID for each entry
        set(newRef, {
            name: name,
            score: score
        }).then(() => {
            // Update the UI or display success message
            document.getElementById('response').innerHTML = 'Data saved successfully!';
        }).catch((error) => {
            // Display any error that occurs
            document.getElementById('response').innerHTML = 'Error saving data: ' + error.message;
        });
    }
    
